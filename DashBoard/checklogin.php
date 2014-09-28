<?php

ob_start();
include 'mysql.php';
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$myusername=$_POST['login-email'];
$mypassword=$_POST['login-password'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE (username='$myusername' || email='$myusername') and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
    $_SESSION['login-email']="$myusername";
    $_SESSION['login-password']="$mypassword";
    $hour = time() + 3600;
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