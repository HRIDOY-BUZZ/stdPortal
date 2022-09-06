<?php
    $type   = "";
    $msg    = "";

    $sql    =   "SELECT * FROM `Courses` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $crs    =   mysqli_fetch_all($query, MYSQLI_ASSOC);

    $sql    =   "SELECT * FROM `Teachers` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $tchr    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    if($_POST['submit'])
    {
        // dd($_POST);
        $course     = $_POST['course'];
        $semester   = $_POST['semester'];
        $teacher    = $_POST['teacher'];
        $date       = $_POST['date'];
        $time       = $_POST['time'];
        $duration   = $_POST['duration'];
        

            $sql = "INSERT INTO `Schedule`(`course_id`, `tchr_id`, `date`, `time`, `duration`) 
                    VALUES ($course, $teacher,'$date','$time',$duration)";
            // dd($sql);
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Schedule Added Successfully!!";
            }
    }
?>