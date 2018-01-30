<?php //3row , 3column table by for loop                           ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style type="text/css">
            .main{
                margin: 100px auto;
                width: 500px;
            }
            table{
                width: 80%; border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="content">
                <table style="">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>Department</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < 3; $j++) {
                                ?>
                            <td>NAME</td>
                            <?php
                        }
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <?php ?>
            </div>
        </div>

    </body>
</html>