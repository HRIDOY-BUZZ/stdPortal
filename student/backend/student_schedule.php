<?php
    $id = $_SESSION['id'];
    $sql    =   "SELECT `Std_schedule`.*, `Courses`.*, `Schedule`.*, `Teachers`.`id`,  `Teachers`.`name`,  `Teachers`.`tchr_id`  
                FROM `Std_schedule` JOIN `Courses` JOIN `Schedule` JOIN `Teachers` 
                WHERE `Std_schedule`.`course_id` = `Courses`.`id`
                AND `Std_schedule`.`shdl_id` = `Schedule`.`id`
                AND `Schedule`.`tchr_id` = `Teachers`.`tchr_id`
                AND `Std_schedule`.`std_id` = $id";
    $query  =   mysqli_query($conn, $sql);
    $shdl    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($shdl);
?>