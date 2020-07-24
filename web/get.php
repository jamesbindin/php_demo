<?php 
    $var = $_GET;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            $id = 10; 
            $inner = "CLICK HERE"; 
        ?>
        <a href="get.php?id=<?php echo $id; ?>"><?php echo $inner; ?></a>
        <p><?php print_r($var); ?></p>
    </body>
</html>