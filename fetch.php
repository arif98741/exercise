<?php 
	include 'connection.php';
	include 'helper.php';

	if(isset($_POST['action']) && isset($_POST['value'])){
		$value = $_POST['value'];
			$sql = "select * from userdata WHERE phone LIKE '%$value%' or email LIKE '%$value%' order by name";
			$stmt = connection()->query($sql);
			$val = "<ul>";
			if($stmt){
				if($stmt->num_rows>0){
					while($row=$stmt->fetch_assoc()){
						$val .="<li>".$row['name']."</li>"
							."<li>".$row['phone']."</li>"
							."<li>".$row['email']."</li>"
							."<li>".$row['city']."</li>"
							."<li>".$row['post']."</li>"
							."<li>".$row['region']."</li>"
							."<br/><br/>";
					}

					$val .="</ul>";
					echo $val;
				}else{
				echo "<span class='warning'>No search result found</span>";
			}	

		}

	}

 ?>