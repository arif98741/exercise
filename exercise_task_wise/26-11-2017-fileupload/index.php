<?php

$msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $permited = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xlxs', 'xls');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    echo $div[1];
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
    $uploaded_image = "uploads/" . $unique_image;

    if (file_exists($uploaded_image)) {
        echo "yes available";
    } else {
        echo "not available";
    }

    if (empty($file_name)) {
        $msg = "<span class='error'>Please Select any Image !</span>";
    } elseif ($file_size > 1048567) {
        $msg = '<span class="error">Image Size should be less then 1MB!
	     </span>';
    } elseif (in_array($file_ext, $permited) === false) {
        $msg = "<span class='error'>You can upload only:-"
                . implode(', ', $permited) . "</span>";
    } else {
        if (move_uploaded_file($file_temp, $uploaded_image)) {
            $msg = "<span class='success'>Image Uploaded !</span>";
            /* $query = "INSERT INTO tbl_image(image) 
              VALUES('$uploaded_image')";
              $inserted_rows = $db->insert($query);
              if ($inserted_rows) {
              $msg = "<span class='success'>Image Inserted Successfully.
              </span>"; */
        } else {
            $msg = '<span class="error">Image Not Inserted !</span>';
        }
    }
}
?>


<!doctype html>
<html>
    <head>
        <title>Uploading Image File with PHP</title>
        <style>
            body{font-family: verdana}
            .phpcoding{width: 900px;margin: 0 auto; background: #ddd;}
            .headeroption, .footeroption{background: #444;color: #fff; text-align: center;padding: 20px;}
            .headeroption h2, .footeroption h2{margin: 0}
            .mainoption{min-height: 420px;padding: 20px}
            .myform{width: 500px;border: 1px solid  #999;margin: 0 auto; padding: 10px 20px 20px;}
            input[type="submit"],input[type="file"]{cursor: pointer};
            input[type="file"]{width:100px; padding: 5px;};
            .error{font-size: 18px; color: red;}
            .success{font-size: 18px; color: green;}
            img{width:150px; height: 170px; top: 100px; left: 100px; }
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2>Uploading Image File with PHP</h2>
            </section>

            <section class="mainoption">
                <div class="myform">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Select Image</td>
                                <td><input type="file" name="image"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Upload"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php if ($msg != ''): ?>
                    <?php echo $msg . "<br/>"; ?>

                    <?php echo sprintf('%0.2f', ($file_size / 1024)) . "KB<br/>"; ?>

                    <?php echo $uploaded_image . "<br/>"; ?>
                    <img src="<?php echo $uploaded_image ?>" alt="">

                <?php endif; ?>


            </section>
            <?php
            ?>
            <section class="footeroption">
                <h2>www.phpdark.com</h2>
            </section>
        </div>
    </body> 
</html>