<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mid_term_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="block">
        <form action="" method="post">
                <input type="text" name="username" placeholder="მომხმარებელი"> 
                <br><br>
                <input type="password" name="password" placeholder="პაროლი"> 
                <br><br>
                <button type="submit">log in</button>
        </form>
    </div>
    <?php
    if (isset($_POST['username'], $_POST['password'])) {
        $inputUser = trim($_POST['username']);
        $inputPass = trim($_POST['password']);

        $isLoggedIn = false;

       
        if(file_exists('users.txt')){
            $lines = file('users.txt');

            foreach($lines as $line){
                $data = explode(',', $line);
                
                
                if(trim($data[0]) === $inputUser && trim($data[1]) === $inputPass){
                    $isLoggedIn = TRUE;
                    break;
                }
            }
        }


        if ($isLoggedIn === TRUE) {
            echo "<p style='color: green;'>მოგესალმებით, " . htmlspecialchars($inputUser) . "!</p>";
        } else {
            echo "<p style='color: red;'>მომხმარებელი ან პაროლი არასწორია.</p>";
        }
        
        
    }
    ?>
</body>
</html>