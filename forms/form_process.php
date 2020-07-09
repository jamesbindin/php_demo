<?php
 if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $names = ["edwin", "john", "james", "edna", "hope", "maria"];
    $max =10;
    $min = 3;
    if(strlen($username) < $min){
      echo "username needs to be above ".$min." characters."."<br>";
    }
    if(strlen($username) > $max){
      echo "username cant be above ".$max." characters."."<br>";
    }

    if(!in_array($username, $names)){
      echo "username does not exist"."<br>";
    }
    else{
      echo "welcome!"."<br>";
    }
 }
 ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>