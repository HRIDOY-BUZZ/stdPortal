<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/notice_list.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Recent Notice</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
            <?php
            if(!empty($ntc))
            {
                foreach($ntc as $n)
                {
            ?>
            <div class="my-4">
                <div class="common-card d-flex justify-content-between align-items-center">
                    <div>
                        <h3><?php echo $n['title']; ?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            <p class="pe-3">
                                <i class="fa-solid fa-calendar-days"></i> 
                                <?php echo date("d-M-Y", strtotime($n['created_at'])); ?>
                            </p>
                            <a style="text-decoration: none;" class="common-color" href="../files/notice/<?php echo $n['notice']; ?>" target="_blanck">Download <i class="fa-solid fa-file-pdf ps-1"></i></a>
                        </div>
                    </div>
                    <div class="delete-edit-container">
                        <form method="post" style="display: contents;width: fit-content;">
                            <button type="submit" name="delete" id="delete" class="btn text-danger" value="<?php echo $n['id']; ?>">
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