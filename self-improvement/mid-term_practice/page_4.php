<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>mid_term_4</title>
</head>
<body>

  
    <a href="index.php">ყველა</a> | 
    <a href="index.php?category=electronics">ელექტრონიკა</a> | 
    <a href="index.php?category=clothes">ტანსაცმელი</a> |
    <a href="index.php?category=electronics&export=true">ექსპორტი ფაილში</a>
    <br><br>

    <?php
  
    $products = [
        ["name" => "ლეპტოპი", "category" => "electronics", "price" => 1500],
        ["name" => "მაუსი", "category" => "electronics", "price" => 50],
        ["name" => "ჯინსი", "category" => "clothes", "price" => 90],
        ["name" => "მაისური", "category" => "clothes", "price" => 30]
    ];

    
    $fileData = "";

    
    foreach ($products as $p) {
        
        
        if (isset($_GET['category'])) {
            
           
            if ($_GET['category'] != "") {
                
               
                if ($p['category'] != $_GET['category']) {
                    
                    continue;
                }
            }
        }

        
        echo "სახელი: " . $p['name'] . " | კატეგორია: " . $p['category'] . " | ფასი: " . $p['price'] . "<br>";

        
        if (isset($_GET['export'])) {
            if ($_GET['export'] == "true") {
                
                $fileData = $fileData . $p['name'] . " - " . $p['price'] . "\n";
            }
        }
    }

    
    if (isset($_GET['export'])) {
        if ($_GET['export'] == "true") {
            file_put_contents('filtered_products.txt', $fileData);
            echo "<br>მონაცემები ჩაიწერა ფაილში!";
        }
    }
    ?>

</body>
</html>