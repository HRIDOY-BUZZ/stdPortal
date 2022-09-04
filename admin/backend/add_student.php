<?php
    $error = "";
    $success = 0;
    if($_POST['submit'])
    {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $fname     = $_POST['fname'];
        $mname     = $_POST['mname'];
        $nid        = $_POST['nid'];
        $bid        = $_POST['bid'];
        $reg_no     = $_POST['reg_no'];
        $gender     = $_POST['gender'];
        $blood      = $_POST['blood'];
        $religion   = $_POST['religion'];
        $pre_address= $_POST['pre_address'];
        $par_address= $_POST['par_address'];
        $interest   = $_POST['interest'];
        $documents  = $_POST['documents'];

        $pic_file   = $_FILES['std_pic'];
        $pic_title  = $nid;
        $dest       = $_SERVER["DOCUMENT_ROOT"]."/images/student/";
        $pic_val= save_image($pic_title, $dest, $pic_file);
        
        //CHECKING
        $sql    =   "SELECT `id`, `email` FROM `Users` WHERE `email` LIKE '$email'";
        $query  =   mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0)
        {
            $error = "User with this Email already exists. Please try a different one!";
        }
        else if($pic_val[0] === true)
        {
            $error = "Invalid Image! Try Again...";
        }
        else
        {
            $error = "";
            $std_pic = $pic_val[1];

            $sql = "INSERT INTO `Users`(`user_type`, `name`, `email`, `password`) 
                    VALUES ('student','$name','$email','12345678')";
            
            if(!mysqli_query($conn, $sql))
            {
                $error = "Database Error! Try Again...";
            }
            else
            {
                $sql = "INSERT INTO `Students`(`name`, `image`, `father`, `mother`, `nid`, `birthreg`, `std_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`) 
                    VALUES ('$name','$std_pic','$fname','$mname', '$nid','$bid',(SELECT `id` FROM `Users` WHERE `email` LIKE '$email'),'$gender','$blood','$religion','$pre_address','$par_address','$phone','$email','$interest')";
            
                if(!mysqli_query($conn, $sql))
                {
                    $error = "Database Error! Try Again...";
                }
                else
                {
                    $success = 1;
                }
            }
        }
    }
?>