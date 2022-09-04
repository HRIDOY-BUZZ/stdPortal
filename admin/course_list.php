<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/course_list.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Course List</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
            <?php
            if(!empty($crs))
            {
                foreach($crs as $c)
                {
            ?>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3><?php echo $c['course_name']?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3">
                                <span class="fw-bold">Year:</span> 
                                <?php echo $c['year']?>
                            </p>
                            <p class="pe-3">
                                <span class="fw-bold">Semester:</span> 
                                <?php
                                    if($c['semester'] == 1)
                                        echo "Spring";
                                    else if($c['semester'] == 2)
                                        echo "Summer";
                                    else
                                        echo "Fall";
                                ?>
                            </p>
                            <br>
                            <p class="pe-3">
                                <span class="fw-bold">Credit:</span> 
                                <?php echo $c['credits']?>
                            </p>
                            <p class="pe-3">
                                <span class="fw-bold">Duration:</span> 
                                <?php echo $c['duration']?> Months
                            </p>
                        </div>
                    </div>
                    <div class="delete-edit-container">
                        <form method="post" style="display: contents;width: fit-content;">
                            <button type="submit" name="delete" id="delete" class="btn text-danger" value="<?php echo $c['id']; ?>">
                                <i class="fas fa-trash-alt px-0 px-lg-2"></i>
                            </button>
                        </form>
                        <a class="no-text-decoration" href="../admin/edit_course.php?id=<?php echo $c['id']; ?>">
                            <i class="fas fa-edit"></i>
                        </a>
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