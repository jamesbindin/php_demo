<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

    $numberList = [1, 2, 3, 4, 5];
    $numberList2 = array(1, 2, 3, 4, 5, "<h1>hello</h1>");
    echo $numberList[0];
    echo "<br>";
    echo $numberList[4];
    echo "<br>";
    print_r($numberList);
    echo "<br>";
    print_r($numberList2);

   ?>
  </body>
</html>
