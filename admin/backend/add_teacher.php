<?php
    $error = "";
    $success = 0;
    if($_POST['submit'])
    {
        // dd($_FILES);

        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $f_name     = $_POST['f_name'];
        $m_name     = $_POST['m_name'];
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

        $pic_file   = $_FILES['teacher_pic'];
        $pic_title  = $nid;
        $dest       = "../images/teacher/";
        $pic_val= save_image($pic_title, $dest, $pic_file);

        if($pic_val[0] === 1)
        {
            $error = "Invalid Image!";
        }
        else
        {
            $error = "";
            $teacher_pic = $pic_val[1];
            $sql = "INSERT INTO `Teachers`(`name`, `father`, `mother`, `image`, `nid`, `birthreg`, `tchr_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`) 
                    VALUES ('$name','$f_name','$m_name', '$teacher_pic', '$nid','$bid','$reg_no','$gender','$blood','$religion','$pre_address','$par_address','$phone','$email','$interest')";
            
            if(!mysqli_query($conn, $sql))
            {
                $error = "Database Error! Try Again...";
            }
            else
            {
                $success = 0;
            }
        }
    }
?>