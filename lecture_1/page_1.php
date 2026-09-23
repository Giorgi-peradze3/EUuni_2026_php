~<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecture_1</title>
</head>
<body>
   <?php
   
   echo "<hr><hr>";
   echo $_GET['parametri'];
   
   
   ?>
    <h1>lecture 1</h1>

    <?php

    echo "<h3>this is code from php</h3>";
        $x = 34;
        echo $x;
        $arl = [4,6, "hello"];
        echo "<ch>";
        print_r($arl);
        echo "<hr>";
        $ar2 = ['name'=>"giorgi", 'age'=>20, 'gpa'=>4]; // asociaciuri masivi
        print_r($ar2);
        echo "<hr>";
        $ar3 = ['name'=>"giorgi", 'age'=>20, 'gpa'=>4, 'info'=>["programming","web"]]; // asociaciuri masivi
        print_r($ar3)

    ?>
    
</body>
</html>