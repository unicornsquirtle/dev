<?php
if (isset($_COOKIE["username"])) {
    $name = $_COOKIE["username"];
}
else{
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

<?php
if (isset($_GET['username'])) {
    echo $_GET['username'];
}
else{
    echo "Unknown";

}
?>
