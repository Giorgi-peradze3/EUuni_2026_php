<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework_3</title>
</head>
<body>

    <p>
        <a href="homework3.php">home page</a>
    </p>

    <?php
    $products = [
        "ლეპტოპი" => 2000,
        "ტელეფონი" => 1200,
        "მონიტორი" => 500,
        "კლავიატურა" => 150,
        "მაუსი" => 80
    ];
    ?>

    <h2>ინვოისი</h2>

    <form method="POST"> 
        <h3>პროდუქტები:</h3>
        
        <?php foreach ($products as $name => $price): ?>
            <input type="number" name="quantities[<?php echo $name; ?>]" value="0" min="0"> - <?php echo $name; ?> (<?php echo $price; ?> ლარი)
            <br><br>
        <?php endforeach; ?>

        <h3>ფასდაკლება:</h3>
        <select name="discount">
            <option value="0">0%</option>
            <option value="5">5%</option>
            <option value="10">10%</option>
        </select>
        <br><br>

        <button>Send data</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['quantities'], $_POST['discount'])) {

        $quantities = $_POST['quantities'];
        $discount_percent = $_POST['discount'];

        $subtotal = 0;
        $has_items = false;

        foreach ($quantities as $qty) {
            if ($qty > 0) {
                $has_items = true;
            }
        }

        if ($has_items == false) {
            echo "<h2 style='color: red;'>შეცდომა: გთხოვთ აირჩიოთ მინიმუმ 1 პროდუქტი!</h2>";
        } else {

            echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>
                    <tr style='background-color: #ddd;'>
                        <th>დასახელება</th>
                        <th>ფასი</th>
                        <th>რაოდენობა</th>
                        <th>ჯამი</th>
                    </tr>";

            foreach ($products as $name => $price) {
                $qty = $quantities[$name];

                if ($qty > 0) {
                    $sum = $price * $qty;
                    $subtotal = $subtotal + $sum;

                    echo "<tr>
                            <td>$name</td>
                            <td>$price ₾</td>
                            <td>$qty</td>
                            <td>$sum ₾</td>
                          </tr>";
                }
            }

            $discount_val = ($subtotal * $discount_percent) / 100;
            $total_after_discount = $subtotal - $discount_val;
            $vat = $total_after_discount * 0.18;
            $final_total = $total_after_discount + $vat;

            echo "<tr>
                    <th colspan='3'>თანხა დღგ-ს გარეშე</th>
                    <td>$subtotal ₾</td>
                  </tr>
                  <tr>
                    <th colspan='3'>ფასდაკლება ($discount_percent%)</th>
                    <td>-$discount_val ₾</td>
                  </tr>
                  <tr>
                    <th colspan='3'>დღგ (18%)</th>
                    <td>$vat ₾</td>
                  </tr>
                  <tr>
                    <th colspan='3'>საბოლოო თანხა</th>
                    <td><b>$final_total ₾</b></td>
                  </tr>
                </table>";
        }
    }
    ?>

</body>
</html>