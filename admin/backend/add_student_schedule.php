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


        $sql    =   "SELECT * FROM `Schedule` WHERE `course_id` = $course";
        $query  =   mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0)
        {
            $shdl   =   mysqli_fetch_array($query);
            $shdl_id=   $shdl['id'];
            $sql = "INSERT INTO `Std_schedule`(`std_id`, `course_id`, `shdl_id`, `semester`) 
                    VALUES ($student, $course, $shdl_id, $semester)";
            
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
        else
        {
            $type   = "error";
            $msg    = "No such Schedule exists. Create schedule first to add student.";
        }
    }
?>