<?php

    $my_Name = "Abdur Rehman Khalid";
    $my_brother_name = "Abdul Haq";

    if($my_Name == "Abdur Rehman Khalid" && $my_brother_name == "Abdul Haq Khalid") {
        echo "Welcome to the Party {$my_Name} and {$my_brother_name} <br>";
    }
    else {
        echo "You are Not allowed to the Party men. <br>";
    }


    switch($my_brother_name) {
        case "Abdul Haq":
        echo "Only You are Allowed in the Party Mister.<br>";
        break;
        case "Abdul Haq Khalid":
        echo "You are the Real Man. <br>";
        break;
    }

?>