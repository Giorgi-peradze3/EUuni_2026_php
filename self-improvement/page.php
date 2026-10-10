<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="page1.php" method="post">
        <div class="closed_main">
            <label><input type="text" name="closed[]" placeholder="please input ur question">closed question num 1</label>
            <br>
            <?php 
                for($i = 0; $i < 3; $i++){

                
            ?>
                <label><input type="text" name="closed[]" placeholder="please enter wrong answer"></label>
            <?php } ?>

            <label ><input type="text" name="closed[]" placeholder="please enter right answer"></label>

        </div>  
        <div class="closed_main">
            <label><input type="text" name="open[]" placeholder="please input ur question">open question num 1</label>
            <br>
            <?php 
                for($i = 0; $i < 3; $i++){

                
            ?>
                <label><input type="text" name="open[]" placeholder="please enter wrong answer"></label>
            <?php } ?>
            <label ><input type="text" name="open[]" placeholder="please enter right answer"></label>
            
            
            
        </div>  

        <button type="submit" id="first_button">submit answers</button>
    </form>
    <?php
    
    if(isset($_POST["closed"], $_POST["open"]))
    
        
    
    
    ?>


</body>
</html>