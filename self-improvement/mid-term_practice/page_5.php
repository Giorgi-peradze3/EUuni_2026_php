<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>mid_term_5</title>
</head>
<body>

    <h2>დღის ციტატა:</h2>

    <?php
   
    if (file_exists('quotes.txt')) {
        
    
        $quotes = file('quotes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    
        if (count($quotes) > 0) {
            
            $randomIndex = array_rand($quotes);
            
        
            echo "<p style='font-style: italic; font-size: 18px;'>„" . $quotes[$randomIndex] . "“</p>";
        } else {
            echo "<p>ფაილი ცარიელია.</p>";
        }
    } else {
        echo "<p>quotes.txt ფაილი ვერ მოიძებნა.</p>";
    }
    

    
    if (isset($_POST['submit'])) {
        $newQuote = trim($_POST['new_quote']);

        if ($newQuote != "") {
           
            file_put_contents('quotes.txt', $newQuote . "\n", FILE_APPEND);
            
            echo "<p style='color: green;'>ციტატა წარმატებით დაემატა!</p>";
        } else {
            echo "<p style='color: red;'>გთხოვთ შეიყვანოთ ციტატა.</p>";
        }
    }
    ?>

    <hr>

    <form action="" method="post">
        <input type="text" name="new_quote" placeholder="ახალი ციტატა" required>
        <button type="submit" name="submit">დამატება</button>
    </form>

</body>
</html>