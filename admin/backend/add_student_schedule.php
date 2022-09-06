<?php
    $type   = "";
    $msg    = "";

    $sql    =   "SELECT * FROM `Courses` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $crs    =   mysqli_fetch_all($query, MYSQLI_ASSOC);

    $sql    =   "SELECT * FROM `Students` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $std    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    if($_POST['submit'])
    {
        // dd($_POST);
        $course     = $_POST['course'];
        $semester   = $_POST['semester'];
        $student    = $_POST['student'];

            $sql = "INSERT INTO `Std_schedule`(`std_id`, `course_id`, `semester`) 
                    VALUES ($student, $course, $semester)";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Student Added Successfully!!";
            }
    }
?>