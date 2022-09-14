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
        // $course     = $_POST['course'];
        $semester   = $_POST['semester'];
        // $year       = $_POST['year'];
        $student    = $_POST['student'];
        $ocg        = $_POST['o_cgpa'];
        $hcg        = $_POST['h_cgpa'];
        

            $sql = "INSERT INTO `Results`(`semester`, `std_id`, `grade`, `highest`) 
                    VALUES ($semester, $student, $ocg, $hcg)";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Result Added Successfully!!";
            }
    }
?>