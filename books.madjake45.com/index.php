<?php

require_once 'config/config.php';
require_once 'statics/helpers.php';
echo 'HELP';
    require_once 'statics/base.php';

    echo $base_content;
    require_once 'statics/footer.php';
} catch (Exception $e) {
    if ($_CONFIG['DEBUG']) {
        echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        print $e->getMessage();
    } else {
        //404
        echo "404";
    }
}