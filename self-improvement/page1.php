<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page1.php">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>page 1
    </h1>

<form action="page2.php" method="POST">
        <?php 

            if (isset($_POST["closed"][1], $_POST["closed"][2], $_POST["closed"][3], $_POST["closed"][4])) {
                
                
                $indexes = [1, 2, 3, 4];
                
            
                shuffle($indexes);
            }
        ?>

        <div class="closed_main">
            <label>
                <?php 
                    if (isset($_POST["closed"][0])) {
                        echo $_POST["closed"][0];
                    }
                ?>
            </label>
            <br>
            <?php 
                for($i = 0; $i < 4; $i++){

                
            ?>
                <label><input type="text" name="open[]" placeholder="please enter answer"></label>
            <?php } ?>
            
        </div>






        
        <?php 

            if (isset($_POST["open"][1], $_POST["open"][2], $_POST["open"][3], $_POST["open"][4])) {
                
                
                $indexes = [1, 2, 3, 4];
                
            
                shuffle($indexes);
            }
        ?>

        <div class="open_main">
            <label>
                <?php 
                    if (isset($_POST["open"][0])) {
                        echo $_POST["open"][0];
                    }
                ?>
            </label>
            <br>
        
            <?php if (isset($indexes)) { ?>
                <label><input type="radio" name="choice" value="1"><?php echo $_POST["open"][$indexes[0]]; ?></label>
                <label><input type="radio" name="choice" value="2"><?php echo $_POST["open"][$indexes[1]]; ?></label>
                <label><input type="radio" name="choice" value="3"><?php echo $_POST["open"][$indexes[2]]; ?></label>
                <label><input type="radio" name="choice" value="4"><?php echo $_POST["open"][$indexes[3]]; ?></label>
            <?php } ?>
        </div>

        <button type="submit" id="first_button">submit answers</button>
</form>


</body>
</html>