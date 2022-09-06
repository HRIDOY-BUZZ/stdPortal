<?php
    $type = "";
    $msg = "";

    $sql    =   "SELECT * FROM `Schedule`";
    $query  =   mysqli_query($conn, $sql);
    $sdl    =   mysqli_fetch_all($query, MYSQLI_ASSOC);

    $schedules = array();

    foreach($sdl as $s)
    {
        $sql    =   "SELECT * FROM `Courses` WHERE `id` = ".$s['course_id']." LIMIT 1";
        $query  =   mysqli_query($conn, $sql);
        $arr    =   mysqli_fetch_array($query, MYSQLI_ASSOC);
        $course =   $arr['course_name'];

        $sql    =   "SELECT * FROM `Teachers` WHERE `tchr_id` = ".$s['tchr_id']." LIMIT 1";
        $query  =   mysqli_query($conn, $sql);
        $arr    =   mysqli_fetch_array($query, MYSQLI_ASSOC);
        $teacher=   $arr['name'];

        $array = array('id' => $s['id'], 'course' => $course, 'teacher' => $teacher, 'date' => $s['date'], 'time' => $s['time'], 'duration' => $s['duration']);
        $schedules[] = $array;
    }

    if(isset($_POST['delete']))
    {
        $id     =   $_POST['delete'];
        $sql    =   "DELETE FROM `Schedule` WHERE `id` = $id";
        if(mysqli_query($conn, $sql))
        {
            $type = "success";
            $msg = "Scheduled Class Deleted Succefully!";
        }
        else
        {
            $type = "error";
            $msg = "Deletion Failed! Please Try again...";
        }
    }

?>