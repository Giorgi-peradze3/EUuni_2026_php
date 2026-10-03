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
        <input type="text" name="semester"> - სემესტრი
        <br><br>
        <input type="text" name="course"> - სასწავლო კურსი
        <br><br>
        <input type="text" name="grade"> - ნიშანი
        <br><br>
        <input type="text" name="lecturer_name"> - ლექტორის სახელი
        <br><br>
        <input type="text" name="lecturer_lastname"> - ლექტორის გვარი
        <br><br>
        <input type="text" name="dean_name"> - დეკანის სახელი
        <br><br>
        <input type="text" name="dean_lastname"> - დეკანის გვარი
        <br><br>
        <button>Send data</button>
    </form>
    <hr>
    <?php
if (isset($_POST['name'], $_POST['lastname'], $_POST['semester'], $_POST['course'], $_POST['grade'], $_POST['lecturer_name'], $_POST['lecturer_lastname'], $_POST['dean_name'], $_POST['dean_lastname'])) {
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];
    $grade = $_POST['grade'];
    $lecturer_name = $_POST['lecturer_name'];
    $lecturer_lastname = $_POST['lecturer_lastname'];
    $dean_name = $_POST['dean_name'];
    $dean_lastname = $_POST['dean_lastname'];
    $letter = ['A', 'B', 'C', 'D', 'E'];
    
    if ($grade > 100) {
        echo "ქულა სწორად შეიყვანეთ, ქულა არ უნდა აღემატებოდეს 100-ს!!!";
    } elseif ($grade >= 91) {
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სემესტრი</th><td>$semester</td></tr>

                    <tr><th>სასწავლო კურსი</th><td>$course</td></tr>

                    <tr><th>ნიშანი</th><td>$grade</td></tr>

                    <tr><th>ლექტორის სახელი</th><td>$lecturer_name</td></tr>

                    <tr><th>ლექტორის გვარი</th><td>$lecturer_lastname</td></tr>

                    <tr><th>დეკანის სახელი</th><td>$dean_name</td></tr>

                    <tr><th>დეკანის გვარი</th><td>$dean_lastname</td></tr>

                    <tr><th>ფრიადი ქულა</th><td>$letter[0]</td></tr>

                  </table>";
    } elseif ($grade >= 81) {
         echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სემესტრი</th><td>$semester</td></tr>

                    <tr><th>სასწავლო კურსი</th><td>$course</td></tr>

                    <tr><th>ნიშანი</th><td>$grade</td></tr>

                    <tr><th>ლექტორის სახელი</th><td>$lecturer_name</td></tr>

                    <tr><th>ლექტორის გვარი</th><td>$lecturer_lastname</td></tr>

                    <tr><th>დეკანის სახელი</th><td>$dean_name</td></tr>

                    <tr><th>დეკანის გვარი</th><td>$dean_lastname</td></tr>

                    <tr><th>ძალიან კარგი ქულა</th><td>$letter[1]</td></tr>

                  </table>";
    } elseif ($grade >= 71) {
         echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სემესტრი</th><td>$semester</td></tr>

                    <tr><th>სასწავლო კურსი</th><td>$course</td></tr>

                    <tr><th>ნიშანი</th><td>$grade</td></tr>

                    <tr><th>ლექტორის სახელი</th><td>$lecturer_name</td></tr>

                    <tr><th>ლექტორის გვარი</th><td>$lecturer_lastname</td></tr>

                    <tr><th>დეკანის სახელი</th><td>$dean_name</td></tr>

                    <tr><th>დეკანის გვარი</th><td>$dean_lastname</td></tr>

                    <tr><th>კარგი ქულა</th><td>$letter[2]</td></tr>

                  </table>";
    } elseif ($grade >= 61) {
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სემესტრი</th><td>$semester</td></tr>

                    <tr><th>სასწავლო კურსი</th><td>$course</td></tr>

                    <tr><th>ნიშანი</th><td>$grade</td></tr>

                    <tr><th>ლექტორის სახელი</th><td>$lecturer_name</td></tr>

                    <tr><th>ლექტორის გვარი</th><td>$lecturer_lastname</td></tr>

                    <tr><th>დეკანის სახელი</th><td>$dean_name</td></tr>

                    <tr><th>დეკანის გვარი</th><td>$dean_lastname</td></tr>

                    <tr><th>დამაკმაყოფილებელი ქულა</th><td>$letter[3]</td></tr>

                  </table>";
    } elseif ($grade >= 51) {
         echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>

                    <tr><th>სახელი</th><td>$name</td></tr>

                    <tr><th>გვარი</th><td>$lastname</td></tr>

                    <tr><th>სემესტრი</th><td>$semester</td></tr>

                    <tr><th>სასწავლო კურსი</th><td>$course</td></tr>

                    <tr><th>ნიშანი</th><td>$grade</td></tr>

                    <tr><th>ლექტორის სახელი</th><td>$lecturer_name</td></tr>

                    <tr><th>ლექტორის გვარი</th><td>$lecturer_lastname</td></tr>

                    <tr><th>დეკანის სახელი</th><td>$dean_name</td></tr>

                    <tr><th>დეკანის გვარი</th><td>$dean_lastname</td></tr>

                    <tr><th>საკმარისი ქულა</th><td>$letter[4]</td></tr>

                  </table>";
    } else {
        echo "თქვენ ჩაიჭერით, შემდეგში გაგიმართლებთ :(";
    }
}
?>
    
</body>
</html>
    
</body>
</html>