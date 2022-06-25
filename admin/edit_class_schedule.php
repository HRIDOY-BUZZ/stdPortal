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
            <h1 class="common-background-2 p-2 text-center">Edit Schedule</h1>

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
                        <select class="form-select py-2" id="course" name="course" required>
                            <option selected>Teacher</option>
                            <option value="1">Jamal islam</option>
                            <option value="2">Rahim Khan</option>
                            <option value="3">Abdul Bari</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <p class="fw-bold">Duration</p>
                        <input type="text" class="form-control" name="duration" id="duration" placeholder=" " required>
                    </div>

                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="Update">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>