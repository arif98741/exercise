<?php 
	include 'connection.php';
	include 'helper.php';

	if(isset($_POST['action']) && isset($_POST['value'])){
		$value = $_POST['value'];
			$sql = "select * from userdata WHERE name  like '%$value%' or phone LIKE '%$value%' or email LIke '%$value%' or city LIke '%$value%' or post LIke '%$value%'  order by name";
			$stmt = connection()->query($sql);
			$val = "<table>"
				 ."<thead>"
				 ."<tr>"
					 ."<th>Name</th>"
					 ."<th>Phone</th>"
					 ."<th>Email</th>"
					 ."<th>City</th>"
					 ."<th>Post</th>"
					 ."<th>Region</th>"
				 ."</tr>"
				 ."</thead>"
				 ."</tbody>";
				

			if($stmt){
				if($stmt->num_rows>0){
					while($row = $stmt->fetch_assoc()){
						$val .="<tr>"
								."<td>".$row['name']."</td>"
								."<td>".$row['phone']."</td>"
								."<td>".$row['email']."</td>"
								."<td>".$row['city']."</td>"
								."<td>".$row['post']."</td>"
								."<td>".$row['region']."</td>"
							."</tr>";
					}
					$val .="</tbody></table>";
					echo $val;
				}else{
					echo "<span class='warning'>No search result found</span>";
				}
		}

	}

 ?>