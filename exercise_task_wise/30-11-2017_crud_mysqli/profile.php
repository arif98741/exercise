<?php include 'inc/header.php'; ?>
<?php 
include './lib/User.php';
 $db = new Database();
?>
<?php if (isset($_GET['id'])) { //get single user profile data
    $id = $_GET['id'];
    $stmt = $db->pdo->prepare("select * from tbl_user where id ='$id'");
    $stmt->execute();
    $userprofiledata = $stmt->fetch(PDO::FETCH_OBJ);

} ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>View Profile <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
    </div>
    <div class="panel-body">
        
        <div style="max-width:500px; margin: 0 auto;">
            <div class="well">
                <label for="name">Your Name</label>
                <p><?php echo $userprofiledata->name; ?></p>

                <label for="name">Email</label>
                <p><?php echo $userprofiledata->email; ?></p>

                <label for="name">Username</label>
                <p><?php echo $userprofiledata->username; ?></p>

                <label for="name">Address</label>
                <p><?php echo $userprofiledata->address; ?></p>


            </div>
            
        </div>
</div>
</div>


<?php include './inc/footer.php'; ?>