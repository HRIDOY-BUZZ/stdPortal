<?php
    $sql    =   "SELECT * FROM `Students` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $std    =   mysqli_num_rows($query);

    $sql    =   "SELECT * FROM `Courses` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $crs    =   mysqli_num_rows($query);

    $sql    =   "SELECT * FROM `Teachers` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $tchr   =   mysqli_num_rows($query);
?>