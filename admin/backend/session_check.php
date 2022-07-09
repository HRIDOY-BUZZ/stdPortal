<?php
    include_once('/dbconnect.php');
    session_start();
    if($_SESSION['user'] != 'admin')
        header('Location: /');
    else
    {
        echo 'ADMIN';
    }
?>