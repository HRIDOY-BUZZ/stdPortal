<?php
    $type   = "";
    $msg    = "";
    if($_POST['submit'])
    {
        // dd($_FILES);
        $title    =   $_POST['title'];
        
        $n_file     =   $_FILES['n_file'];
        $n_title    =   $title.time();
        $dest       =   $_SERVER["DOCUMENT_ROOT"]."/files/notice/";
        $file_val   =   save_file($n_title, $dest, $n_file);
        // dd($file_val);

        if($file_val[0] === true)
        {
            $type = "error";
            $msg = "File upload failed. Please try again!";
        }
        else
        {
            $file_q = $file_val[1];

            $sql = "INSERT INTO `Notice`(`title`, `notice`) VALUES ('$title', '$file_q')";
            
            if(!mysqli_query($conn, $sql))
            {
                $type   = "error";
                $msg    = "Database Error! Try Again...";
            }
            else
            {
                $type   = "success";
                $msg    = "Notice Uploaded Successfully!!";
            }
        }
    }
?>