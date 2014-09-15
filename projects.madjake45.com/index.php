<?php

require_once './protected/config/config.php';

$view = './protected/views/index.php';
if (isset($_GET['view'])) {
    $view = './protected/views/' . $_GET['view'] . '.php';
}
echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
try {
    if (file_exists($view)) {
        require_once $view;
    } else {
        throw new Exception("$view not found!");
    }

    require_once './protected/views/base.php';

    echo $base_content;
} catch (Exception $e) {
    if ($_CONFIG['DEBUG']) {
        print $e->getMessage();
    } else {
        //404
        echo "http://$_SERVER[HTTP_HOST]/404";
    }
}