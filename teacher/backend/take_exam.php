<?php
    $type   = "";
    $msg    = "";
    $teacher=   $_SESSION['id'];
    $sql    =   "SELECT `Schedule`.*, `Courses`.`id`, `Courses`.`course_code`, `Courses`.`course_name` 
                FROM `Schedule` JOIN `Courses` 
                WHERE `Schedule`.`course_id` = `Courses`.`id` 
                AND `tchr_id` = $teacher";
    $query  =   mysqli_query($conn, $sql);
    $classes=   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($classes);
    if($_POST['submit'])
    {
        // dd($_FILES);
        $class      =   $_POST['class'];
        $duration   =   $_POST['duration'];
        $q_file     =   $_FILES['question'];
        $q_title    =   $class."_".time();
        $dest       =   $_SERVER["DOCUMENT_ROOT"]."/files/question/";
        $file_val   =   save_file($q_title, $dest, $q_file);
        // dd($file_val);
        if($file_val[0] === true)
        {
            $type = "error";
            $msg = "File upload failed. Please try again!";
        }
        else
        {
            $file_q = $file_val[1];

            $sql = "INSERT INTO `Tchr_question`(`tchr_id`, `shdl_id`, `duration`, `question`) 
                    VALUES ($teacher, $class, $duration, '$file_q')";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Question Uploaded Successfully!!";
            }
        }
    }
?>