<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- task 4 -->
    <!-- <form action="" method = "POST">
        <h1>please input the text</h1>
        <input type="text" name = "task4">

        <input type="submit" value="submit text">

    </form> -->





    <?php
    
        // task 1
        // Write a PHP script to get the PHP version and configuration information. 

        // solution:
        // phpinfo()

        // task 2
        // Write a PHP script to display the following strings.

        //solution:
        // echo "tommorow gonna be perfect day"

        // task 3
        // $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.

        // solution:
        // $var = 'PHP Tutorial';
        // echo $var;

        // task 4
        // Create a simple HTML form and accept the user name and display the name through PHP echo statement.

        // solution:
        // if(isset($_POST["task4"])){
        //     $task4 = $_POST["task4"];
        //     echo $task4;
        // }


        // task 5
        // Write a PHP script to get the client IP address

        // solution:
        // if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //     $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        // }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        // }else {
        //     $ip_address = $_SERVER['REMOTE_ADDR'];
        //     echo $ip_address;
        // }

        



    
    ?>
    
</body>
</html>

