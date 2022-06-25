<!DOCTYPE html>
<html lang="en">
    <?php include "student_head.php";?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Result</h1>
            <div class="my-3 row align-items-center justify-content-center">
                <div class="col col-12 col-md-3 profile-image text-center">
                    <img class="" src="../images/profile.jpg" alt="">
                </div>
                <div class="col col-12 col-md-8 py-3">
                    <p><span class="fw-bold">Name:</span> Rakib Hasan</p>
                    <p><span class="fw-bold">Student Id:</span> 20156489</p>
                    <p><span class="fw-bold">Average CGPA:</span> 3.12</p>
                </div>
            </div>

            <div class="my-2 row justify-content-evenly align-items-center px-2 g-4">
                <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
                    <ul>
                        <li class="fw-bold">1st Semester</li>
                        <li class=""><span class="fw-bold">Obtained:</span>3.12 <span class="fw-bold ps-3">Highest:</span>3.86</li>
                    </ul>
                </a>

                <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
                    <ul>
                        <li class="fw-bold">2nd Semester</li>
                        <li class=""><span class="fw-bold">Obtained:</span>3.20 <span class="fw-bold ps-3">Highest:</span>3.68</li>
                    </ul>
                </a>

                <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
                    <ul>
                        <li class="fw-bold">3rd Semester</li>
                        <li class=""><span class="fw-bold">Obtained:</span>2.86 <span class="fw-bold ps-3">Highest:</span>3.66</li>
                    </ul>
                </a>

                <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
                    <ul>
                        <li class="fw-bold">4th Semester</li>
                        <li class=""><span class="fw-bold">Obtained:</span>3.33 <span class="fw-bold ps-3">Highest:</span>3.32</li>
                    </ul>
                </a>

            <div>

        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>