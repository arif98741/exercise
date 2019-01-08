
<?php

$x = "Ariful Islam";
if ($x > 5) {
    if (filter_var(FILTER_VALIDATE_EMAIL)) {
        if (FILTER_VALIDATE_FLOAT) {
            echo "nothing";
        } else {
            echo "invalid float number";
        }
    } else {
        echo "Invalid Email";
    }
} else {
    echo "not done";
    //this is even not done yet for the first time ever
}
?>
