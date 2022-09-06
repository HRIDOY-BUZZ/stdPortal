<?php
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM `Teachers` WHERE `tchr_id` = $id LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $tchr = mysqli_fetch_array($query, MYSQLI_ASSOC);

    // dd($tchr);
?>