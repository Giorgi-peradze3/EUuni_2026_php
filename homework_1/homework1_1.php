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
    <form method="POST"> 
        <input type="text" name="name"> - სახელი
        <br> <br>
        <input type="text" name="lastname"> - გვარი
        <br><br>
        <input type="text" name="height"> - სიმაღლე
        <br><br>
        <input type="text" name="weight"> - წონა
        <br><br>
        <button>Send data</button>
    </form>
    <hr>
    <?php
if (isset($_POST['name'], $_POST['lastname'], $_POST['height'], $_POST['weight'])) {
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $height_cm = $_POST['height'];
    $weight = $_POST['weight'];
    $height_m = $height_cm / 100; 
    $BMI = $weight / ($height_m * $height_m);
    
    
    if ($BMI <= 18.5) {
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სიმაღლე</th><td>$height_cm</td></tr>

                    <tr><th>წონა</th><td>$weight</td></tr>

                    <tr><th>საშუალო კანქვეშა ქონის სისქე</th><td>$BMI</td></tr>
                    

                   
                  </table>
                  <br>
                  <h1>წონის დეფიციტი</h1>";
    } elseif ($BMI <= 24.9 && $BMI >= 18.5) {
       echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სიმაღლე</th><td>$height_cm</td></tr>

                    <tr><th>წონა</th><td>$weight</td></tr>

                    <tr><th>საშუალო კანქვეშა ქონის სისქე</th><td>$BMI</td></tr>
                    

                   
                  </table>
                  <br>
                  <h1>ნორმალური წონა</h1>";
    } elseif ($BMI >= 25 && $BMI <= 29.9) {
         echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სიმაღლე</th><td>$height_cm</td></tr>

                    <tr><th>წონა</th><td>$weight</td></tr>

                    <tr><th>საშუალო კანქვეშა ქონის სისქე</th><td>$BMI</td></tr>
                    

                   
                  </table>
                  <br>
                  <h1>ჭარბი წონა</h1>";
    } elseif ($BMI >= 30) {
         echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სიმაღლე</th><td>$height_cm</td></tr>

                    <tr><th>წონა</th><td>$weight</td></tr>

                    <tr><th>საშუალო კანქვეშა ქონის სისქე</th><td>$BMI</td></tr>
                    

                   
                  </table>
                  <br>
                  <h1>სიმსუქნე</h1>";
    } 
}
?>
    
</body>
</html>
    
</body>
</html>