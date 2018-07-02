<?php

    $roll_number_array = array(333, 331, 332, 334, 335, 339, 390);
    echo "My Current Roll Number is {$roll_number_array[0]}";
    echo "<hr>";
    $roll_assigned_roll_numbers = array("Abdur Rehman Khalid"=> 333, "Mudassir Ijaz"=> 331, "Muhammad Moazzam"=> 332);

    foreach($roll_assigned_roll_numbers as $name=>$roll_numbers) {
        echo "The Name of the Person is {$name} and has roll Number {$roll_numbers}. <br>";
    }

?>