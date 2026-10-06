<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework_1</title>
</head>
<body>

    <p>
        <a href="homework1.php">home page</a>
    </p>

    <h2>სტუდენტების მონაცემების შეყვანა</h2>

    <form method="POST"> 
        <h3>სტუდენტი 1:</h3>
        <input type="text" name="names[]"> - სახელი
        <input type="number" name="grades[]" min="0" max="100"> - ქულა
        <br><br>

        <h3>სტუდენტი 2:</h3>
        <input type="text" name="names[]"> - სახელი
        <input type="number" name="grades[]" min="0" max="100"> - ქულა
        <br><br>

        <h3>სტუდენტი 3:</h3>
        <input type="text" name="names[]"> - სახელი
        <input type="number" name="grades[]" min="0" max="100"> - ქულა
        <br><br>

        <h3>სტუდენტი 4:</h3>
        <input type="text" name="names[]"> - სახელი
        <input type="number" name="grades[]" min="0" max="100"> - ქულა
        <br><br>

        <h3>სტუდენტი 5:</h3>
        <input type="text" name="names[]"> - სახელი
        <input type="number" name="grades[]" min="0" max="100"> - ქულა
        <br><br>

        <button>Send data</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['names'], $_POST['grades'])) {

        $names = $_POST['names'];
        $grades = $_POST['grades'];

        
        $students = [];
        for ($i = 0; $i < 5; $i++) {
            $students[] = [
                'name' => $names[$i],
                'grade' => $grades[$i]
            ];
        }

        
        for ($i = 0; $i < count($students); $i++) {
            for ($j = $i + 1; $j < count($students); $j++) {
                if ($students[$i]['grade'] < $students[$j]['grade']) {
                    $temp = $students[$i];
                    $students[$i] = $students[$j];
                    $students[$j] = $temp;
                }
            }
        }

       
        $sum = 0;
        $passed_count = 0;
        $max_grade = $students[0]['grade'];
        $min_grade = $students[0]['grade'];

        foreach ($students as $st) {
            $sum = $sum + $st['grade'];

            if ($st['grade'] >= 51) {
                $passed_count++;
            }

            if ($st['grade'] > $max_grade) {
                $max_grade = $st['grade'];
            }

            if ($st['grade'] < $min_grade) {
                $min_grade = $st['grade'];
            }
        }

        $avg_grade = $sum / 5;

        
        echo "<h2>სტუდენტების სია (დალაგებული ქულის მიხედვით)</h2>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                <tr style='background-color: #ddd;'>
                    <th>სახელი</th>
                    <th>ქულა</th>
                    <th>შეფასება</th>
                </tr>";

        foreach ($students as $st) {
            $g = $st['grade'];
            $letter = '';

            if ($g >= 91) {
                $letter = 'A (ფრიადი)';
            } elseif ($g >= 81) {
                $letter = 'B (ძალიან კარგი)';
            } elseif ($g >= 71) {
                $letter = 'C (კარგი)';
            } elseif ($g >= 61) {
                $letter = 'D (დამაკმაყოფილებელი)';
            } elseif ($g >= 51) {
                $letter = 'E (საკმარისი)';
            } elseif ($g >= 41) {
                $letter = 'FX (ვერ ჩააბარა)';
            } else {
                $letter = 'F (ჩაიჭრა)';
            }

            echo "<tr>
                    <td>{$st['name']}</td>
                    <td>{$st['grade']}</td>
                    <td>$letter</td>
                  </tr>";
        }
        echo "</table>";

        
        echo "<h3>სტატისტიკა:</h3>";
        echo "<p><b>საშუალო ქულა:</b> $avg_grade</p>";
        echo "<p><b>უმაღლესი ქულა:</b> $max_grade</p>";
        echo "<p><b>უმდაბლესი ქულა:</b> $min_grade</p>";
        echo "<p><b>სტუდენტები 51+ ქულით:</b> $passed_count</p>";
    }
    ?>

</body>
</html>