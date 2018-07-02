<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Information about me From URL</title>
</head>
<body>
    <?php
        $Name = $_GET['Name'];
        $Status = $_GET['Status'];
        $University=$_GET['University'];
        echo "The Name Extracted from the URL is Name:{$Name}. <br>";
        echo "The Status Extracted from the URL is Status:{$Status}.<br>";
        echo "The Name of Universit Extracted from the URL is University:{$University}.";
    ?>
</body>
</html>