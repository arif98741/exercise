<?php include 'header.php'; ?>
<?php include 'helper.php'; ?>
<?php 
if(isset($_GET['action']) && isset($_GET['id']) && $_GET['action']='update'){
    $id = $_GET['id'];
    $singleStmt = connection()->query("select * from member where id ='$id'");
    if($singleStmt)
    $singleData = $singleStmt->fetch_assoc();
    
}
    ?>
<div class="phpdarkcoding">
    <section class="headeroption">
        <h2>PHP Login System</h2>
    </section>

    <section class="mainoption">
        <h1 class="success">Add Member</h1>
        <hr/>
        <div class="contentoption">
            <div class="member_addition">
                <?php
                if (isset($_POST['updatemember'])) {
                    $name = filter_data($_POST['name']);
                    
                    $password = md5(filter_data($_POST['password']));
                    $email = filter_data($_POST['email']);
                    $address = filter_data($_POST['address']);

                    if (empty($name) || empty($password) || empty($email) || empty($address)) {
                        echo "<span class='warning'>Field Must not be Empty!</span>";
                    } else {
                        $updateQ = "update member set 
                                name='$name',
                                password ='$password',
                                email ='$email',
                                address='$address' where id ='$id'
                        ";
                        $updateSt = connection()->query($updateQ);
                        if ($updateSt) {
                           
                                echo "<span class='success'>Data Updated Successful!</span>";
                            
                        }else {
                                    echo "<span class='warning'>Data Insert Failed!</span>";
                            }
                    }
                }
                ?>

            <?php if($singleStmt->num_rows>0): ?>

                <form action="" method="post">
                    

                    <input type="text" name="name" value="<?php echo $singleData['name']; ?>" class="insert">
                    <br/>
                    <input type="text" value="<?php echo $singleData['username']; ?>" class="insert">
                    <br/>
                    <input type="text" name="password" placeholder="password"  class="insert">
                    <br/>
                    <input type="text" name="email" value="<?php echo $singleData['email']; ?>" class="insert">
                    <br/>
                    <input type="text" name="address" value="<?php echo $singleData['address']; ?>" class="insert">
                    <br/>
                    <input type="submit" value="Save" name="updatemember" class="save_member_btn"><br/>

                </form>
            <?php  else: ?>
                     <span class='warning'>No Data Found!</span>

            <?php endif; ?>
            </div>


        </div>
        <a href="index.php" class="back">Home</a>
    </section>

    <?php include 'footer.php'; ?>