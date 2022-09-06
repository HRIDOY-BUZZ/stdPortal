<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/dbconnect.php');
    include($_SERVER['DOCUMENT_ROOT'].'/backend/dd.php');
    session_start();
    if($_SESSION['user'] != 'student')
    {
        header('Location: /');
    }
    else
    {
        $id     =   $_SESSION['id'];
        $sql    =   "SELECT * FROM `Students` WHERE `std_id` = $id LIMIT 1";
        $query  =   mysqli_query($conn, $sql);
        $std    =   mysqli_fetch_array($query, MYSQLI_ASSOC);
        echo 'STUDENT';
    }
?>