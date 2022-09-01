<?php
    $type   =   "";
    $msg    =   "";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql    =   "SELECT * FROM `Teachers` WHERE `tchr_id` = $id LIMIT 1";
        // echo $sql;
        $query  =   mysqli_query($conn, $sql);
        $tchr   =   mysqli_fetch_array($query);

        // dd($tchr);
    }
?>