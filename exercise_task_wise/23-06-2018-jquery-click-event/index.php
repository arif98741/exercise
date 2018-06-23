<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Online Course For Learning</title>
	<style type="text/css">
		a{
			text-decoration: none;
			color: #fff;
		}
		.main{
			width: 75%;
			margin: 10px auto;
			background: #c0d6d8;
		}
		.header,.footer{
			background: #46592dc4;
			color: #e0e0d6;
			text-align: center;
			height: 95px;
		}
		.content{
			min-height: 390px;
			padding: 5px;
		}
		table{
			width: 100%;
			border-collapse: collapse;
			border: 1px solid #000;
		}
		tr,td,th{
			border: 1px solid #000;
		}
		td{
			padding: 6px;
		}
		.content p{font-size:19px;}
		.header h1, .header p, .footer h1, .footer p{margin:0px;}
		.footer a{text-decoration:none; color:brown;}
	</style>
</head>
<body>
	<div class="main">
		<div class="header">
			<h1>PHP Basic Fundamental Course</h1>
			<p>Learn and Enjoy</p>
			<a href="http://PHPDark.com" target="_blank">PHPDark.com</a>
		</div>
		<div class="content">
			<button id="clickbtn" buttonvalue="5">Click Button</button>
			<button id="jsonbtn" status="Project Manager">Json Button</button>

			<h1 id="message" style="text-align: center;"></h1>

			<div id="jsonresponse" style="text-align: center;"></div>

		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam 2017</h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA">Ariful Islam</a></p>
		</div>
	</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		//get text response
		$('#clickbtn').click(function() { //action will happened after click the button
			var id = $(this).attr('buttonvalue');
			$.ajax({
				url: 'response.php',
				method: 'get',
				dataType: 'text', //it maybe text or json or others
				data: {
					//this data is passed as serveral parameters with link

					//url format response.php?getresponse=testresponse&buttonvalue=5

					gettextresponse : 'testresponse',
					buttonvalue : id //sending button value as parameter  
				},
				success:function(response){
					console.log(response);  //show message in console. ctrl+shift+i
					$('#message').html(response); //bind results after getting response
				},
				error:function(error){
					console.log(error);
				}
			});	
		});




		//get json response
		$('#jsonbtn').click(function() { //action will happened after click the button
			var status = $(this).attr('status');
			$.ajax({
				url: 'response.php',
				method: 'get',
				dataType: 'json', //it maybe text or json or others
				data: {
					//this data is passed as serveral parameters with link
					//url format response.php?getjsonresponse=jsonresponse&buttonvalue=Developer
					getjsonresponse : 'jsonresponse',
					buttonvalue : status //sending button value as parameter  
				},
				success:function(response){
					console.log(response);  //show message in console. ctrl+shift+i
					var value = "<table>";
					value += "<tr>"
						  + "<th>ID</th>"		
						  + "<th>Name</th>"		
						  + "<th>Email</th>"		
						  + "<th>Mobile</th>"		
						  + "<th>Designation</th>";		
						  + "</tr";		

					for (i= 0; i< response.length; i++) {
						value +='<tr>';

							value  += '<td>'+response[i].id+'</td>'
							value  += '<td>'+response[i].name+'</td>'
							value  += '<td>'+response[i].email+'</td>'
							value  += '<td>'+response[i].mobile+'</td>'
							value  += '<td>'+response[i].designation+'</td>'

						value +='</tr>';
					}

					value +='</table>';

					$('#jsonresponse').html(value);

				},
				error:function(error){
					console.log(error);
				}
			});	
		});


	});
</script>
</body>
</html>