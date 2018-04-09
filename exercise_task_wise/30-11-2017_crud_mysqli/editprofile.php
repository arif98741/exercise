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
        <h2>Update Profile <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
    </div>
    <div class="panel-body">
        <form action="index.php" method="post">
            <div style="max-width:500px; margin: 0 auto;">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text"  name="name"  id="name" class="form-control" value="<?php echo $userprofiledata->name; ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text"  name="email"  id="email" class="form-control" value="<?php echo $userprofiledata->email; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text"  name="password"  id="password" class="form-control" value="">

                    <input type="hidden"  name="id"  class="form-control" value="<?php echo $userprofiledata->id; ?>">
                </div>

                <button type="submit" name="updateprofile" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
</div>


<?php include './inc/footer.php'; ?>