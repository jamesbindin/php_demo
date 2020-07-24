
<?php 
  if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
      echo "connected to database";
    } else {
      die("database connection failed");
    }

    if($username && $password){
      echo $username . " " . $password;

    } else {
      echo "please enter username and password";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <div class="form-container">
    <form action="login.php" method="post">
        <label class="form-lbl" for="username">Username</label>
        <input class="form-input" type="text" name="username">

        <label class="form-lbl" for="password">Password</label>
        <input class="form-input"  type="password" name="password">

        <input class="btn" type="submit" name="submit" value="submit">
    </form>
  </div>
  
  </body>
</html>
