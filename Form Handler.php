<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Handler</title>
</head>
<body>
    <?php
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $submit = $_POST["Submit"];

        if(isset($_POST['Submit'])) {
            echo "The Email Address Entered is {$email}.<br>";
            echo "The Password Entered is {$password}.<br>";
        }
    ?>
</body>
</html>