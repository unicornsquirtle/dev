<?php
ob_start();
include 'mysql.php';
mysql_connect("$host", "$username", "$password")or die(header("location:login.php?error"));
mysql_select_db("$db_name")or die(header("location:login.php?error"));
$myusername=$_POST['register-username'];
$mypassword=$_POST['register-password'];
$myemail =$_POST['register-email'];
$myemail = stripcslashes($myemail);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myemail = mysql_real_escape_string($myemail);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
mysql_query("INSERT INTO $tbl_name (username, email, password)
VALUES ('$myusername', '$myemail', '$mypassword')");
header("Location:login.php?registered");

