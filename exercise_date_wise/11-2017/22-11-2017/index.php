<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		ul{list-style: none;}
		li{float:left; padding: 5px; }
		span{text-align: justify;}
	</style>
</head>
<body>
	<button id="btn">Click Here</button>
	<div id="message"></div>
	<script src="jquery.min.js">
		
	</script>
	<script>
		$(document).ready(function() {

			var name = "Ariful+ Islam";
			//console.log(name.substring(1,7));
			$('#btn').click(function () {
				console.log('yes i am clicked by button');
			});


		});
	</script>
	
</body>
</html>