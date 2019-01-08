<?php 
session_start();
include_once("dbconfig.php");
include_once("functions.php");
$con = connection();
?>

<?php
// mySQL Tables

// cd_interest
//- id
//- catid
//- value
//- name

// cd_interest_category
//- id
//- name

// cd_interest_user
//- id
//- userid
//- interest
$userid = 1000; // get user from database


?>
<?php
		if (isset($_POST['update'])) {
			//echo "<pre>";
			//print_r($_POST);
			//echo "</pre>";
			
			$interest = "";
			foreach ($_POST['interests'] as $v) {
				$interest .= $v.",";
			}
			$query = "update cd_interest_user set interest='$interest' where userid = '$userid'";
			$status = $con->query($query);
			if ($status) {
				echo "Interest Updated Successfully";
			}else{
				echo "Interest Updated Failed";
			}

		}

 ?>

<form action="" method="post">
	<?php 
		
		$stmt = $con->query("SELECT * FROM cd_interest_category");
		if($stmt){
			while ($cat = $stmt->fetch_assoc()) { ?>
				<p><?php echo $cat['name']; ?></p>
				<?php
					$catid = $cat['id'];
					$stm = $con->query("select * from cd_interest where catid = '$catid'");
					while($data = $stm->fetch_assoc()) { ?>
						
						<input type="checkbox" <?php echo check($data['value'],$userid); ?> value="<?php echo $data['value']; ?>" name="interests[]"><?php echo $data['name']; ?><br/>
							
						

		<?php } } } ?><br/><br/>
	<input type="Submit" value="Update" name="update"> 
</form>