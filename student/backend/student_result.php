<?php
    $id     =   $_SESSION['id'];
    $sql    =   "SELECT * FROM `Results` WHERE `std_id` = $id ORDER BY `semester`";
    $query  =   mysqli_query($conn, $sql);
    $rslt   =   mysqli_fetch_all($query, MYSQLI_ASSOC);
    // dd($rslt);
    $total = 0;
    $cgpa = 0;
    foreach($rslt as $r)
    {
        $total += $r['grade'];
    }
    if($total>0)
        $cgpa = $total/count($rslt);
?>