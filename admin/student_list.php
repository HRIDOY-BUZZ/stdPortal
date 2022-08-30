<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Student List</h1>
            <div class="my-4">
                <div class="common-card row my-2 justify-content-between align-items-center">
                    <div class="col col-10 row justify-content-evenly align-items-center">
                        <div class="col col-8 col-lg-2">
                            <img class="w-100" src="../images/profile.jpg" alt="">
                        </div>
                        <div class="col col-8 col-lg-2">
                            <p><span class="fw-bold pe-1">Name:</span>Jalil hossain</p>
                        </div>
                        <div class="col col-8 col-lg-2">
                            <p><span class="fw-bold pe-1">Student Id:</span>5649684616</p>
                        </div>
                    </div>
                    <div class="col col-2 delete-edit-container">
                        <a class="no-text-decoration" href=""><i class="fas fa-trash-alt px-0 px-lg-2"></i></a>
                        <a class="no-text-decoration" href="../admin/edit_student.php"><i class="fas fa-edit"></i></a>
                    </div>
                </div>

                <div class="common-card row my-2 justify-content-between align-items-center">
                    <div class="col col-10 row justify-content-evenly align-items-center">
                        <div class="col col-8 col-lg-2">
                            <img class="w-100" src="../images/profile.jpg" alt="">
                        </div>
                        <div class="col col-8 col-lg-2">
                            <p><span class="fw-bold pe-1">Name:</span>kamal hossain</p>
                        </div>
                        <div class="col col-8 col-lg-2">
                            <p><span class="fw-bold pe-1">Student Id:</span>8953849</p>
                        </div>
                    </div>
                    <div class="col col-2 delete-edit-container">
                        <a class="no-text-decoration" href=""><i class="fas fa-trash-alt px-0 px-lg-2"></i></a>
                        <a class="no-text-decoration" href="../admin/edit_student.php"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>