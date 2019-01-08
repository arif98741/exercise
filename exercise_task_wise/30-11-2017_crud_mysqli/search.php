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

<div class="panel panel-default">

    <div class="panel-heading">
        
        <form action="" method="">
            <input type="search" name="keyword" class="form-control" placeholder="Enter Search Keyword here name or address or email or contact">
            <br>
            <input type="submit" value="Search" class="btn btn-success">
        </form>
        
    </div>
    <div class="panel-body">

        <?php if(isset($_GET['keyword'])){
               $keyword = $_GET['keyword'];
                $user = $user->searchuser($keyword);

                if($user) { ?>
                    
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
            foreach ($user as $value) {
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


           <?php     }else{ ?>

                    <p class="alert alert-warning">No user found</p>
              <?php  }} ?>


        



    </div>
</div>



<?php include './inc/footer.php'; ?>