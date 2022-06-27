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
            <h1 class="common-background-2 p-2 text-center">Exams</h1>
            <div class="py-4 mt-4 text-center">
                <h3>CSE 101 Mid Exam</h3>
                <iframe class="border border-3 border-dark exam-view" style="border: none;" 
                src="<?php echo $_SERVER['REMOTE_HOST'].'/images/dummy.pdf'; ?>#toolbar=0"></iframe>
            </div>
            <form class="text-center" action="" method="">
                <div class="file-upload text-start mx-auto">
                    <input class="p-4" type="file" id="exam-file" name="exam_file">
                </div>
                <input name="submit" class="mt-3 fw-bold custom-btn-1" type="submit" value="submit">
            </form>
        </div>
    </section>

    <?php include '../script.php';?>
</body>
</html>