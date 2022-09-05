<?php
    $sql    =   "SELECT * FROM `Students` WHERE 1";
    $query1 =   mysqli_query($conn, $sql);

    $sql    =   "SELECT * FROM `Courses` WHERE 1";
    $query2 =   mysqli_query($conn, $sql);

    $sql    =   "SELECT * FROM `Teachers` WHERE 1";
    $query3 =   mysqli_query($conn, $sql);

    $std    =   mysqli_num_rows($query1);
    $tchr   =   mysqli_num_rows($query3);
    $crs    =   mysqli_num_rows($query2);
?>