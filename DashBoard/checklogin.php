<?php

ob_start();
include 'mysql.php';
mysql_connect("$host", "$username", "$password")or die(header("location:login.php?dberror")); 
mysql_select_db("$db_name")or die(header("location:login.php?dberror"));
$myusername=$_POST['login-email'];
$mypassword=$_POST['login-password'];
$myauth=$_SERVER['REMOTE_ADDR'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myauth = stripslashes($myauth);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myauth = mysql_real_escape_string($myauth);
$myauth = md5($myauth);
$mypassword = md5($mypassword);
$mylogintime = $_POST['login-remember-me'];
$sql="SELECT * FROM $tbl_name WHERE (username='$myusername' || email='$myusername') and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
    $_SESSION['login-email']="$myusername";
    $_SESSION['login-password']="$mypassword";
    $_SESSION['login-auth']="$myauth";
    
    if ($mylogintime == true){
    $hour = time() + 900000;
    }
    else {
    $hour = time() + 3600;
    }
    /* $hour sets cookie storage time for 1 hour */
    mysql_query("INSERT INTO $tbl_name (authtoken)
    VALUES ('$myauth') WHERE (username='$myusername' || email='$myusername') and password='$mypassword") or die(header("location:login.php?loginerror"));
    /* setcookie() function sets cookie after login */
    setcookie("username", $myusername, $hour);
    setcookie("password", $mypassword, $hour);
    setcookie("auth", $myauth, $hour);
    header("location:login_success.php");
}
else {
    header("location:login.php?fail");
}
ob_end_flush();
?>