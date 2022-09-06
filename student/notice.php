<!DOCTYPE html>
<html lang="en">
<?php 
    include "student_head.php";
    $sql    =   "SELECT * FROM `Notice` WHERE 1";
    $query  =   mysqli_query($conn, $sql);
    $ntc    =   mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Recent Notice</h1>
            <?php
            if(!empty($ntc))
            {
                foreach($ntc as $n)
                {
            ?>
            <div class="my-4">
                <div class="common-card">
                    <h3><?php echo $n['title']; ?></h3>
                    <div class="d-flex flex-column flex-md-row">
                        <p class="pe-3">
                            <i class="fa-solid fa-calendar-days"></i> 
                            <?php echo date("d-M-Y", strtotime($n['created_at'])); ?>
                        </p>
                        <a style="text-decoration: none;" class="common-color" href="../files/notice/<?php echo $n['notice']; ?>" target="_blanck">
                            Download 
                            <i class="fa-solid fa-file-pdf ps-1"></i>
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