<?php
include './lib/User.php';

?>
<?php
$user = new User();
$userRegi = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    
    $userRegi = $user->userRegistration($_POST);
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

                            <li><a href="?action=logout">Logout</a></li>
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
        <h3>User Registration <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h3>
    </div>
    <div class="panel-body">

        <form action="register.php" method="post">
            <?php echo $userRegi; ?>
            <div style="max-width:500px; margin: 0 auto;">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text"  name="name"  id="name" class="form-control"  placeholder="Enter your name.....">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text"  name="username"  id="username" class="form-control"  placeholder="Enter your username.....">
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text"  name="email"  id="email" class="form-control"  placeholder="Enter your email.....">
                </div>

                <div class="form-group">
                    <label for="email">Address</label>
                    <input type="text"  name="address"  id="email" class="form-control"  placeholder="Enter your address....">
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"  name="password"  id="password" class="form-control" placeholder="Enter your password.....">
                </div>

                <button type="submit" name="register" class="btn btn-success">Submit</button>
        </form>
        <div class="panel panel-default"  style="margin-top: 5px;"  id="panel-body-allowed-ch">
            <div class="panel-heading" id="panel-body-allowed-ch">
                <p>Allowed Characters</p>
            </div>
            <div class="panel-body">
                <ul class="list-group-item-text ">
                    <li>Username must need to be more than 3 characters.</li>
                    <li>Username must contain alphanumeric characters(a-z,A-Z,_,0-9)</li>
                    <li>Email must be valid</li>
                    <li>Password must contain alphanumeric characters(a-z,A-Z,_,0-9)</li>
                    <li>Password must need to be more than 6 characters.</li>
                </ul>
            </div>
        </div>



    </div>

</div>
</div>
<script>


    $(function () {
        $('#panel-body-allowed-ch').on('click', function () {
            $('#panel-body-allowed-ch').fadeOut();
        });
        $('#panel-body-allowed-ch').on('click', function () {
            $('#panel-body-allowed-ch').fadeIn();
        });



    });


</script>

<?php include './inc/footer.php'; ?>