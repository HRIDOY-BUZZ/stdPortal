<?php
$error = '';
    if(isset($_POST['login']))
    {
        // echo 'BACKEND';
        if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != "")
        {
            session_start();

            $email = $_POST['email'];
            $pass = $_POST['password'];

            $sql = "SELECT * FROM `Users` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";
            $query = mysqli_query($conn, $sql);

            if(mysqli_num_rows($query))
            {
                $result = $row = mysqli_fetch_array($query, MYSQLI_ASSOC);

                $_SESSION['user'] = $result['user_type'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['id']   = $result['id'];
                $loc = $result['user_type']."/".$result['user_type']."_home.php";
                header("Location: $loc");
            }
            else
            {
                $error = "Invalid Credentials! Please Try again...";
                session_destroy();
            }
        }
        else
        {
            $error = "Email and Password are Required!";
            session_destroy();
        }
    }
?>