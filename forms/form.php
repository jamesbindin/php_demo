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
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="form-container">
      <form action="form.php" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input class="btn" type="submit" value="submit" name="submit">
      </form>
    </div>
  </body>
  <style media="screen">
    input{
      display:block;
      padding:10px;
      margin-bottom:10px;
      box-shadow: 10px 10px 5px grey;
    }
    .form-container{
      text-align:center;
      }
    form{
    display:inline-block;
    padding:10%;
    }

    .btn{
      width:100%;
      margin-top:10px;
      border: none;
      border-radius: 10px;
      background:green;
      color:white;
      box-shadow: 10px 10px 5px grey;
      padding:10px;
    }
      </style>
</html>
