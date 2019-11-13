<?php
    $head = include('./src/component/head.php');
    $header = include('./src/component/header.php');
    $body = include('./src/component/body.php');
    $foother = include('./src/component/foother.php');
    $initJS = include('./src/action/init.php');

    echo '<head>' . 
            $head . 
            '</head>' . 
            $header . 
            '<div class="main">' .
            $body .
            '</div>' . 
            $foother .
            $initJS;
?>


