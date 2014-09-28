<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 09/04/14
 * Time: 18:51
 */

if (isset($_GET['username'])){
    echo $_GET['username'];

}
else{
    echo $_COOKIE['username'];


}