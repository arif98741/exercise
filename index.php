<?php
$conn = new mysqli('localhost', 'root', '', 'pms');
$query = $conn->query("select * from tbl_user");
$row = mysqli_fetch_all($query);
$array = [];
for ($index = 0; $index < count($row); $index++) {
    for ($i = 0; $i < count($row[0]); $i++) {
        $array .= $row[$index][$i];
    }
    echo "<br/>";
    echo "<br/>";
}
echo count($arr);
echo "<pre>";
print_r($array);
echo "</pre>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="checkbox" id="check">
        <?php ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(function () {
                    console.log('hi');
                });
            });

        </script>
    </body>
</html>
