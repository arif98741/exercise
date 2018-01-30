<?php include 'header.php'; ?>
<div class="phpdarkcoding">
    <section class="headeroption">
        <h2>PHP Login System</h2>
    </section>

    <div class="phpdarkcoding">
        <h1 class="success">Realtime Search</h1>
        <h3 class="success">From Here Seach Your Query</h3>
        <hr/>
        <div class="contentoption">
            <form action="" method="GET">
                <input type="hidden" name="first_form" value="First User">
                <input type="submit" value="First User">
            </form> <br/>
             <form action="" method="GET">
                <input type="hidden" name="second_form" value="Second User">
                <input type="submit" value="Second User">
            </form>
            
        </div>

        <?php if(isset($_GET['first_form'])): ?>
            <?php include "first_form.php" ?>   
        <?php endif; ?>

        <?php if(isset($_GET['second_form'])): ?>
            <?php include "second_form.php" ?>  
        <?php endif; ?>

        

    </div>
    <?php include 'footer.php'; ?>