<!DOCTYPE html>
<html lang="en">
    <?php include "admin_head.php";?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Edit Course</h1>

                <form class="w-75 mx-auto" action="" method="">
                    <div class="form-floating mb-3">
                        <p class="fw-bold">Semester</p>
                        <select class="form-select py-2" id="semester" name="semester" required>
                            <option selected>Semester</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Course Name</p>
                        <input type="text" class="form-control" name="course_name" id="course_name" placeholder=" " required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Course Code</p>
                        <input type="text" class="form-control" name="course_code" id="course_code" placeholder=" " required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Credit</p>
                        <input type="text" class="form-control" name="credit" id="credit" placeholder=" " required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Year</p>
                        <input type="text" class="form-control" name="year" id="year" placeholder=" " required>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Duration</p>
                        <input type="text" class="form-control" name="duration" id="duration" placeholder=" " required>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="update">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>