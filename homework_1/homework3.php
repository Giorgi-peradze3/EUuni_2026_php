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
        
        <!-- დაემატა value ატრიბუტები -->
        <div class="question-block">
            <div class="question-title">1. რომელი გლობალური მასივი გამოიყენება PHP-ში ფორმიდან მონაცემების ფარულად მისაღებად?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q1" value="GET" required> $_GET</label>
                <label><input type="radio" name="q1" value="POST"> $_POST</label>
                <label><input type="radio" name="q1" value="REQUEST"> $_REQUEST</label>
                <label><input type="radio" name="q1" value="SESSION"> $_SESSION</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">2. რას ნიშნავს აბრევიატურა HTML?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q2" value="HyperText Markup Language" required> HyperText Markup Language</label>
                <label><input type="radio" name="q2" value="HighText Machine Language"> HighText Machine Language</label>
                <label><input type="radio" name="q2" value="HyperText Model Language"> HyperText Model Language</label>
                <label><input type="radio" name="q2" value="Home Tool Markup Language"> Home Tool Markup Language</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">3. რომელი სიმბოლოთი იწყება ცვლადების დასახელება PHP ენაში?</div>
            <br><br>
            <div class="options">
                <label><input type="radio" name="q3" value="&" required> &</label>
                <label><input type="radio" name="q3" value="#"> #</label>
                <label><input type="radio" name="q3" value="$"> $</label>
                <label><input type="radio" name="q3" value="@"> @</label>
            </div>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">4. (ღია) რა ჰქვია მონაცემთა ბაზების მართვის ენას, რომელიც გამოიყენება მოთხოვნების (Query) დასაწერად?</div>
            <br><br>
            <input type="text" name="q4" placeholder="ჩაწერეთ პასუხი..." required>
        </div>
        <br><br>

        <div class="question-block">
            <div class="question-title">5. (ღია) რომელი ფუნქცია გამოიყენება PHP-ში ცვლადის არსებობის/ინიციალიზების შესამოწმებლად?</div>
            <br><br>
            <input type="text" name="q5" placeholder="ჩაწერეთ პასუხი (მაგ: function_name)..." required>
        </div>
        <br><br>

        <button type="submit">ტესტის დასრულება</button>
    </form>
    <hr>

<?php
if (isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'])) {
    
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    
    $count = 0;
    $questions = 5;
    $answers = [
        'q1' => 'POST', 
        'q2' => 'HyperText Markup Language', 
        'q3' => '$', 
        'q4' => 'sql', 
        'q5' => 'isset'
    ];
    
    if ($q1 == $answers['q1']) {
        $count++;
    }
    if ($q2 == $answers['q2']) {
        $count++;
    } 
    if ($q3 == $answers['q3']) {
        $count++;
    } 
    if (mb_strtolower(trim($q4)) == $answers['q4']) {
        $count++;
    } 
    if (mb_strtolower(trim($q5)) == $answers['q5']) {
        $count++;
    } 

    echo "თქვენი ტესტი დასრულებულია, სწორი პასუხების რაოდენობაა: $count / $questions";
}
?>

</body>
</html>