<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/add_course.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Add Course</h1>
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
                        <input type="text" class="form-control" name="name" id="course_name" placeholder=" " required>
                        <label for="course_name">Course Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="code" id="course_code" placeholder=" " required>
                        <label for="course_code">Course Code</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="credit" id="credit" min="1" max="9" placeholder=" " required>
                        <label for="credit">Credit</label>
                    </div>

                    <div class="form-floating mb-3">
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
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="duration" id="duration" min="1" max="12" placeholder=" " required>
                        <label for="duration">Duration in Months</label>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>