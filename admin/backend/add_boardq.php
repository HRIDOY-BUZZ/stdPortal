<?php
    $type   = "";
    $msg    = "";
    if($_POST['submit'])
    {
        // dd($_POST);
        $semester   =   $_POST['semester'];
        $year       =   $_POST['year'];
        $subject    =   $_POST['subject'];
        
        $q_file     =   $_FILES['boardq'];
        $q_title    =   $subject."_".$semester."_".$year;
        $dest       =   $_SERVER["DOCUMENT_ROOT"]."/files/boardq/";
        $file_val   =   save_file($q_title, $dest, $q_file);
        // dd($file_val);
        //CHECKING
        $sql        =   "SELECT * FROM `Board_Q` WHERE `course` = '$subject' AND `semester` = $semester AND `year` = $year";
        $query      =   mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0)
        {
            $type = "error";
            $msg = "This question already exists. Please try a different one!";
        }
        else if($file_val[0] === true)
        {
            $type = "error";
            $msg = "File upload failed. Please try again!";
        }
        else
        {
            $file_q = $file_val[1];

            $sql = "INSERT INTO `Board_Q`(`semester`, `year`, `course`, `question`) 
                    VALUES ($semester, $year, '$subject', '$file_q')";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Question Uploaded Successfully!!";
            }
        }
    }
?>