<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/add_notice.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Upload Notice</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
                <form class="d-flex flex-column align-items-center justify-content-center" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 w-75">
                        <input type="text" class="form-control w-100" name="title" id="title" placeholder=" " required>
                        <label for="title">Notice Title</label>
                    </div>
                    <div class="file-upload text-center mx-auto">
                        <input class="p-4" type="file" id="n-file" name="n_file" accept="application/pdf" required>
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>