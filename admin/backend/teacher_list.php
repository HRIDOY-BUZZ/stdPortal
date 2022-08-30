<?php
    $error = "";

    $sql    =   "SELECT * FROM `Teachers` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $tchrs  =   mysqli_fetch_all($query, MYSQLI_ASSOC);

?>