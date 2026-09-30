<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecture_2</title>
</head>
<body>

    <p>
        <a href="page_2.php">home page</a>
    </p>
    <form> 
        <input type="text" name="name"> - სახელი
        <br> <br>
        <input type="text" name="lastname"> - გვარი
        <br><br>
        <input type="text" name="position"> - დაკავებული თანამდებობა
        <br><br>
        <input type="text" name="salary"> - ხელფასი
        <br><br>
        <input type="text" name="procentage"> - პროცენტი
        <br><br>
        <button>Send data</button>
    </form>
    <hr>
    <?php
       
        if(isset($_GET['name'], $_GET['lastname'], $_GET['position'], $_GET['salary'])){
            $name = $_GET['name'];
            $lastname = $_GET['lastname'];
            $position = $_GET['position'];
            $salary = (float)$_GET['salary'];
            $procentage = (float)$_GET['procentage'];

            if($procentage === 0.0){
                $calc_salary = $salary / 5;
                echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                    <tr><th>სახელი</th><td>$name</td></tr>
                    <tr><th>გვარი</th><td>$lastname</td></tr>
                    <tr><th>თანამდებობა</th><td>$position</td></tr>
                    <tr><th>ხელფასი</th><td>$calc_salary</td></tr>
                  </table>";
            } else {
              
                $calc_salary = $salary / $procentage;
                echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                    <tr><th>სახელი</th><td>$name</td></tr>
                    <tr><th>გვარი</th><td>$lastname</td></tr>
                    <tr><th>თანამდებობა</th><td>$position</td></tr>
                    <tr><th>ხელფასი</th><td>$calc_salary</td></tr>
                    <tr><th>პროცენტი</th><td>$procentage</td></tr>
                  </table>";
            }
         }
        
    ?>
    
</body>
</html>