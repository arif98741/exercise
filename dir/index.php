<?php 
//$path =  pathinfo(__DIR__); 
//echo '<pre>';
//print_r($path);
//echo '<br>';
//echo realpath(__FILE__); 
//echo '<br>';
 //echo "<pre>";
//print_r($_FILES); //die;
mkdir('uploads');
mkdir('uploads/banners');
mkdir('uploads/banners/files');
 die;
try {
	if (empty($_FILES['banner'])) {
		throw new Exception('File must not be empty');
	}else{
		$banner =	$_FILES['banner']['name']; 
	 	$expbanner =	explode('.',$banner);
	 	$bannerexptype = $expbanner[1];
	 	date_default_timezone_set('Australia/Melbourne');
	 	$date = date('m/d/Yh:i:sa', time());
	 	$rand = rand(10000,99999);
	 	$encname = $date.$rand;
	 	$bannername = md5($encname).'.'.$bannerexptype;
	 	$bannerpath = "uploads/banners/".$bannername;
	 	move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
	}
} catch (Exception $e) {
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="banner">
		<br><br>
		<input type="submit">
		
	</form>
</body>
</html>

