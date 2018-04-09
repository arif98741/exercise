<?php
include './lib/User.php';
?>
<?php
$user = new User();

$userLogin = '';

if(isset($_SESSION['login']) )
{
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
         $userLogin = $user->userLogin($_POST);

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
                            <li><a href="profile.php?id=<?php echo $_SESSION['id']; ?>">Profile</a></li>

                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>

                        <?php if(Session::get('login') !== true): ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </nav>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>User Login <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
    </div>
    <div class="panel-body">
        <?php
        if (isset($userLogin)) {
            echo $userLogin;
        }
        ?>
        <form action="" method="post">
            <div style="max-width: 450px; margin: 0 auto;">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" class="form-control" name="email"  >
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" id="email" class="form-control" name="password"  >
                </div>
                <button type="submit" name="login" class="btn btn-success">Login</button>
        </form>
    </div>
</div>
</div>


<?php include './inc/footer.php'; ?>