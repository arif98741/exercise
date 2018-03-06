<?php 

	//fetch data from database by using fetch array
	$db = new mysqli("localhost","root","","database");
	if($db){
		$sql = "select * from comments where post_id='$id' order by comments_id desc";
		$stmt = $db->query($sql);
		if($stmt){
			if($stmt->num_rows>0){
				while($row = $stmt->fetch_array()){
				echo "<div>";
					echo "<h5>".$row['0']."</h5>";
					echo "<h5>".$row['1']."</h5>";
					echo "<h5>".$row['2']."</h5>";
					echo "<blockquote>".$row['3']."</blockquote>";
				echo "<div>";
				}
			}else{
				echo "No data found";
			}
		}else{
			echo "Query failed";
		}
	}else{
		echo "Connection failed";
	}


?>