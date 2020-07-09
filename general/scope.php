<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $x = "global";

      function convert(){
        global $x;
        $x = "local";
      }
      echo $x . "<br>";
      convert();
      echo $x;
     ?>
  </body>
</html>
