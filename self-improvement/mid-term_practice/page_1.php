<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mid_term_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="block">
        <form action="" method="post">
                <input type="text" name="amount"> - გთხოვთ შეიყვანოთ რაოდენობა 
                <br>
                <input type="text" name="max"> - გთხოვთ შეიყვანოთ მაქსიმალური რიცხვი
                <button>send data</button>
        </form>
    </div>

    <?php
    
        if(isset($_POST['amount'], $_POST['max'])){

            $amount = $_POST['amount'];
            $max = $_POST['max'];

            if($amount > 0 && $max > 0){
                $numbers = [];
                for ($i = 0; $i < $amount; $i++){
                    $numbers[] = rand(1, $max);
                }


                $sum = array_sum($numbers);
                $average = $sum / $amount;

                $numbers = implode(',', $numbers);

                file_put_contents('log.txt', "რიცხვები: $numbers | საშუალო: $average", FILE_APPEND);

                echo "<p>რიცხვები: $numbers</p>";
                echo "<p>საშუალო: $average</p>";


            }



        }
    
    ?>
</body>
</html>