<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>


    <style>
  * {
    font-family: 'Oxygen', sans-serif;
  }

  form {
    width: 500px;
  }


  .input-box input {
    padding: 5px;
    width: 100%;
    height: 100%;
    color: #e4e4e4;
    background: transparent;
    border: 2px solid rgba(43, 43, 43, 1);
    border-radius: 4px;
    background-color: rgba(43, 43, 43, 1);
    font-size: 15px;
}

.input-box textarea {
    padding: 5px;
    color: #e4e4e4;
    background: transparent;
    border: 2px solid rgba(43, 43, 43, 1);
    border-radius: 4px;
    background-color: rgba(43, 43, 43, 1);
    font-size: 15px;
}


  .contact {
    color: #ddd;
    position: relative;
    padding-left: 10px;
  }

  td {
    width: 100%;
    text-align: left;
  }

  table {
    padding-right: 200px;
    margin: 20px;
    padding: 30px;
  }

  
  .form-box .input-box {
    position: relative;
    width: 340px;
    height: 45px;
    margin: 50px 0;
}

  .form_submit {
    padding: 8px 17px;
    cursor: pointer;
    color: #fff;
    width: 200px;
    height:50px;
    border: 3px;
    font-size:20px;
    background-color: #2ecc71;
    border-bottom: 2px solid #27ae60;
    margin-bottom: 5px;
    position: relative;
  }

  
.input-box input {
    padding: 5px;
    width: 400px;
    height: 40px;
    color: #e4e4e4;
    background: transparent;
    border: 2px solid rgba(43, 43, 43, 1);
    border-radius: 4px;
    background-color: rgba(43, 43, 43, 1);
    font-size: 15px;
}

.input-box label {
    position: absolute;
    top: -30%;
    left: 0;
    transform: translateY(-50%);
    font-size: 20px;
}

.form-box p{
  color: white;
  padding: 0 50px;
}

.line {
  top: 130px;
  height: 10px;
  width: 200px;
  background-color: rgba(161, 254, 107, 1);
  position: absolute;
}


</style>

</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['email'])){
            include("../Final/Assets/in_user_nav.php");
    } else {
        include("../Final/Assets/out_user_nav.php");
    }
   
?>
    <div id="container" style="position: relative; font-size:20px;">
        <div class="form-box">
            <br> <br> <br> <br><div class="form-boxx">
  <div class="line"></div> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
  <p>Get In Touch</p><br><br><br><br><br><br><br><br><br><br>
</div>
            
    </div>
    <?php
    include "footer.php";
    ?>
</body>
</html>