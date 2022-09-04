<?php
    $type   =   "";
    $msg    =   "";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql    =   "SELECT * FROM `Courses` WHERE `id` = $id LIMIT 1";
        // echo $sql;
        $query  =   mysqli_query($conn, $sql);
        $crs   =   mysqli_fetch_array($query);
        // dd($crs);

        if(isset($_POST['submit']))
        {
            // dd($_POST);
            $name      = $_POST['name'];
            $code      = $_POST['code'];
            $credit    = $_POST['credit'];
            $semester  = $_POST['semester'];
            $year      = $_POST['year'];
            $duration  = $_POST['duration'];

            $sql = "UPDATE `Courses` SET `course_name`='$name',`course_code`='$code',`credits`=$credit,`semester`=$semester,`year`=$year,`duration`=$duration WHERE `id` = $id";

            if(!mysqli_query($conn, $sql))
            {
                $type = "error";
                $msg = "Database Error! Try Again...";
            }
            else
            {
                $type = "success";
                $msg = "Course Updated Successfully!";
            }
            
        }
    }
?>