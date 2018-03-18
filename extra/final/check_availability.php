<?php 
require_once("include/config.php");
$bd = mysqli_connect('localhost' , 'root', '', 'hms');
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$sql =("SELECT email FROM users WHERE email='$email'");
		$results=mysqli_query($bd, $sql);
		if (mysqli_num_rows($results) > 0) {

echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
