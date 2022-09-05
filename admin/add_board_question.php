<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/add_boardq.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Upload Board Question</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
                <form class="w-75 mx-auto" action="" method="POST" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                        <select class="form-select py-2" id="semester" name="semester" required>
                            <option selected class="text-secondary">- - Select Semester</option>
                            <option value="1">Spring</option>
                            <option value="2">Summer</option>
                            <option value="3">Fall</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="year" id="year" min="2000" max="3000" placeholder=" ">
                        <label for="year">Year</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder=" ">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <p class="fw-bold mb-0 p-2">Upload the question (PDF Only)</p>
                        <input class="p-2 mx-auto" type="file" id="boardq" name="boardq" accept="application/pdf">
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>