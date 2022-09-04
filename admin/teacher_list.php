<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/teacher_list.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Teacher List</h1>
            <div class="my-4">
                <div class="container alerts">
                    <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                    ?>
                </div>
                <?php
                    if(!empty($tchrs))
                    {
                        foreach($tchrs as $t)
                        {
                ?>
                        <div class="common-card row my-2 justify-content-between align-items-center">
                            <div class="col col-10 row justify-content-evenly align-items-center">
                                <div class="col col-8 col-lg-2">
                                    <img class="w-100" src="../images/teacher/<?php echo $t['image']; ?>" alt="">
                                </div>
                                <div class="col col-8 col-lg-2">
                                    <p><span class="fw-bold pe-1">Name:</span><?php echo $t['name']; ?></p>
                                </div>
                                <div class="col col-8 col-lg-2">
                                    <p><span class="fw-bold pe-1">Teacher Id:</span><?php echo $t['tchr_id']; ?></p>
                                </div>
                            </div>
                            <div class="col col-2 delete-edit-container">
                                <form method="post" style="display: contents;width: fit-content;">
                                    <button type="submit" name="delete" id="delete" class="btn text-danger" value="<?php echo $t['tchr_id']; ?>">
                                        <i class="fas fa-trash-alt px-0 px-lg-2"></i>
                                    </button>
                                </form>
                                <a class="no-text-decoration" href="../admin/edit_teacher.php?id=<?php echo $t['tchr_id']; ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
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