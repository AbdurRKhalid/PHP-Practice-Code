<?php 

    $result = 0;
    for($incrementer = 1; $incrementer<=10; $incrementer++) {
        $result = 2 * $incrementer;
        echo "2 * {$incrementer} = {$result} <br>";
    }

    echo "<hr>";
    $result = 0;
    $multiplier = 1;
    while($multiplier <= 10) {
        $result = 3 * $multiplier;
        echo "3 * {$multiplier} = {$result} <br>";
        $multiplier++;
    }
?>