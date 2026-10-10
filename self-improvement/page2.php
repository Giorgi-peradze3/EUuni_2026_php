<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answers</title>
</head>
<body>
    <?php
    
    if (isset($_POST['choice'])) {
        
        $userChoice = $_POST['choice']; 
        
        echo "<h3>თქვენი ტესტი დასრულებულია!</h3>";
        echo "<p>თქვენი არჩევანი (Value): " . htmlspecialchars($userChoice) . "</p>";

        
        if (isset($_POST['open'][4])) {
            echo "<p>მე-4 პასუხი იყო: " . htmlspecialchars($_POST['open'][4]) . "</p>";
        }
    } else {
        echo "<p>პასუხები არ გადმოცემულა.</p>";
    }
    ?>
</body>
</html>