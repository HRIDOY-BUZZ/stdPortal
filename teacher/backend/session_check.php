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
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM `Teachers` WHERE `tchr_id` = $id LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $tchr = mysqli_fetch_array($query, MYSQLI_ASSOC);
        echo 'TEACHER';
    }
?>