<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];
}
else{

    $key = 'Nope';

}
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 10/04/14
 * Time: 23:56
 */
//Make db connection.
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'test';
$tbl_name = 'test';


mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//Main system
$query = mysqli_query($db, "SELECT `key` FROM `$$tbl_name` WHERE `key` = '$key'")
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==1){
    echo 'This Key Is Correct';
}
else{
    echo 'This Key Is Incorrect';
}