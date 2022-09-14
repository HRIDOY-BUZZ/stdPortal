<!DOCTYPE html>
<html lang="en">
<?php
    include "student_head.php";
    include "../backend/functions.php";
    include "backend/student_schedule.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Class Schedule List</h1>
            <div class="container alerts">
            </div>
            <?php
                if(!empty($shdl))
                {
                    foreach($shdl as $s)
                    {
            ?>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3><?php echo $s['course_code'].': '.$s['course_name']; ?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3">
                                <span class="fw-bold">Teacher:</span> 
                                <?php echo $s['name']; ?>
                            </p>
                            <br>
                            <p class="pe-3">
                                <span class="fw-bold">Date:</span> 
                                <?php echo $s['date']; ?>
                            </p>
                            <p class="pe-3">
                                <span class="fw-bold">Time:</span> 
                                <?php echo $s['time']; ?>
                            </p>
                            <p class="pe-3">
                                <span class="fw-bold">Duration:</span> 
                                <?php echo $s['duration']; ?> hrs
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        }
                    }
            ?>
        </div>
    </section>

    <?php include '../script.php';?>
</body>
</html>