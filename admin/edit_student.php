<!DOCTYPE html>
<html lang="en">
<?php 
    include "admin_head.php";
    include "../backend/functions.php";
    include "backend/edit_student.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Edit Student</h1>
            <div class="container alerts">
                <?php
                    if($msg != "")
                    {
                        echo message($type, $msg);
                    }
                ?>
            </div>
                <form class="w-75 mx-auto" action=""  method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="fw-bold">Name</p>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $std['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Email</p>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $std['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Phone Number</p>
                        <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $std['phone']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Father's Name</p>
                        <input type="text" class="form-control" name="fname" id="f_name" value="<?php echo $std['father']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Mother's Name</p>
                        <input type="text" class="form-control" name="mname" id="m_name" value="<?php echo $std['mother']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">NID No</p>
                        <input type="text" class="form-control" name="nid" id="n_id" value="<?php echo $std['nid']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Birth ID</p>
                        <input type="text" class="form-control" name="bid" id="b_id" value="<?php echo $std['birthreg']; ?>">
                    </div>

                    <div class="mb-3">
                    <p class="fw-bold">Gender</p>
                    <select class="form-select py-2" id="gender" name="gender" >
                        <?php 
                            if($std['gender'] == 1)
                            {
                        ?>
                            <option>Gender</option>
                            <option value="1" selected>Male</option>
                            <option value="2">Female</option>
                        <?php
                            }
                            else
                            {
                        ?>
                            <option>Gender</option>
                            <option value="1">Male</option>
                            <option value="2" selected>Female</option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                    <div class="mb-3">
                        <p class="fw-bold">Blood Group</p>
                        <input type="text" class="form-control" name="blood" id="blood" value="<?php echo $std['blood']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Religion</p>
                        <input type="text" class="form-control" name="religion" id="religion" value="<?php echo $std['religion']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Present Address</p>
                        <input type="text" class="form-control" name="pre_address" id="pre_address" value="<?php echo $std['present_addr']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Parmanent Address</p>
                        <input type="text" class="form-control" name="par_address" id="par_address" value="<?php echo $std['parma_addr']; ?>">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Interests</p>
                        <textarea class="form-control" placeholder="interest" name="interest" id="interest" style="height: 100px"><?php echo $std['interests']; ?></textarea>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <p class="fw-bold mb-0 p-2">Please Upload a Picture</p>
                        <input class="p-2 mx-auto" type="file" id="std_pic" name="std_pic">
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="Update">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>