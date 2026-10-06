<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework_2</title>
</head>
<body>

    <p>
        <a href="homework2.php">home page</a>
    </p>
    <form method="POST"> 
        <input type="text" name="number"> - შეიყვანეთ რიცხვი (1-20)
        <br><br>
        <button>Send data</button>
    </form>
    <hr>
    <?php
if (isset($_POST['number'])) {
    
    $number = trim($_POST['number']);

    
    if ($number == "" or !is_numeric($number) or $number < 1 or $number > 20) {
        echo "<h2 style='color: red;'>შეცდომა: შეიყვანეთ რიცხვი 1-დან 20-მდე!</h2>";
    } else {

        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                <tr style='background-color: #ddd;'>
                    <th>პირველი მამრავლი</th>
                    <th>მეორე მამრავლი</th>
                    <th>ნამრავლი</th>
                </tr>";

        
        for ($i = 1; $i <= 10; $i++) {
            $product = $number * $i;

            
            if ($product % 2 == 0) {
                echo "<tr style='background-color: #e6f7ff;'>
                        <td>$number</td>
                        <td>$i</td>
                        <td>$product</td>
                      </tr>";
            } else {
                echo "<tr>
                        <td>$number</td>
                        <td>$i</td>
                        <td>$product</td>
                      </tr>";
            }
        }

        echo "</table>";
    }
}
?>
    
</body>
</html>