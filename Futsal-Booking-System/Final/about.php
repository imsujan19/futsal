<!DOCTYPE html>
<html>
    <head><title>About Futsal</title>
    	<script src="javascript/jvs.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About</title> 
    <link rel="stylesheet" href="">

   
	<style >
    p{
        color:white;
        font-size:14px;
    
    }
    
    </style>>
    </head>
<body style=" background-image: url(img/backgr.jpg);">

<?php
    session_start();
    if(isset($_SESSION['email'])){
            include("../Final/Assets/in_user_nav.php");
    } else {
        include("../Final/Assets/out_user_nav.php");
    }
    date_default_timezone_set('Asia/Kathmandu');
?><br><br><br><br>
    
<h1 style="color:#ddd; margin: 2px; padding-top: 10px; padding-left: 10%;">What is Futsal?</h1>
<table text=justify style="position:relative; left: 10%; " width="80%"><tr >
<td style="font-size: 18px; color: #eee;"><br>
</html>
<?php include"footer.php";?>