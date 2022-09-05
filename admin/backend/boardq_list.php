<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Board_Q` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $bq  =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($crs);
    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $sql    =   "DELETE FROM `Board_Q` WHERE `id` = $id";
        if(mysqli_query($conn, $sql))
        {
            $type = "success";
            $msg = "Question Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>