
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple Form</title>
</head>
<body>

    <form action="Validation.php" method="POST">
        <label>Enter your Name</label>
        <br>
        <input type="text" name="Name">*
        <br>
        <label>Enter your Email Address</label>
        <br>
        <input type="text" name="Email">*
        <br>
        <label>Enter your Website</label>
        <br>
        <input type="text" name="Website">*
        <br>
        <label>Select your Gender</label>
        <br>
        <input type="radio" name="Gender" value="Male"> Male
        <input type="radio" name="Gender" value="Female">Female *
        <br>
        <label>Comments
        <br>
        <textarea name="Comment"></textarea>
        <br>
        <input type="Submit" name="Submit" value="Submit">
    </form>

</body>
</html>