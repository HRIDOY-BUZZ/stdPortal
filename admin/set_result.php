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
            <h1 class="common-background-2 p-2 text-center">Set Result</h1>

                <form class="w-75 mx-auto" action="" method="">
                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="semester" name="semester" required>
                            <option selected>Semester</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="course" name="course" required>
                            <option selected>course</option>
                            <option value="1">CSE-105</option>
                            <option value="2">Gen-202</option>
                            <option value="3">Cse-200</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="credit" id="credit" placeholder=" " required>
                        <label for="credit">Credit</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="year" id="year" placeholder=" " required>
                        <label for="year">Year</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="student_name" id="student_name" placeholder=" ">
                        <label for="student_name">Student Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="student_id" id="student_id" placeholder=" " required>
                        <label for="student_id">Student Id</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="o_cgpa" id="o_cgpa" placeholder=" " required>
                        <label for="o_cgpa">Obtained CGPA</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="h_cgpa" id="h_cgpa" placeholder=" " required>
                        <label for="h_cgpa">Highest CGPA</label>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>