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
            <h1 class="common-background-2 p-2 text-center">Course List</h1>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Course Name</h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3"><span class="fw-bold">Year:</span> 2022</p>
                            <p class="pe-3"><span class="fw-bold">Semester:</span> 1st</p> <br>
                            <p class="pe-3"><span class="fw-bold">Credit:</span> 4</p>
                            <p class="pe-3"><span class="fw-bold">Duration:</span> 4 Month</p>
                        </div>
                    </div>
                    <div class="delete-edit-container">
                        <a class="no-text-decoration" href=""><i class="fas fa-trash-alt px-0 px-lg-2"></i></a>
                        <a class="no-text-decoration" href="../admin/edit_course.php"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Course Name -2</h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3"><span class="fw-bold">Year:</span> 2023</p>
                            <p class="pe-3"><span class="fw-bold">Semester:</span> 3rd</p> <br>
                            <p class="pe-3"><span class="fw-bold">Credit:</span> 3</p>
                            <p class="pe-3"><span class="fw-bold">Duration:</span> 4 Month</p>
                        </div>
                    </div>
                    <div class="delete-edit-container">
                        <a class="no-text-decoration" href=""><i class="fas fa-trash-alt px-0 px-lg-2"></i></a>
                        <a class="no-text-decoration" href="../admin/edit_course.php"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>




        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>