<body background="boyka.jpg" style="color:skyblue; font-size:150%;">

</body>

<?php
session_start();
$table_nme=$_SESSION['tbnme'];
$colnum=$_REQUEST['colnum'];
$_SESSION['colnum']=$colnum;
echo "
		<form action='created.php' method='post'>
		<table bgcolor='grey' border='2px'>
		<th><h3>Enter details for table</h3></th>
		<tr><td>Column Name</td><td>Data Type</td><td>Size</td><td>Key</td></tr>
		";
for ($i = 0; $i < $colnum; $i++) {
	
	
		echo
		
		"
		
		<tr><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td></tr>
		
		
		";
		
}
echo 
"
	<tr><td><input type='submit' value='create table'></td></tr>
	</table>
	</form>
";

?>