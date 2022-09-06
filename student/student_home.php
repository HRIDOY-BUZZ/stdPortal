<!DOCTYPE html>
<html lang="en">
    <?php include "student_head.php";?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section  id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5">
            <h1 class="py-3">Welcome!! <?php echo $std['name']; ?></h1>
            <div class="common-border pb-3">
                <h3 class="common-background-2 p-3">Personal Information</h3>
                <div class="p-3 row">
                    <div class="col col-12 col-md-12 col-lg-3 profile-image text-center">
                        <img class="" src="../images/student/<?php echo $std['image']; ?>" alt="">
                    </div>
                    <div class="col col-12 col-md-12 col-lg-5">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th class="w-50" scope="col">Personal</th>
                                <th scope="col"><i class="fa-solid fa-user"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="w-50">Name:</th>
                                    <td><?php echo $std['name']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Father's Name:</th>
                                    <td><?php echo $std['father']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Mother's Name:</th>
                                    <td><?php echo $std['mother']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">NID No:</th>
                                    <td><?php echo $std['nid']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Birth ID:</th>
                                    <td><?php echo $std['birthreg']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Student ID:</th>
                                    <td><?php echo $std['std_id']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Gender:</th>
                                    <td><?php echo $std['gender']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Blood Group:</th>
                                    <td><?php echo $std['blood']; ?></td>
                                </tr>
                                <tr>
                                    <th class="w-50" scope="row">Religion:</th>
                                    <td><?php echo $std['religion']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-responsive py-4">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="w-50" scope="col">Address</th>
                                    <th scope="col"><i class="fa-solid fa-house"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="w-50" scope="row">Present:</th>
                                        <td><?php echo $std['present_addr']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="w-50" scope="row">Parmanent:</th>
                                        <td><?php echo $std['parma_addr']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col col-12 col-md-12 col-lg-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="w-50" scope="col">CONTACT</th>
                                    <th scope="col"><i class="fa-solid fa-envelope"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="w-50" scope="row">Phone:</th>
                                        <td><?php echo $std['phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="w-50" scope="row">Email:</th>
                                        <td><?php echo $std['email']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive py-4">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="w-100" scope="col">INTEREST lIST</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $std['interests']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include '../script.php';?>
</body>
</html>