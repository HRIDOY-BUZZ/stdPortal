<?php
    $type   = "";
    $msg    = "";
    $id     =   $_SESSION['id'];
    $sql    =   "SELECT `Tchr_question`.*, `Std_schedule`.*, `Courses`.* 
                FROM `Tchr_question` JOIN `Std_schedule` JOIN `Courses` 
                WHERE `Tchr_question`.`shdl_id` = `Std_schedule`.`shdl_id` 
                AND `Std_schedule`.`std_id` = $id 
                AND `Std_schedule`.`course_id` = `Courses`.`id` LIMIT 1";
    $query  =   mysqli_query($conn, $sql);
    $qstn   =   mysqli_fetch_array($query, MYSQLI_ASSOC);
    // dd($qstn);

    if(isset($_POST['submit']))
    {
        $type   =   'success';
        $msg    =   'Answers have been submitted at: '.date('h:i:s A, d-m-Y').' GMT';
    }

?>