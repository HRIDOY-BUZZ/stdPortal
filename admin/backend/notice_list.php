<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Notice` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $ntc    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($crs);
    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $sql    =   "DELETE FROM `Notice` WHERE `id` = $id";
        if(mysqli_query($conn, $sql))
        {
            $type = "success";
            $msg = "Notice Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>