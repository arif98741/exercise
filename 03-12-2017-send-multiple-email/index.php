<?php
$msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli("localhost", "root", "", "multiple_email");
    $subject = "HTML email";
    $message = "
                <html>
                <head>
                        <title>HTML email</title>
                </head>
                <body>
                    <p>This email contains HTML Tags!</p>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                    </tr>
                </table>
                </body>
                </html>";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";


    if ($con) {
        $stmt = $con->query("select * from email where status ='1'");
        if ($stmt) {
            $i = 0;
            while ($row = $stmt->fetch_assoc()) {
                mail($row['email'], $subject, $message, $headers);
                $i++;
            }
        }
        $msg = "<span class='success'>Successfully Sent Mail to " . $i . " Users</span>";
    }
}
?>


<!doctype html>
<html>
    <head>
        <title>Send Multiple Email</title>
        <style>
            body{font-family: verdana}
            .phpcoding{width: 900px;margin: 0 auto; background: #ddd;}
            .headeroption, .footeroption{background: #444;color: #fff; text-align: center;padding: 20px;}
            .headeroption h2, .footeroption h2{margin: 0}
            .mainoption{min-height: 420px;padding: 20px}
            .myform{width: 500px; margin: 0 auto; padding: 10px 20px 20px;}
            input[type="submit"]{
                cursor: pointer ; 
                width:108px; 
                height: 60px; 
                margin: 0px  auto;
                font-size: 18px;

            }
            input[type="submit"]:hover{
                cursor: pointer ; 
                width:108px; 
                height: 60px; 
                margin: 0px  auto;
                color: #fff;
                background: #33ccff;
            }
            .error{font-size: 18px; color: red;}
            .success{font-size: 18px; color: green;}
            img{width:150px; height: 170px; top: 100px; left: 100px; }
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2>Send Multiple Emails</h2>
            </section>

            <section class="mainoption">
                <div class="myform">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table>

                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Send Email"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php if ($msg != ''): ?>
                    <?php echo $msg . "<br/>"; ?>
                <?php endif; ?>

            </section>
            <?php
            ?>
            <section class="footeroption">
                <h2>www.phpdark.com</h2>
            </section>
        </div>
    </body> 
</html>