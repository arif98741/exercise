<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
if (!isset($_SESSION['login'])) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Simple Login System Project</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="phpdarkcoding">
            <section class="headeroption">
                <h2>Dashboard</h2>
            </section>

            <section class="mainoption">
                <h1 class="success">Welcome To Dashboard</h1>

                <div class="message">
                    <h3 class="success"><b><?php echo $_SESSION['name']; ?></b>, You can now easily manage your dashboard from here.</h3>
                    <h4>Time: <?php echo date('h:m:sa') ?></h4>
                </div>
            </section>

            <section class="footeroption">
                <h2>www.phpdark.com</h2>
                <h4 style="margin-top: 0px;">&copy; Ariful Islam</h4>
            </section>
        </div>
    </body> 
</html>