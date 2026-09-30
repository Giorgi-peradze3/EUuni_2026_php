<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecture_2</title>
</head>
<body>

    <p>
        <a href="?user=bondo&age=24">User data</a>
    </p>
    <p>
        <a href="?user=bondo&age=24">User data</a>
    </p>

    <?php
       
        
        
            if(isset($_GET['user'], $_GET['user'])){
                $X = $_GET['user'];
                $Y = $_GET['age'];
                echo  $X . " " . "is student" . " " . "hes" . " " . $Y;
            }
        
        
        
        
    ?>
    
</body>
</html>