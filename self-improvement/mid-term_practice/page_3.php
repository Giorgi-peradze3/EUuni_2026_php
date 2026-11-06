<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mid_term_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <form action="" method="post">
        <input type="text" name="username" placeholder="enter name" required>
        <br><br>

        <?php
        if (!isset($_POST['submit'])) {
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            
            $num3 = rand(1, 10);
            $num4 = rand(1, 10);
            
            $num5 = rand(1, 10);
            $num6 = rand(1, 10);

            echo "$num1 + $num2 = ? <input type='number' name='ans1' required><br><br>";
            echo "$num3 + $num4 = ? <input type='number' name='ans2' required><br><br>";
            echo "$num5 + $num6 = ? <input type='number' name='ans3' required><br><br>";


            echo "<input type='hidden' name='correct1' value='" . ($num1 + $num2) . "'>";
            echo "<input type='hidden' name='correct2' value='" . ($num3 + $num4) . "'>";
            echo "<input type='hidden' name='correct3' value='" . ($num5 + $num6) . "'>";

            echo '<button type="submit" name="submit">submit</button>';

        } else {

            $username = $_POST['username'];
            $score = 0;

            
            if ($_POST['ans1'] == $_POST['correct1']) {
                $score++;
            }
            if ($_POST['ans2'] == $_POST['correct2']) {
                $score++;
            }
            if ($_POST['ans3'] == $_POST['correct3']) {
                $score++;
            }

            $date = date('Y-m-d H:i');
            
            
            $text = "$date | $username | $score/3";
            file_put_contents('results.txt', $text, FILE_APPEND);

            
            echo "<h3>user: $username</h3>";
            echo "<h3>grade: $score / 3</h3>";
        }
        ?>
    </form>

</body>
</html>