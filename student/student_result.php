<!DOCTYPE html>
<html lang="en">
<?php
    include "student_head.php";
    include "../backend/functions.php";
    include "backend/student_result.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Result</h1>
            <div class="my-3 row align-items-center justify-content-center">
                <div class="col col-12 col-md-3 profile-image text-center">
                    <img class="" src="../images/student/<?php echo $std['image']; ?>" alt="">
                </div>
                <div class="col col-12 col-md-8 py-3">
                    <p><span class="fw-bold">Name:</span> <?php echo $std['name']; ?></p>
                    <p><span class="fw-bold">Student Id:</span> <?php echo $std['std_id']; ?></p>
                    <p><span class="fw-bold">Average CGPA:</span> <?php echo number_format((float)$cgpa, 2, '.', ''); ?></p>
                </div>
            </div>

            <div class="my-2 row justify-content-evenly align-items-center px-2 g-4">
                <?php
                    foreach($rslt as $r){
                ?>
                <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
                    <ul>
                        <li class="fw-bold">
                            <?php
                                if($r['semester'] == 1) echo "1st";
                                else if($r['semester'] == 2) echo "2nd";
                                else if($r['semester'] == 3) echo "3rd";
                                else echo $r['semester']."th";
                            ?> 
                            Semester
                        </li>
                        <li class=""><span class="fw-bold">Obtained: </span><?php echo $r['grade']; ?> <span class="fw-bold ps-3">Highest: </span><?php echo $r['highest']; ?></li>
                    </ul>
                </a>
                <?php
                    }
                ?>
                <!-- <a class="d-block common-card col col-12 col-lg-5" style="text-decoration: none; color:black;" href="result_details.php">
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
                </a> -->

            <div>

        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>