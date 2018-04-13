<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/Session.php';
Session::initialization();
if(isset($_GET['action']) && $_GET['action'] == 'logout')
{
    session_destroy();
    header("Location: login.php");
}

if(!isset($_SESSION['login']))
{
    header("Location: login.php");
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta description="">
        <title>Login Register System</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <link rel="shortcut icon" href="img/favicon.png">

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Login Register System PHP & PDO</a>
                    </div>
                    <ul class="nav navbar-nav pull-right">
                        

                        <?php if(Session::get('login') == true): ?>
                            <li><a href="search.php">Searh User</a></li>
                            <li><a href="profile.php?id=<?php echo $_SESSION['id']; ?>">Profile</a></li>

                            <li><a href="?action=logout">Logout</a></li>
                        <?php endif; ?>

                        <?php if(Session::get('login') !== true): ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </nav>