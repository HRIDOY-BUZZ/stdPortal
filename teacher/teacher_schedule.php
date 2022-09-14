<!DOCTYPE html>
<html lang="en">
<?php
    include "teacher_head.php";
    include "../backend/functions.php";
    include "backend/teacher_schedule.php";
?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "teacher_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Class Schedule List</h1>
            <div class="container alerts">
                <?php
                    if(!empty($shdl))
                    {
                        foreach($shdl as $s)
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

    <!-- scripts for full calender -->
    <!-- <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery-ui.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.js'></script>
    <script>
        $('#calender').fullCalendar({
            header: {
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate:'',
            navLinks:true,// can click day/week names to navigate views
            editable:true,
            eventLimit:true,// allow "more" link when too many events
            events: [
                
                
            // {
            // title:'Long Event',
            // start:'2022-06-07',
            // end:'2022-06-10'
            // },
            // {
            // id: 999,
            // title:'Repeating Event',
            // start:'2022-06-09T16:00:00'
            // },
            // {
            // id: 999,
            // title:'Repeating Event',
            // start:'2022-06-16T16:00:00'
            // },
            // {
            // title:'Conference',
            // start:'2022-06-11',
            // end:'2022-06-13'
            // },
            // {
            // title:'Meeting',
            // start:'2022-06-12T10:30:00',
            // end:'2022-06-12T12:30:00'
            // },
            // {
            // title:'Lunch',
            // start:'2022-06-12T12:00:00'
            // },
            // {
            // title:'Meeting',
            // start:'2022-06-12T14:30:00'
            // },
            // {
            // title:'Happy Hour',
            // start:'2022-06-12T17:30:00'
            // },
            // {
            // title:'Dinner',
            // start:'2022-06-12T20:00:00'
            // },
            // {
            // title:'Birthday Party',
            // start:'2022-06-13T07:00:00'
            // },
            // {
            // title:'Click for Google',
            // url:'http://google.com/',
            // start:'2022-06-28'
            // }
            ]
        });

    </script> -->
</body>
</html>