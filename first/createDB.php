<body background="images.jpg" style="color:skyblue; font-size:100%;">

</body>
<?php
session_start();
$con=mysql_connect("localhost","root","root");
$qry1="create database ".$_SESSION['dbnme'].";";
if($con)
{	
	
	if(isset($_SESSION['dbnme']))
	{
		if(mysql_query($qry1,$con))
		{
			echo "database created successfully .... <br>";
			echo"<tr><td><a href='index.php'>home</a></td></tr>";
		
		}	
	}
}
?>