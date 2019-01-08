<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="checkbox" name="gender" value="male">Male
		<input type="checkbox" name="gender" value="famale">Female
		<input type="submit" name="submit">
	
	</form>

	<?php

		if(isset($_POST['gender'])){
			$value = $_POST['gender'];
			if($value == ""){
				echo "Please Select One";
			}else{
				if($value == "male"){
					header("location: something.php/sdj/fdsjf//dsfjdslkfjdsf/sd.php");
				}
				if($value == "famale"){
					header("location: something.php/dsf/dshf/dsfhsdh.php");
				}

			}
		}
	 ?>

</body>
</html>