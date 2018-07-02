<?php
    require("Custom Functions.php");
?>

<?php
    $age = calculate_age(1996);
    $total_days = calculate_days($age);

    echo "The age in Years is {$age} and in Days is {$total_days}.";
?>