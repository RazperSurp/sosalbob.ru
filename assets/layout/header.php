<?php $optFiles = isset($optFiles) ? $optFiles : []; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $title ?> </title>
        <meta lang="ru-RU">
        <link rel="icon" type="image/x-icon" href="/assets/img/logo.png">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="stylesheet" href="/assets/css/phone-adapted.css">
        <script type="text/javascript" src="/assets/js/main.js"> </script>
        <?php
            foreach ($optFiles as $cat => $files) {
                foreach ($files as $file) {
                    switch ($cat) {
                        case 'css':
                            echo '<link rel="stylesheet" href="/assets/css/'. $file .'">';
                            break;
                        case 'js':
                            echo '<script type="text/javascript" src="/assets/js/'. $file .'"> </script>';
                            break;
                    }

                }
            }
        ?>
    </head>
    <body>
        <header>
            <div class="container">
                <img class="site-logo" src="/assets/img/logo.png">
                <nav>
                    <ul>
                        <li> <a href="register.php"> я еблан </a> </li>
                        <li> <a href="register.php"> я еблан </a> </li>
                        <li> <a href="register.php"> я еблан </a> </li>
                        <li> <a href="register.php"> я еблан </a> </li>
                        <li> <a href="register.php"> я еблан </a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>