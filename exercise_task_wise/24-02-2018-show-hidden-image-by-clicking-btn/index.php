<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
	<style type="text/css">
		.box{
			display:none;
		}
	</style>
</head>
<body>
	<div class="container" >
		<div class="row" style="margin-top:100px; margin-bottom: 30px;">
			<button class="btn btn-primary" id="action_btn">Click</button>
		</div>
		<div class="row">
			<div class="col-md-3 box" >
				<img src="background1.jpeg" alt="" class="img-thumbnail" />
			</div>
			<div class="col-md-3 box">
				<img src="background1.jpeg" alt="" class="img-thumbnail" />
			</div>
			<div class="col-md-3 box">
				<img src="background1.jpeg" alt="" class="img-thumbnail" />
			</div>
			<div class="col-md-3 box">
				<img src="background1.jpeg" alt="" class="img-thumbnail" />
			</div>
			
		</div>
		
		
		
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
		$(document).ready(function(){
			$("#action_btn").click(function(){
				$(".box").slideDown(800);
				
			});
		});
	</script>
</body>
</html>
