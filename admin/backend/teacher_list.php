<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Teachers` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $tchrs  =   mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $sql    =   "DELETE FROM `Teachers` WHERE id = $id";
        if(mysqli_query($conn, $sql))
        {
            $type = "success";
            $msg = "Teacher Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>