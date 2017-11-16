<body background="images.jpg" style="color:skyblue; font-size:150%;">

</body>

<?php 
if(isset($_POST['createform'])){
	$dbname = $_POST['dbnme'];
	$dbname = $_POST['tablenme'];
}

?>

<!-- <?php
$table_name=$_REQUEST['tablenme'];
$db_name=$_REQUEST['dbnme'];

$con=mysql_connect("localhost","root","root");
if($con)
{
	if(mysql_select_db($_REQUEST['dbnme'],$con))
	{
		echo "database selected successfully ..... <br>";
		
		session_start();
		$_SESSION['tbnme']=$table_name;
		echo 
		"
		<html>
		<body>
			<form action='createTable.php'>
				
			
		<tr><td>Number of columns : </td><td><input type='text' name='colnum'></td></tr><br>
		<tr><td><input type='submit' value='create table'></td></tr><br>
			</form>
			
		</body>
		</html>
		";	
		
	}
	else 
	{
		session_start();
		$_SESSION['dbnme']=$db_name;
		echo "database not present please enter valid databse name .... ".mysql_error()."<br>";
		echo	"do you want to create it ..... ??";
		echo 
		"
		<html>
		<body>
			<form action='createDB.php'>
				

		
		<tr><td><input type='submit' value='create db'></td></tr><br>
			</form>
			
		</body>
		</html>
		";	
	}
}
else 
{
	echo "unable to connect to server .... ".mysql_error()."<br>";
}
?> -->