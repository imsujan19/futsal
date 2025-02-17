<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="">

    <title>Home</title>

<style>
button.down {
    background-color: rgba(43, 43, 43, 1);
    color: rgba(161, 254, 107, 1);
    cursor: pointer;
    padding: 20px;
    width: 60%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

</style>
</head>
<?php
    session_start();
    if(isset($_SESSION['email'])){
            include("../Final/Assets/in_user_nav.php");
    } else {
        include("../Final/Assets/out_user_nav.php");
    }
    date_default_timezone_set('Asia/Kathmandu');
?><br><br><br><br><br>

<div class="container">
<span style="color:#eee">
<h2>SERVICES</h2><br><br>
<p>The Mega Futsal Ground is popular because of their best services provided to their members and bookers. 
    <br>Following are the major services:<br> </span><br>
 </p>
<button class="down">1. SWIMMING POOL</button>
<button class="down">2. SHOPPING</button>
<button class="down">3. BIG PARKING</button>
<button class="down">4. FREE WIFI</button>
<button class="down">5. CAFE</button>
</body>
</html>
