<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/edit_course.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Edit Course</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
                <form class="w-75 mx-auto" action="" method="post">
                    <div class="mb-3">
                        <p class="fw-bold">Course Name</p>
                        <input type="text" class="form-control" name="name" id="course_name" value="<?php echo $crs['course_name']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Course Code</p>
                        <input type="text" class="form-control" name="code" id="course_code" value="<?php echo $crs['course_code']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Credit</p>
                        <input type="number" class="form-control" name="credit" id="credit" min="1" max="9" value="<?php echo $crs['credits']; ?>" required>
                    </div>

                    <div class="form-floating mb-3">
                        <p class="fw-bold">Semester</p>
                        <select class="form-select py-2" id="semester" name="semester" required>
                        <option selected>- - Select Semester</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Year</p>
                        <input type="number" class="form-control" name="year" id="year" min="2000" max="3000" value="<?php echo $crs['year']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Duration</p>
                        <input type="number" class="form-control" name="duration" id="duration" min="1" max="12" value="<?php echo $crs['duration']; ?>" required>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="update">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>