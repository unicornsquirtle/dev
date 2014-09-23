<?php

require_once 'config/config.php';

    require_once 'statics/base.php';

    echo $base_content;

$view = 'statics/index.php';
if (isset($_GET['view'])) {
    $view = 'statics/' . $_GET['view'] . '.php';
}
try {
    if (file_exists($view)) {
        require_once $view;
    } else {
        throw new Exception("$view not found!");
    }

    
    require_once 'statics/footer.php';
} catch (Exception $e) {
    if ($_CONFIG['DEBUG']) {
        echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
        print $e->getMessage();
    } else {
        //404
        echo "http://$_SERVER[HTTP_HOST]/404";
    }
}