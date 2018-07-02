<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First Page</title>
</head>
<body>
    <h1 style="Text-Align:center">
        This is Going to Be the First Page of the Website
    </h1>
    <a href="Index.php?Page=About">About Me</a>
    <a href="Index.php?Page=Projects">Projects</a>
    <a href="Index.php?Page=Services">Services</a>
    <div id="Container">
        <?php
            if(!empty($_GET['Page'])){
                $Page_Name = $_GET['Page'];
                echo "The Page Name is {$Page_Name}";
                $Pages_Dierectory = "Website Pages";
                $scaned_Directory = scandir($Pages_Dierectory,0);
                unset($scaned_Directory[0], $scaned_Directory[1]);
                $Page_Name = $Page_Name.".inc.php";
                $First_Page = $scaned_Directory[2];
                $Second_Page = $scaned_Directory[3];
                $Third_Page = $scaned_Directory[4];
                echo "<br>";
                if($Page_Name == $First_Page){
                    include($Pages_Dierectory."/About.inc.php");
                }

                else if($Page_Name == $Second_Page){
                    include($Pages_Dierectory."/Projects.inc.php");
                }

                else if($Page_Name == $Third_Page){
                    include($Pages_Dierectory."/Services.inc.php");
                }
                else {
                    echo "Sorry! The Page Does Not Exists.";
                }

            }
        ?>
    </div>
</body>
</html>