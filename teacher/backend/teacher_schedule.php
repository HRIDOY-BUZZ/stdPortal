<?php
    $id = $_SESSION['id'];
    $sql    =   "SELECT `Schedule`.*, `Courses`.* 
                FROM `Schedule` JOIN `Courses` 
                WHERE `Schedule`.`course_id` = `Courses`.`id`
                AND `Schedule`.`tchr_id` = $id";
    $query  =   mysqli_query($conn, $sql);
    $shdl    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    dd($shdl);
?>