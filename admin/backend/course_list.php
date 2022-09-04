<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Courses` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $crs  =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($crs);
    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $sql    =   "DELETE FROM `Courses` WHERE `id` = $id";
        if(mysqli_query($conn, $sql))
        {
            $type = "success";
            $msg = "Course Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>