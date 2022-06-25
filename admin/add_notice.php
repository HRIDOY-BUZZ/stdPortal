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
            <h1 class="common-background-2 p-2 text-center">Upload Notice</h1>

                <form class="d-flex flex-column align-items-center justify-content-center" action="" method="">
                    <div class="file-upload text-center mx-auto">
                        <input class="p-4" type="file" id="exam-file" name="exam_file">
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>