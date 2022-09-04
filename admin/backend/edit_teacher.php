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

        if(isset($_POST['submit']))
        {
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $fname      = $_POST['f_name'];
            $mname      = $_POST['m_name'];
            $nid        = $_POST['nid'];
            $bid        = $_POST['bid'];
            $tchr_id    = $_POST['tchr_id'];
            $reg_no     = $_POST['reg_no'];
            $gender     = $_POST['gender'];
            $blood      = $_POST['blood'];
            $religion   = $_POST['religion'];
            $pre_address= $_POST['pre_address'];
            $par_address= $_POST['par_address'];
            $interest   = $_POST['interest'];

            if(!isset($_FILES['teacher_pic']))
            {
                $sql = "UPDATE `Teachers` SET `name`='$name',`father`='$fname',`mother`='$mname',`nid`=$nid,`birthreg`=$bid,`gender`='$gender',`blood`='$blood',`religion`='$religion',`present_addr`='$pre_address',`parma_addr`='$par_address',`phone`='$phone',`email`='$email',`interests`='$interest' WHERE `tchr_id` = $tchr_id";
            }
            else
            {
                $pic_file   = $_FILES['teacher_pic'];
                $pic_title  = $nid;
                $dest       = $_SERVER["DOCUMENT_ROOT"]."/images/teacher/";
                $pic_val= save_image($pic_title, $dest, $pic_file);
                $image = $pic_val[1];
                $sql = "UPDATE `Teachers` SET `name`='$name',`father`='$fname',`mother`='$mname',`image`='$image',`nid`=$nid,`birthreg`=$bid,`gender`='$gender',`blood`='$blood',`religion`='$religion',`present_addr`='$pre_address',`parma_addr`='$par_address',`phone`='$phone',`email`='$email',`interests`='$interest' WHERE `tchr_id` = $tchr_id";
            }

            if(!mysqli_query($conn, $sql))
            {
                $type = "error";
                $msg = "Database Error! Try Again...";
            }
            else
            {
                $type = "success";
                $msg = "Teacher Updated Successfully!";
            }
            
        }
    }
?>