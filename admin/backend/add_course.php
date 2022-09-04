<?php
    $type   = "";
    $msg    = "";
    if($_POST['submit'])
    {
        $name      = $_POST['name'];
        $code      = $_POST['code'];
        $credit    = $_POST['credit'];
        $semester  = $_POST['semester'];
        $year      = $_POST['year'];
        $duration  = $_POST['duration'];
        
        //CHECKING
        $sql    =   "SELECT `id` FROM `Courses` WHERE `course_code` = '$code' AND `semester` = $semester AND `year` = $year";
        $query  =   mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0)
        {
            $type = "error";
            $msg = "This course already exists. Please try a different one!";
        }
        else
        {

            $sql = "INSERT INTO `Courses`(`course_name`, `course_code`, `credits`, `semester`, `year`, `duration`) 
                    VALUES ('$name','$code',$credit,$semester,$year,$duration)";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Course Added Successfully!!";
            }
        }
    }
?>