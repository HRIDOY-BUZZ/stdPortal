<?php
    $host   =   'localhost';
    $db     =   'std_portal';
    $user   =   'root';
    $pass   =   '@Buzz6157';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn)
    {
        echo "There was a Database error!<br>";
        die(mysqli_error($conn));
    }
?>