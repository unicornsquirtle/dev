<?php

ob_start();
include 'mysql.php';
mysql_connect("$host", "$username", "$password")or die(header("location:login.php?error")); 
mysql_select_db("$db_name")or die(header("location:login.php?error"));
$myusername=$_POST['login-email'];
$mypassword=$_POST['login-password'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mylogintime = $_POST['login-remember-me'];
$sql="SELECT * FROM $tbl_name WHERE (username='$myusername' || email='$myusername') and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
    $_SESSION['login-email']="$myusername";
    $_SESSION['login-password']="$mypassword";
    
    if ($mylogintime == true){
    $hour = time() + 900000;
    }
    else {
    $hour = time() + 3600;
    }
    /* $hour sets cookie storage time for 1 hour */

    /* setcookie() function sets cookie after login */
    setcookie("username", $myusername, $hour);
    setcookie("password", $mypassword, $hour);
    header("location:login_success.php");
}
else {
    header("location:login.php?fail");
}
ob_end_flush();
?>