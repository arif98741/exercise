<?php include 'header.php'; ?>
<?php include 'helper.php'; ?>
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
                if (isset($_POST['addmember'])) {
                    $name = filter_data($_POST['name']);
                    $username = filter_data($_POST['username']);
                    $password = md5(filter_data($_POST['password']));
                    $email = filter_data($_POST['email']);
                    $address = filter_data($_POST['address']);

                    if (empty($name) || empty($username) || empty($password) || empty($email) || empty($address)) {
                        echo "<span class='warning'>Field Must not be Empty!</span>";
                    } else {
                        $availQ = "select * from member where username='$username' or email='$email'";
                        $availSt = connection()->query($availQ);
                        if ($availSt) {
                            if ($availSt->num_rows > 0) {
                                echo "<span class='warning'>User Already Exist. Try With Another username or Email!</span>";
                            } else {
                                $q = "insert into member(name,username,password,email,address) values('$name','$username','$password','$email','$address')";
                                $st = connection()->query($q);
                                if ($st) {
                                    echo "<span class='success'>Member Added Successfully...</span>";
                                } else {
                                    echo "<span class='warning'>Data Insert Failed!</span>";
                                }
                            }
                        }
                    }
                }
                ?>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Enter Name" class="insert"><br/>
                    <input type="text"  name="username" placeholder="Enter Username" class="insert"><br/>
                    <input type="text" name="password"  placeholder="Enter Password" class="insert"><br/>
                    <input type="text"  name="email" placeholder="Enter Email" class="insert"><br/>
                    <input type="text"  name="address" placeholder="Enter Address" class="insert"><br/>
                    <input type="submit" value="Save" name="addmember" class="save_member_btn"><br/>

                </form>
            </div>


        </div>
        <a href="index.php" class="back">Home</a>
    </section>

    <?php include 'footer.php'; ?>