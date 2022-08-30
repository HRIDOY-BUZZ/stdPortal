<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
    <section class="container my-5 py-5">
        <div class="row align-items-center justify-content-between">
            <div class="col col-12 col-md-6 log-in-img">
                <img src="images/login.jpg" alt="">
            </div>
            <div class="col col-12 col-md-6">
                <h1 class="pb-3"><span class="common-color font-1">Welcome!</span> to the Portal</h1>
                <h3>Please Log in to continue</h3>
                <div class="form w-100 mt-4">
                    <form action="" method="post" class="login-form">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            <label for="email"><i class="fas fa-envelope pe-1"></i> Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><i class="fas fa-lock pe-1"></i> Password</label>
                        </div>
                        <?php
                        if($error != '')
                        {
                            echo '<p class="text-danger my-2">'.$error.'</p>';
                        }
                        ?>
                        <input name="login" class="mt-3 fw-bold custom-btn-1" type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'script.php';?>
</body>
</html>
