<?php include 'header.php'; ?>
<?php include 'helper.php'; ?>
<style>
    table{
        width:100%;
        border: 1px solid #000;
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid #000;
        padding: 5px;
        text-align: center;
    }
    tr:nth-child(2n){
        background: #e8f2e8;
    }
    tr:hover{
        background: #D9DEBA;

    }
</style>
<div class="phpdarkcoding">
    <section class="headeroption">
        <h2>PHP Login System</h2>
    </section>

    <section class="mainoption">
        <h1 class="success">Add Member</h1>
        <hr/>
        <div class="contentoption">
            <div class="view_member">
                <table>
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $st = connection()->query("select * from member");
                        if ($st) {
                            $i = 0;
                            while ($row = $st->fetch_assoc()) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['address']; ?></td>

                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </tbody>
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
        <a href="index.php" class="back">Home</a>
    </section>

    <?php include 'footer.php'; ?>