<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/dbconnect.php');
    include($_SERVER['DOCUMENT_ROOT'].'/backend/dd.php');
    session_start();
    if($_SESSION['user'] != 'teacher')
    {
        header('Location: /');
    }
    else
    {
        echo 'TEACHER';
    }
?>