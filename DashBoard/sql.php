<?php
include "mysql.php";
$filename= null;
if(basename($_SERVER['PHP_SELF']) != 'login.php' ) {
    ob_start();
    mysql_connect("$host", "$username", "$password")or die(header("location:login.php?dberror"));
    ob_end_flush();
      if (empty($_COOKIE["username"])){
    header("location:login.php");
  }
}

if (isset($_COOKIE["username"])) {
    $name = $_COOKIE["username"];
}
if (isset($_COOKIE["auth"])){
ob_start();
mysql_connect("$host", "$username", "$password")or die(header("location:login.php?dberror")); 
mysql_select_db("$db_name")or die(header("location:login.php?dberror"));
$myusername=$_COOKIE["username"];
$myauth=$_COOKIE["auth"];
$myusername = stripslashes($myusername);
$myauth = stripslashes($myauth);
$myusername = mysql_real_escape_string($myusername);
$myauth = mysql_real_escape_string($myauth);
$mylogintime = $_POST['login-remember-me'];
$sql="SELECT * FROM $tbl_name WHERE (username='$myusername' || email='$myusername') and auth='$myauth'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
    $auth==true;
    setcookie("auth", $myauth, time()+3600 );
    setcookie("username", $myusername, time()+3600 );
    setcookie("password", $mypassword, time()+3600 );
    
}
else {
    $mypassword=$_COOKIE["password"];
    setcookie("username", "", time()-100000 );
    setcookie("password", "", time()-100000 );
    setcookie("auth", "", time()-100000 );
    header("location:login.php?authtoken");
}
ob_end_flush();
}
else{
    $mypassword=$_COOKIE["password"];
    setcookie("username", "", time()-100000 );
    setcookie("password", "", time()-100000 );
    setcookie("auth", "", time()-100000 );
    $name = "Unknown";
}
?>
<?php

$filename = "upload/{$name}.png";

if (file_exists($filename)) {
    $img = $filename;
} else {
    $img = "upload/icon114.png";
}
?>

