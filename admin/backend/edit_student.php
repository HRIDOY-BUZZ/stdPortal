<?php
    $type   =   "";
    $msg    =   "";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql    =   "SELECT * FROM `Students` WHERE `std_id` = $id LIMIT 1";
        // echo $sql;
        $query  =   mysqli_query($conn, $sql);
        $std   =   mysqli_fetch_array($query);
        // dd($std);

        if(isset($_POST['submit']))
        {
            // dd($_POST);
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $fname      = $_POST['fname'];
            $mname      = $_POST['mname'];
            $nid        = $_POST['nid'];
            $bid        = $_POST['bid'];
            $std_id    = $_GET['id'];
            $gender     = $_POST['gender'];
            $blood      = $_POST['blood'];
            $religion   = $_POST['religion'];
            $pre_address= $_POST['pre_address'];
            $par_address= $_POST['par_address'];
            $interest   = $_POST['interest'];

            if(!isset($_FILES['std_pic']))
            {
                $sql = "UPDATE `Students` SET `name`='$name',`father`='$fname',`mother`='$mname',`nid`=$nid,`birthreg`=$bid,`gender`='$gender',`blood`='$blood',`religion`='$religion',`present_addr`='$pre_address',`parma_addr`='$par_address',`phone`='$phone',`email`='$email',`interests`='$interest' WHERE `std_id` = $std_id";
            }
            else
            {
                $pic_file   = $_FILES['std_pic'];
                $pic_title  = $nid;
                $dest       = $_SERVER["DOCUMENT_ROOT"]."/images/student/";
                $pic_val= save_image($pic_title, $dest, $pic_file);
                $image = $pic_val[1];
                $sql = "UPDATE `Students` SET `name`='$name',`father`='$fname',`mother`='$mname',`image`='$image',`nid`=$nid,`birthreg`=$bid,`gender`='$gender',`blood`='$blood',`religion`='$religion',`present_addr`='$pre_address',`parma_addr`='$par_address',`phone`='$phone',`email`='$email',`interests`='$interest' WHERE `std_id` = $std_id";
            }

            if(!mysqli_query($conn, $sql))
            {
                $type = "error";
                $msg = "Database Error! Try Again...";
            }
            else
            {
                $type = "success";
                $msg = "Student Updated Successfully!";
            }
            
        }
    }
?>