<?php
$msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
	$interest = $_POST['interest'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$question = $_POST['question'];
	if(empty($interest) || empty($name) || empty($email) || empty($question)) {
		$msg = "<span class='error'>Field Must not be empty</span>";
		
	}else{
		$reciever = "someone@example.com";
		$subject = "HTML email";
		$header = "From: <webmaster@phpdark.com>" . "\r\n";
		$message = "Name ".$name.", Email ".$email.", Interest ".$interest.", Question ".$question;
		$con = new mysqli("localhost", "root", "", "multiple_email");
		if($con){
			$status = mail($reciever, $subject, $message, $header);
			if($status){
				$msg = "<span class='success'>Email Sent Successfully</span>";
			}else{
				$msg = "<span class='error'>Failed to send email</span>";
			}
		}else{
			$msg = "<span class='error'>Connection failed or Unable to connect database</span>";
		}
		
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
			input,select{width:400px; height:50px;}
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
                    <form action="" method="post" >
						<select name="interest" id="">
							<option value="Database">Database</option>
							<option value="Administrative">Administrative Works</option>
							<option value="Programming">Programming</option>
							<option value="IT">IT Support</option>
						</select><br/>
						<input type="text" name="name" placeholder="Enter Your name"/><br/>
						<input type="text" name="email" placeholder="Enter your email"/><br/>
						<input type="text" name="question" placeholder="Enter Question"/><br/>
                      <input type="submit" name="submit" value="Send Email"/>
                           
                    </form>
                </div>
                <?php if ($msg != ''): ?>
                    <?php echo $msg . "<br/>"; ?>
                <?php endif; ?>
                <h2>All Codes Are Available Here <a href="https://github.com/arif98741/exercise/tree/master/03-12-2017-send-multiple-email">Multiple Email</a></h2>
                <h3>Change database, user,pass etc for refreshed code</h3>


            </section>
            <?php
            ?>
            <section class="footeroption">
                <h2>www.phpdark.com</h2>
            </section>

        </div>
    </body> 
</html>