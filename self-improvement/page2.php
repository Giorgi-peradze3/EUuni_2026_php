<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>შედეგები</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_POST['user_choice'], $_POST['correct_answer'])) {
        $userChoice = $_POST['user_choice'];
        $correctAnswer = $_POST['correct_answer'];

        echo "<h3>ტესტი დასრულებულია!</h3>";
        echo "<p>თქვენი არჩევანი: " . htmlspecialchars($userChoice) . "</p>";

        if ($userChoice === $correctAnswer) {
            echo "<p style='color: green;'><strong>სწორია! ყოჩაღ!</strong></p>";
        } else {
            echo "<p style='color: red;'><strong>არასწორია. სწორი პასუხი იყო:</strong> " . htmlspecialchars($correctAnswer) . "</p>";
        }
    } else {
        echo "<p>პასუხები არ გადმოცემულა.</p>";
    }
    ?>
</body>
</html>