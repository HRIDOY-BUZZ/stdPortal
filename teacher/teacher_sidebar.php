<div id="sidebar" class="common-background link-no-style sidebar active">
    <div class="container">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name text-center"><h3>Student Portal</h3></div>
            </div>
            <i class="fas fa-bars" id="bar-btn"></i>
        </div>
        <div id="sidebar-main-content" class="sidebar-main-content active">
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="../images/teacher/<?php echo $tchr['image']; ?>" alt="">
                    <div class="name_job text-center">
                        <div class="name fw-bold fs-4 py-2"><?php echo $tchr['name']; ?></div>
                        <div class="job">Teacher</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <ul class="nav_list p-0">
                <li class="">
                    <a class="" href="../teacher/teacher_home.php"><i class="fas fa-th-large"></i><span class="links_name">Dashboadrd</span></a>
                </li>
                <li class="">
                    <a class="" href="../teacher/teacher_schedule.php"><i class="fas fa-calendar-alt"></i><span class="links_name">Class Schedule</span></a>
                </li>
                <li class="">
                    <a class="" href="../teacher/take_exam.php"><i class="fas fa-envelope-open-text"></i><span class="links_name">Take Exams</span></a>
                </li>

                <li class="">
                    <a class="" href="../teacher/notice.php"><i class="fas fa-exclamation-circle"></i><span class="links_name">Notice Board</span></a>
                </li>

            </ul>
        </div>
        <!-- d-flex align-items-center justify-content-start -->
        <div id="log_out" class="">
            <a class="log-out py-2 px-4" href="../backend/logout.php">Log Out<i class="fas fa-sign-out ps-3"></i></a>
        </div>
        </div>
</div>
</div>
