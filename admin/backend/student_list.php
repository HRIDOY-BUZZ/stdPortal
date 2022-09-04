<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Students` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $stdns  =   mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $sql    =   "DELETE FROM `Students` WHERE `std_id` = $id";
        $sql2   =   "DELETE FROM `Users` WHERE `id` = $id";
        if(mysqli_query($conn, $sql))
        {
            mysqli_query($conn, $sql2);
            $type = "success";
            $msg = "Student Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>