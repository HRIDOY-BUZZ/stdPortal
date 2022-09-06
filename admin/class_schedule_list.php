<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/class_schedule_list.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Class Schedule List</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }

                    if(!empty($schedules))
                    {
                        foreach($schedules as $s)
                        {
                ?>
            </div>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3><?php echo $s['course']; ?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3">
                                <span class="fw-bold">Teacher:</span> 
                                <?php echo $s['teacher']; ?>
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
                    <div class="delete-edit-container">
                        <form method="post" style="display: contents;width: fit-content;">
                            <button type="submit" name="delete" id="delete" class="btn text-danger" value="<?php echo $s['id']; ?>">
                                <i class="fas fa-trash-alt px-0 px-lg-2"></i>
                            </button>
                        </form>
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