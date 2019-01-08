<?php
include 'inc/header.php';

include './lib/User.php';
$user = new User();
$msg = "";
?>

<?php
$msg = Session::get("loginmsg");


if (isset($_POST['updateprofile'])) {
   $msg =  $user->updateuser($_POST);
}

if (isset($_GET['action']) && $_GET['action'] =='delete') {
   $msg =  $user->deleteuser($_GET);
}




?>
<?php if(isset($msg) && $msg != null) echo $msg; ?>
<div class="panel panel-default">

    <div class="panel-heading">

        <h2>User List<span class="pull-right"><strong>Welcome! </strong>
                <?php
                $name = Session::get("name");
                if (isset($name)) {
                    echo $name;
                }
                ?>
            </span></h2>

    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered table-responsive">
            <tr>
                <th width="10%">Serial</th>
                <th width="25%">Name</th>
                <th width="25%">Email</th>
                <th width="10%">Username</th>
                <th width="10%">Address</th>
                <th width="20%">Action</th>

            </tr>



        <?php 
            $i = 0;
            foreach ($user->showusers() as $value) {
                $i++;
                ?>

            <tr>
                <td ><?php echo $i; ?></td>
                <td ><?php  echo $value->name; ?></td>
                <td ><?php  echo $value->email; ?></td>
                <td><?php  echo $value->username; ?></td>
                <td><?php  echo $value->address; ?></td>
                <td>
                    <a href="profile.php?id=<?php  echo $value->id; ?>" class="btn btn-primary">View</a>
                    <a href="editprofile.php?id=<?php  echo $value->id; ?>" class="btn btn-primary">Edit</a>
                    <a href="?action=delete&id=<?php  echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('are you sure?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</div>



<?php include './inc/footer.php'; ?>