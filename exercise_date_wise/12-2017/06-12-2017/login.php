<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true) {
        header('location: index.php');
    }
}

include_once 'connection.php';
$con = connection();
$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (empty($username) || empty($password)) {
        $msg = "<span class='warning'>Username or Password Must Not be Empty</span>";
    } else {
        $stmt = $con->query("select * from user where username='$username' and password='$password'");
        if ($stmt) {
            $data = $stmt->fetch_assoc();
            if ($stmt->num_rows > 0) {
                //assiging session for getting logged user data instantly
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['address'] = $data['address'];
                $_SESSION['contact'] = $data['contact'];

                $msg = "<span class='success'>You have successfully logged in...</span> <br/> You will be redirected to homepage within 3 seconds";
                header("refresh:3; url=index.php"); //redirecting to user to homepage after 3 seconds
            } else {
                $msg = '<span class="warning">Username Or Password Not Matched!</span>';
            }
        }
    }
}
?>


<!doctype html>
<html>
    <head>
        <title>PHP Login System</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="phpdarkcoding">
            <section class="headeroption">
                <h2>PHP Login System </h2>
            </section>

            <section class="mainoption">
                <div class="myform">
                    <form action="" method="post" >
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="username" name="username"/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password"/></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Login"/></td>
                            </tr>
                        </table>
                        <?php if ($msg != ''): ?>
                            <?php echo $msg . "<br/>"; ?>

                        <?php endif; ?>
                    </form>
                </div>

            </section>

            <section class="footeroption">
                <h2>www.phpdark.com</h2>
            </section>
        </div>
    </body> 
</html>