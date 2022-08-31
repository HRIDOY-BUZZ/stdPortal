<!DOCTYPE html>
<html lang="en">
    <?php include "admin_head.php";?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "admin_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Edit Student</h1>

                <form class="w-75 mx-auto" action=""  method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="fw-bold">Name</p>
                        <input type="text" class="form-control" name="student_name" id="name" placeholder=" ">
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Email</p>
                        <input type="email" class="form-control" name="email" id="email" placeholder=" ">
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Phone Number</p>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Father's Name</p>
                        <input type="text" class="form-control" name="fname" id="f_name" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Mother's Name</p>
                        <input type="text" class="form-control" name="mname" id="m_name" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">NID No</p>
                        <input type="text" class="form-control" name="nid" id="n_id" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Birth ID</p>
                        <input type="text" class="form-control" name="bid" id="b_id" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Reg No</p>
                        <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Gender</p>
                        <select class="form-select py-2" id="gender" name="gender" >
                            <option selected>Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Blood Group</p>
                        <input type="text" class="form-control" name="blood" id="blood" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Religion</p>
                        <input type="text" class="form-control" name="religion" id="religion" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Occupation</p>
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Present Address</p>
                        <input type="text" class="form-control" name="pre_address" id="pre_address" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Parmanent Address</p>
                        <input type="text" class="form-control" name="par_address" id="par_address" placeholder=" ">
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Interests</p>
                        <textarea class="form-control" placeholder="interest" name="interest" id="interest" style="height: 100px"></textarea>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <p class="fw-bold mb-0 p-2">Please Uoload a Picture</p>
                        <input class="p-2 mx-auto" type="file" id="std_pic" name="std_pic">
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="Update">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>