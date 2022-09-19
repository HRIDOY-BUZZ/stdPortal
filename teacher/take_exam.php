<!DOCTYPE html>
<html lang="en">
<?php
    include "teacher_head.php";
    include "../backend/functions.php";
    include "backend/take_exam.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "teacher_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Take Exams</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
            <form class="text-center" action="" method="post" enctype="multipart/form-data">

            <div class="my-4 row g-3 w-50 mx-auto">
                    <div class="col col-6">
                        <select class="form-select" name="class" id="class" aria-label="Default select example" required>
                            <option selected>- - Select Class</option>
                            <?php
                                foreach($classes as $c)
                                {
                                    echo '<option value="'.$c['id'].'">'.$c['course_name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col col-6">
                        <select class="form-select" name="duration" id="duration" aria-label="Default select example" required>
                            <option selected>Time</option>
                            <option value="1">30 min</option>
                            <option value="2">1 h</option>
                            <option value="3">1.5 h</option>
                            <option value="4">2 h</option>
                            <option value="5">2.5 h</option>
                            <option value="6">3 h</option>
                        </select>
                    </div>
                </div>
                <h3>Upload the Question</h3>
                <div class="file-upload text-start mx-auto">
                    <input class="p-4" type="file" id="question" name="question">
                </div>
                <input name="submit" class="mt-3 fw-bold custom-btn-1" type="submit" value="submit">
            </form>
        </div>
    </section>

    <?php include '../script.php';?>
</body>
</html>