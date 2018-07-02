<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First Link Page</title>
</head>
<body>
    <?php
        $my_Name = "Abdur Rehman Khalid";
        $current_Status = "Student";
        $university ="COMSATS University, Lahore Campus";
    ?>
    <a href="Link2.php?Name=<?php echo urlencode($my_Name); ?>&Status=<?php echo urlencode($current_Status); ?>
    &University=<?php echo urlencode($university); ?>">Click Here to Get My Information in Next Page</a>
</body>
</html>