<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Final Result</title>
</head>
<body>
    
<?php

function calculate_Percentage($marks1, $marks2, $marks3, $marks4) {
    $result = $marks1 + $marks2 + $marks3 + $marks4;
    $result = $result / 400;
    $result = $result * 100;
    return $result;
}
    
    $C_Marks = intval($_POST["CProgrammingMarks"]);
    $Java_Marks = intval($_POST["JavaProgrammingMarks"]);
    $PHP_Marks = intval($_POST["PHPProgrammingMarks"]);
    $Python_Marks = intval($_POST["PythonProgrammingMarks"]);
    

    if(isset($_POST['Calculate'])) {
        $final_result = calculate_Percentage($C_Marks, $Java_Marks, $PHP_Marks, $Python_Marks);
        echo "Your Obtained Percentage is the {$final_result}%.";
    }
?>


</body>
</html>


