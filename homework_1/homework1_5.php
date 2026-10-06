<?php

$q1 = $_POST['q1'] ?? '';
$q2 = $_POST['q2'] ?? '';
$q3 = $_POST['q3'] ?? '';
$q4 = $_POST['q4'] ?? '';
$q5 = $_POST['q5'] ?? '';
?>


<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework_1</title>
</head>
<body>

    <p>
        <a href="homework1.php">home page</a>
    </p>
    <h1>სტუდენტის ტესტირება</h1>

    <form action="" method="POST">
        
        <div class="question-block">
            <div class="question-title">1. რომელი გლობალური მასივი გამოიყენება PHP-ში ფორმიდან მონაცემების ფარულად მისაღებად?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q1" value="GET" required <?php if ($q1 == 'GET') echo 'checked'; ?>> $_GET</label>
                <label><input type="radio" name="q1" value="POST" <?php if ($q1 == 'POST') echo 'checked'; ?>> $_POST</label>
                <label><input type="radio" name="q1" value="REQUEST" <?php if ($q1 == 'REQUEST') echo 'checked'; ?>> $_REQUEST</label>
                <label><input type="radio" name="q1" value="SESSION" <?php if ($q1 == 'SESSION') echo 'checked'; ?>> $_SESSION</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">2. რას ნიშნავს აბრევიატურა HTML?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q2" value="HyperText Markup Language" required <?php if ($q2 == 'HyperText Markup Language') echo 'checked'; ?>> HyperText Markup Language</label>
                <label><input type="radio" name="q2" value="HighText Machine Language" <?php if ($q2 == 'HighText Machine Language') echo 'checked'; ?>> HighText Machine Language</label>
                <label><input type="radio" name="q2" value="HyperText Model Language" <?php if ($q2 == 'HyperText Model Language') echo 'checked'; ?>> HyperText Model Language</label>
                <label><input type="radio" name="q2" value="Home Tool Markup Language" <?php if ($q2 == 'Home Tool Markup Language') echo 'checked'; ?>> Home Tool Markup Language</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">3. რომელი სიმბოლოთი იწყება ცვლადების დასახელება PHP ენაში?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q3" value="&" required <?php if ($q3 == '&') echo 'checked'; ?>> &</label>
                <label><input type="radio" name="q3" value="#" <?php if ($q3 == '#') echo 'checked'; ?>> #</label>
                <label><input type="radio" name="q3" value="$" <?php if ($q3 == '$') echo 'checked'; ?>> $</label>
                <label><input type="radio" name="q3" value="@" <?php if ($q3 == '@') echo 'checked'; ?>> @</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">4. (ღია) რა ჰქვია მონაცემთა ბაზების მართვის ენას, რომელიც გამოიყენება მოთხოვნების (Query) დასაწერად?</div>
            <br><br>
            <input type="text" name="q4" placeholder="ჩაწერეთ პასუხი..." required value="<?php echo htmlspecialchars($q4); ?>">
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">5. (ღია) რომელი ფუნქცია გამოიყენება PHP-ში ცვლადის არსებობის/ინიციალიზების შესამოწმებლად?</div>
            <br><br>
            <input type="text" name="q5" placeholder="ჩაწერეთ პასუხი (მაგ: function_name)..." required value="<?php echo htmlspecialchars($q5); ?>">
        </div>
        <br><br>

        <button type="submit">ტესტის დასრულება</button>
    </form>
    <hr>

<?php
if (isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'])) {
    
    $count = 0;
    $questions = 5;
    $answers = [
        'q1' => 'POST', 
        'q2' => 'HyperText Markup Language', 
        'q3' => '$', 
        'q4' => 'sql', 
        'q5' => 'isset'
    ];
    $results = [];

    if ($q1 == $answers['q1']) {
        $count++;
        $status1 = "სწორია";
    } else {
        $status1 = "არასწორია";
    }
    $results[] = ['q' => 'შეკითხვა 1', 'user' => $q1, 'correct' => $answers['q1'], 'status' => $status1];

    if ($q2 == $answers['q2']) {
        $count++;
        $status2 = "სწორია";
    } else {
        $status2 = "არასწორია";
    }
    $results[] = ['q' => 'შეკითხვა 2', 'user' => $q2, 'correct' => $answers['q2'], 'status' => $status2];

    if ($q3 == $answers['q3']) {
        $count++;
        $status3 = "სწორია";
    } else {
        $status3 = "არასწორია";
    }
    $results[] = ['q' => 'შეკითხვა 3', 'user' => $q3, 'correct' => $answers['q3'], 'status' => $status3];

    if (mb_strtolower(trim($q4)) == $answers['q4']) {
        $count++;
        $status4 = "სწორია";
    } else {
        $status4 = "არასწორია";
    }
    $results[] = ['q' => 'შეკითხვა 4', 'user' => $q4, 'correct' => $answers['q4'], 'status' => $status4];

    if (mb_strtolower(trim($q5)) == $answers['q5']) {
        $count++;
        $status5 = "სწორია";
    } else {
        $status5 = "არასწორია";
    }
    $results[] = ['q' => 'შეკითხვა 5', 'user' => $q5, 'correct' => $answers['q5'], 'status' => $status5];

    $percentage = ($count / $questions) * 100;
?>

    <h2>ტესტის შედეგები</h2>

    <table border="1" cellpadding="8" style="border-collapse: collapse;">
        <tr style="background-color: #f2f2f2;">
            <th>შეკითხვა</th>
            <th>სტუდენტის პასუხი</th>
            <th>სწორი პასუხი</th>
            <th>შედეგი</th>
        </tr>

        <?php foreach ($results as $res): ?>
            <tr>
                <td><?php echo $res['q']; ?></td>
                <td><?php echo $res['user']; ?></td>
                <td><?php echo $res['correct']; ?></td>
                <td>
                    <?php if ($res['status'] == 'სწორია'): ?>
                        <span style="color: green; font-weight: bold;">სწორია</span>
                    <?php else: ?>
                        <span style="color: red; font-weight: bold;">არასწორია</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>
        სწორი პასუხების რაოდენობა: <?php echo "$count / $questions ($percentage%)"; ?>
    </h3>

<?php
}
?>

</body>
</html>