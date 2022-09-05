<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/set_result.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Set Result</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
                <form class="w-75 mx-auto" action="" method="post">
                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="course" name="course" required>
                            <option selected>- - Select Course</option>
                            <?php
                                if(!empty($crs))
                                {
                                    foreach($crs as $c)
                                    {
                                        echo '<option value="'.$c['id'].'">'.$c['course_name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <!-- <div class="form-floating mb-3">
                        <select class="form-select py-2" id="semester" name="semester" required>
                            <option selected>- - Select Semester</option>
                            <option value="1">Spring</option>
                            <option value="2">Summer</option>
                            <option value="3">Fall</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="year" id="year" min="2000" max="3000" placeholder=" " required>
                        <label for="year">Year</label>
                    </div> -->

                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="student" name="student" required>
                            <option selected>- - Select Student</option>
                            <?php
                                if(!empty($std))
                                {
                                    foreach($std as $s)
                                    {
                                        echo '<option value="'.$s['std_id'].'">'.$s['std_id'].'. '.$s['name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" class="form-control" name="o_cgpa" id="o_cgpa" placeholder=" " required>
                        <label for="o_cgpa">Obtained CGPA</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" class="form-control" name="h_cgpa" id="h_cgpa" placeholder=" " required>
                        <label for="h_cgpa">Highest CGPA</label>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>