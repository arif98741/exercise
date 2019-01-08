<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container" style="max-width: 500px;">
		<?php
			$msg = "";
			if (isset($_GET['first_ip'])) {
				$first_ip = $_GET['first_ip'];
				$second_ip = $_GET['second_ip'];

				if (empty($first_ip) || empty($second_ip)) {
					$msg = "<p class='alert alert-warning'>Field Must Not be </p>" ;
				}else{
					$first_a = explode(".", $first_ip);
					$second_a = explode(".", $second_ip);
				
					$link = new mysqli("localhost","root","","ip");
					
					$total  = 0;
					if($link)
					{
						
						for ($i = $first_a[3]; $i <= $second_a[3] ; $i++) { 
							$total++;
							$ip = $first_a['0'].".".$first_a['1'].".".$first_a['2'].".".$i;
							$query = "insert into ip_address(ip) values ('$ip')";
							$result = $link->query($query);
							
						}
					}
				}
			}
		 ?>



		<form action="" method="get">
			<div class="form-group has-success">
			  <label class="form-control-label" for="inputSuccess1">Enter First IP</label>
			  <input type="text" name="first_ip" class="form-control is-valid" id="inputValid">
			 
			</div>


			<div class="form-group has-success">
			  <label class="form-control-label" for="inputSuccess1">Enter Second IP</label>
			  <input type="text" name="second_ip"  class="form-control is-valid" id="inputValid">
			  
			</div>

			<div class="form-group has-success">
			  <label class="form-control-label" for="inputSuccess1">Valid input</label>
			  <input type="submit" value="Submit" class="form-control btn btn-primary is-valid" id="inputValid">
			  
			</div>
			 <div class="valid-feedback">
			 	<?php  {
			 		echo $msg;
			 	} ?>
			 </div>

		</form>
		

	</div>


</body>
</html>