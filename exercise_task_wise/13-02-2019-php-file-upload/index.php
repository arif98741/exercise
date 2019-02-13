<?php


	$error = array();

	if (isset($_POST['fileupload'])) {

		$base = basename($_FILES["image"]["name"]);
		if (!file_exists('uploads/')) {
			mkdir("uploads");
		}
		$target_directory =  "uploads/".$base;

		$tmp_extension = explode(".", $base);
		$file_extension = end($tmp_extension);

		
		//file existance check
		if (file_exists($target_directory)) { 
			array_push($error, "<p class='error'>FIle Already Exist</p>");
		}

		//file size check
		if ($_FILES["image"]["size"] > 500000*4) { 
			array_push($error, "<p class='error'>Maximum File Size Exceed</p>");
		}

		//file format check
		$exs = array("jpg","png","gif","jpeg","PNG","JPG","JPEG","GIF");
		if(!in_array($file_extension, $exs)){
			array_push($error, "<p class='error'>You must select image file</p>");
		}

		
		// echo "<pre>";
		// print_r($error); die;

		//code executes if there is no error
		if (count($error) == 0) {
			$status = move_uploaded_file($_FILES["image"]["tmp_name"], $target_directory);
			array_push($error, "<p class='success'>File Successfully Uploaded");
		}
		background: #ddd;

		//if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			margin: 0 ;
			padding: 0;
			font-family: 'Roboto', sans-serif;

		}
		.wrapper{
			width: 80%;
			margin: 20px auto;
		}
		.header,.footer{
			height: 60px;
			background: linear-gradient(to right,#ddd,green);
			text-align: center;
		}

		.header h2{
			font-weight: 700;
			padding: 10px 20px;
			color: #fff;
		}
		.content{
			margin: 20px auto;
			min-height: 400px;
		}

		.content p{
			margin-top: 20px;

		}

		form{
			width: 90%;
			margin: 0 auto;
			margin-top: 40px;
		}

		input[type="submit"]
		{
			margin-top: 10px;
			background: linear-gradient(to right, #ddd, #e5e5e5);
			width: 80px;
			height: 30px;
			outline: none;
		}

		.error{
			color: red;
			font-size: 18px;
			font-weight: 700;
			padding: 15px 10px;
			margin-top: 5px;
			background: #ddd;
			max-width: 60%;
		}

		.success{
			color: green;
			font-size: 18px;
			font-weight: 700;
			padding: 15px 10px;
			margin-top: 5px;
			background: #ddd;
			max-width: 60%;
		}

		.footer  h2{
			padding: 10px 0px;
			color: #fff;
		}
	</style>

</head>
<body>

	<div class="wrapper">
		<div class="header">
			<h2>File Upload</h2>
		</div>
		<div class="content">

			<form action=""  method="post" enctype="multipart/form-data">
				<input type="file" name="image"><br>
				<input type="submit" value="upload" name="fileupload">
			</form>

			<?php
				foreach ($error as $value) { ?>
					<?php echo $value; ?>
			<?php } ?>
			
		</div>
		<div class="footer">
			<h2>&copy; Copyright 2019- DevXpart</h2>
		</div>
	</div>
	
</body>
</html>