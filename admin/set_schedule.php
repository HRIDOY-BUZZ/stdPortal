<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/set_schedule.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Set Schedule</h1>
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

                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="semester" name="semester" required>
                            <option selected>- - Select Semester</option>
                            <option value="1">Spring</option>
                            <option value="2">Summer</option>
                            <option value="3">Fall</option>
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <div class="col col-12 col-md-6 d-flex justify-content-between align-items-center">
                            <p class="mb-0 fw-bold">Select date:</p>
                            <input type="date" class="form-control w-75 ms-2" name="date" id="date" placeholder=" " required>
                        </div>
                        <div class="col col-12 col-md-6 d-flex justify-content-between align-items-center">
                            <p class="mb-0 fw-bold">Select time:</p>
                            <input type="time" class="form-control w-75 ms-2" name="time" id="time" placeholder=" " required>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="teacher" name="teacher" required>
                            <option selected>- - Select Teacher</option>
                            <?php
                                if(!empty($tchr))
                                {
                                    foreach($tchr as $t)
                                    {
                                        echo '<option value="'.$t['tchr_id'].'">'.$t['tchr_id'].'. '.$t['name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="duration" id="duration" min="1" max="8" placeholder=" " required>
                        <label for="duration">Duration in hours</label>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>