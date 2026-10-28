


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div_1">
        <a href="#"><h1>folders and files</h1></a>
        <?php

            $folders = "folders/";
            $f = scandir($folders);
            $files = "files/";
            $fl = scandir($files);
            
        
                for ($x = 2; $x < sizeof($fl); $x++) {
                    echo "<table  class=table' border='1' cellpadding='5' style='border-collapse: collapse;'>
                    <tr><th>$x</th><td>$fl[$x]</td></tr>
                    </table>";
                }

                if(is_dir($fl)){
                    
                }

                

                for ($x = 2; $x < sizeof($f); $x++) {
                    echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                    <tr><th>$x</th><td>$f[$x]</td></tr>
                    </table>";
                }


           

            
        ?>
    </div>


    <div class="div_1">
        
        <div>
            <form action="" method="post">
                <input type="text" name="folderi"> - create a folder
                <hr><hr>
                <button>create a folder</button>
            </form>
        </div>
        <br> <br>
        <div>
            <form action="" method="post">
                <input type="text" name="file"> - create a file
                <hr><hr>
                <button>create a file</button>
            </form>
        </div>
    </div>

    <?php

    if(isset($_POST["folderi"])){
        $fold = $_POST["folderi"];
        mkdir("folders/".$fold);
    }

    if(isset($_POST["file"])){
        $file = $_POST["file"];
        fopen("files/".$file. ".txt", "w");
    }
    
    
    
    
    ?>
    
    
    
</body>
</html>