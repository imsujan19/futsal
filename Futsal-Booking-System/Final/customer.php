<?php
session_start();
require 'config.php'; // Ensure this file contains a proper database connection

date_default_timezone_set('Asia/Kathmandu');

if (isset($_POST['vsubmit'])) {
    if (!isset($_SESSION['email'])) {
        echo '<script>alert("Please log in first!"); window.location.replace("login.php");</script>';
        exit;
    }

    $stmt = $connect->prepare("SELECT id, fname FROM register WHERE email = ?");
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $details = $result->fetch_assoc();
    $stmt->close();

    if (!$details) {
        echo '<script>alert("User not found!"); window.location.replace("customer.php");</script>';
        exit;
    }

    $user = $details['fname'];
    $userid = $details['id'];

    $vno = $_POST['vno'];
    $id = $_POST['bookingid'];

    $stmt = $connect->prepare("SELECT COUNT(*) FROM payment WHERE vno = ?");
    $stmt->bind_param("s", $vno);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo '<script>alert("Voucher not valid or already used!"); window.location.replace("customer.php");</script>';
        exit;
    }

    $name = 'vouch' . $id . '.jpg';
    $location = 'uploads/';

    if (!empty($_FILES['vimg']['tmp_name'])) {
        $tmp_name = $_FILES['vimg']['tmp_name'];

        if (move_uploaded_file($tmp_name, $location . $name)) {
            $stmt = $connect->prepare("UPDATE booking SET confirm_key = 10 WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();

            $stmt = $connect->prepare("INSERT INTO payment (booking_id, user_id, vno, vimgloc, time) VALUES (?, ?, ?, ?, NOW())");
            $imgPath = $location . $name;
            $stmt->bind_param("iiss", $id, $userid, $vno, $imgPath);
            $stmt->execute();
            $stmt->close();

            echo '<script>alert("Voucher Submitted Successfully! Waiting for Admin Approval"); window.location.replace("customer.php");</script>';

            $to = "admin@example.com";
            $subject = "New Voucher Submission";
            $message = "A new voucher has been submitted for booking ID $id.\nPlease review and take necessary actions.";
            $headers = "From: no-reply@example.com";

            mail($to, $subject, $message, $headers);
        }
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $stmt = $connect->prepare("SELECT gmail, password FROM admin WHERE gmail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = 1;
            header("location: admin.php");
            exit();
        }
    }

    echo '<script>alert("Invalid username or password!"); window.location.href = "login.php";</script>';
    exit();
}

if (isset($_POST['btnSubmit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if (!preg_match('/^[0-9]{10}$/', $contact)) {
        echo '<script>alert("Invalid Contact Number!"); window.location.replace("signup.php");</script>';
        exit;
    }

    if ($password !== $cpassword) {
        echo '<script>alert("Passwords do not match!"); window.location.replace("signup.php");</script>';
        exit;
    }

    $stmt = $connect->prepare("SELECT email FROM register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        echo '<script>alert("Email already exists!"); window.location.replace("signup.php");</script>';
        exit;
    }

    $stmt->close();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $connect->prepare("INSERT INTO register (fname, lname, email, contact, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $lname, $email, $contact, $hashedPassword);
    $stmt->execute();
    $stmt->close();

    $_SESSION['email'] = $email;
    $_SESSION['user'] = $fname;

    echo '<script>alert("User Registered Successfully!"); window.location.replace("login.php");</script>';

    $to = $email;
    $subject = 'Registration Confirmation';
    $emailBody = "Dear $fname,\n\nThank you for registering!\n\nYour details:\nName: $fname $lname\nEmail: $email\nContact: $contact\n";
    mail($to, $subject, $emailBody, 'From: no-reply@example.com');
}

if (isset($_POST['proceed'])) {
    if (!isset($_SESSION['email'])) {
        echo '<script>alert("You need to log in first!"); window.location.replace("login.php");</script>';
        exit;
    }

    $email = $_SESSION['email'];
    $bookday = $_POST['bookdate'];
    $shift = $_POST['shift'];

    $stmt = $connect->prepare("SELECT id, contact, fname FROM register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $details = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    $user = $details['fname'];
    $contact = $details['contact'];
    $user_id = $details['id'];

    $timestamp = strtotime($bookday);
    $shiftHours = [
        "6 TO 7 AM" => 6, "7 TO 8 AM" => 7, "8 TO 9 AM" => 8,
        "9 TO 10 AM" => 9, "10 TO 11 AM" => 10, "11 TO 12 AM" => 11,
        "12 TO 1 PM" => 12, "1 TO 2 PM" => 13, "2 TO 3 PM" => 14,
        "3 TO 5 PM" => 15, "4 TO 5 PM" => 16, "5 TO 6 PM" => 17,
        "6 TO 7 PM" => 18, "7 TO 8 PM" => 19
    ];
    $timestamp += $shiftHours[$shift] * 3600;

    $stmt = $connect->prepare("INSERT INTO booking (user, bookday, shift, contact, email, timecheck, confirm_key) VALUES (?, ?, ?, ?, ?, ?, 1)");
    $stmt->bind_param("sssssi", $user, $bookday, $shift, $contact, $email, $timestamp);
    $stmt->execute();
    $stmt->close();

    echo '<script>alert("Booking Successful!"); window.location.replace("booking.php");</script>';
}
?>
