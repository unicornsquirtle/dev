<?php

ob_start();

include 'mysql.php';

mysql_connect("$host", "$username", "$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_COOKIE['username'];

$myusername = stripslashes($myusername);

$myusername = mysql_real_escape_string($myusername);

$query="SELECT email FROM $tbl_name WHERE username='$myusername'";

$result = mysql_query($query);

$row = mysql_fetch_row($result);

echo $row[0];

ob_end_flush();
