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
                    <img src="../images/profile.jpg" alt="">
                    <div class="name_job text-center">
                        <div class="name fw-bold fs-4 py-2">Nazmul Alam</div>
                        <div class="job">Admin</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <ul class="nav_list p-0">
                <li class="">
                    <a class="" href="../admin/admin_home.php"><i class="fas fa-th-large"></i><span class="links_name">Dashboadrd</span></a>
                </li>
                <li onclick="dropDownEvent('student')" id="student-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-user"></i><span class="links_name">Student</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="student-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/add_student.php">Add Student</a></li>
                        <li class="m-0"><a href="../admin/student_list.php">Student List</a></li>
                    </ul>
                </li>
                <li onclick="dropDownEvent('teacher')" id="teacher-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-user-graduate"></i><span class="links_name">Teacher</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="teacher-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/add_teacher.php">Add Teacher</a></li>
                        <li class="m-0"><a href="../admin/teacher_list.php">Teacher List</a></li>
                    </ul>
                </li>

                <li onclick="dropDownEvent('schedule')" id="schedule-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-calendar-alt"></i><span class="links_name">Schedule</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="schedule-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/set_schedule.php">Set schedule</a></li>
                        <li class="m-0"><a href="../admin/add_student_schedule.php">Add Student</a></li>
                        <li class="m-0"><a href="../admin/class_schedule_list.php">Class List</a></li>
                    </ul>
                </li>
                <li onclick="dropDownEvent('course')" id="course-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-clipboard-list"></i><span class="links_name">Course</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="course-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/add_course.php">Add Course</a></li>
                        <li class="m-0"><a href="../admin/course_list.php">Course List</a></li>
                    </ul>
                </li>


                <li onclick="dropDownEvent('question')" id="question-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-book"></i></i><span class="links_name">Board Question</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="question-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/add_board_question.php">Add Board Question</a></li>
                        <li class="m-0"><a href="../admin/board_question_list.php">Board Question List</a></li>
                    </ul>
                </li>

                <li class="">
                    <a class="" href="../admin/set_result.php"><i class="fas fa-sticky-note"></i><span class="links_name">Set Result</span></a>
                </li>

                <li onclick="dropDownEvent('notice')" id="notice-menu" class="icon-link-dropdown">
                    <a class="" href="#"><i class="fas fa-exclamation-circle"></i><span class="links_name">Notice</span><i class="fas fa-chevron-down arrow"></i></a>
                    <ul id="notice-sub-menu" class="sub-menu close p-0 mt-0">
                        <li class="m-0"><a href="../admin/add_notice.php">Add Notice</a></li>
                        <li class="m-0"><a href="../admin/notice_list.php">Notice List</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- d-flex align-items-center justify-content-start -->
        <div id="log_out" class="">
            <a class="log-out py-2 px-4" href="/backend/logout.php">Log Out<i class="fas fa-sign-out ps-3"></i></a>
        </div>
        </div>
</div>
</div>
