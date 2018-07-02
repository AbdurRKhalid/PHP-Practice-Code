<?php
    $my_birth_year = 1996;
    $my_birth_month = "July";
    $my_birth_day = 9;
    $my_birth_date = $my_birth_day. " " .$my_birth_month. " ".$my_birth_year;
    echo "My Birth Month is {$my_birth_month} and my birth Year is {$my_birth_year} and My Birth Day is {$my_birth_day}";

    define("current_year", 2018);

    $my_current_age = current_year - $my_birth_year;
    echo "<br>";
    echo "My age is {$my_current_age}";
?>