<!DOCTYPE html>
<html lang="en">
    <?php include "student_head.php";?>
<body class="">
<?php include "../header_nav.php";?>
    <section class="header-container">
        <?php include "student_sidebar.php";?>
    </section>
    <section id="home-container"  class="home-container active-2"">
        <div class="px-4 py-5 mt-4">
            <h1 class="common-background-2 p-2 text-center">Board Questions</h1>

            <form action="" method="">
                <div class="my-4 row g-3">
                    <div class="col col-6 col-md-4">
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>semester</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col col-6 col-md-4">
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>year</option>
                            <option value="1">2019</option>
                            <option value="2">2020</option>
                            <option value="3">2021</option>
                        </select>
                    </div>
                    <div class="col col-6 col-md-4">
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>subject</option>
                            <option value="1">cse-105</option>
                            <option value="2">cse-110</option>
                            <option value="3">cse-205</option>
                        </select>
                    </div>
                </div>
                <input name="submit" class=" fw-bold custom-btn-1" type="submit" value="Find">
            </form>

            <div class="my-4">
                <div class="common-card">
                    <h3>Cse 110 2021 2nd semester question</h3>
                    <div class="">
                        <a style="text-decoration: none;" class="common-color" href="../images/dummy.pdf" target="_blanck">Download <i class="fa-solid fa-file-pdf ps-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="my-4">
                <div class="common-card">
                    <h3>Cse 105 2019 1st semester question</h3>
                    <div class="">
                        <a style="text-decoration: none;" class="common-color" href="../images/dummy.pdf" target="_blanck">Download <i class="fa-solid fa-file-pdf ps-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../script.php';?>
</body>
</html>