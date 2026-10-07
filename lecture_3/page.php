<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <p>
        <a href="homework1.php">home page</a>
    </p>
    <h1>სტუდენტის ტესტირება</h1>

    <form action="page1.php" method="POST">

        <div class="question-block">
            <div class="question-title">1.  ღია გთხოვთ შეიყვანეთ კითხვა</div>
            <br><br>
            <input type="text" name="op[]" placeholder="გთხოვთ შეიყვანეთ კითხვა" required>
            <br><br>
            <?php 
                for($i = 0; $i < 4; $i++){

                
            ?>
            <input type="text" name="op[]" placeholder="გთხოვთ შეიყვანეთ სწორი პასუხი" required>
            
            
            <?php } ?>
        </div>
        <div class="question-title">2. ღია გთხოვთ შეიყვანეთ კითხვა</div>
            <br><br>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ კითხვა" required>
            <br><br>
            <?php 
                for($i = 0; $i < 4; $i++){

                
            ?>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ სწორი პასუხი" required>
            
            
            <?php } ?>
        </div>
        <div class="question-title">3. გთხოვთ შეიყვანეთ კითხვა</div>
            <br><br>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ კითხვა" required>
            <br><br>
            <?php 
                for($i = 0; $i < 4; $i++){

                
            ?>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ სწორი პასუხი" required>
            
            
            <?php } ?>
        </div>
        <div class="question-title">4. გთხოვთ შეიყვანეთ კითხვა</div>
            <br><br>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ კითხვა" required>
            <br><br>
            <?php 
                for($i = 0; $i < 4; $i++){

                
            ?>
            <input type="text" name="closed[]" placeholder="გთხოვთ შეიყვანეთ სწორი პასუხი" required>
            
            
            <?php } ?>
        </div>
        <br><br>
        <button>send data</button>

    </form>

    

    
    

<?php
if (isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q2_a_a'], $_POST['q2_a'], $_POST['q2_a'], $_POST['q2_a'], $_POST['q3_a_a'], $_POST['q3_a_a'], $_POST['q3_a_a'], $_POST['q3_a_a'], $_POST['q3_a_a'])) {
    
    $q1_1 = $_POST['q1_1'];
    $q2_2 = $_POST['q2_2'];
    $q3_3 = $_POST['q3_3'];
    $q4_4 = $_POST['q4_4'];
    $q5_5 = $_POST['q5_5'];
    
    $count = 0;
    $questions = 5;
    
    
    if ($q1_1 == $answers['q1_a']) {
        $count++;
    }
    if ($q2_2 == $answers['q2_2']) {
        $count++;
    } 
    if ($q3_3 == $answers['q3_3']) {
        $count++;
    } 
    if (mb_strtolower(trim($q4_4)) == $answers['q4_4']) {
        $count++;
    } 
    if (mb_strtolower(trim($q5_5)) == $answers['q5_5']) {
        $count++;
    } 

    echo "თქვენი ტესტი დასრულებულია, სწორი პასუხების რაოდენობაა: $count / $questions";
}
?>

</body>
</html>