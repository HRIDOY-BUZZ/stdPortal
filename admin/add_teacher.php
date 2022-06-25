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
            <h1 class="common-background-2 p-2 text-center">Add Teacher</h1>

                <form class="w-75 mx-auto" action="" method="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="teacher_name" id="name" placeholder=" ">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder=" ">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder=" ">
                        <label for="phone">Phone Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="f_name" id="f_name" placeholder=" ">
                        <label for="f_name">Father's Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="m_name" id="m_name" placeholder=" ">
                        <label for="m_name">Mother's Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="n_id" id="n_id" placeholder=" ">
                        <label for="n_id">NID No</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="b_id" id="b_id" placeholder=" ">
                        <label for="b_id">Birth ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder=" ">
                        <label for="reg_no">Reg No</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="teacher_id" id="teacher_id" placeholder=" ">
                        <label for="teacher_id">Teacher Id</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select py-2" id="gender" name="gender" >
                            <option selected>Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="blood" id="blood" placeholder=" ">
                        <label for="blood">Blood Group</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="religion" id="religion" placeholder=" ">
                        <label for="religion">Religion</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder=" ">
                        <label for="occupation">Occupation</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="pre_address" id="pre_address" placeholder=" ">
                        <label for="pre_address">Present Address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="par_address" id="par_address" placeholder=" ">
                        <label for="par_address">Parmanent Address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="interest" name="interest" id="interest" style="height: 100px"></textarea>
                        <label for="interest">Interests</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="documents" name="documents" id="documents" style="height: 100px"></textarea>
                        <label for="documents">Documents</label>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <p class="fw-bold mb-0 p-2">Please Uoload a Picture</p>
                        <input class="p-2 mx-auto" type="file" id="teacher_pic" name="teacher_pic">
                    </div>
                    <input name="submit" class="mt-3 mx-auto fw-bold custom-btn-1" type="submit" value="submit">
                </form>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>