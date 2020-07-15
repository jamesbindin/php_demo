
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

    $query = "INSERT INTO users(username,password) "; 
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("query failed" . mysqli_error());
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
  <head> <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="form-container">
    <form action="login_create.php" method="post">
        <label class="form-lbl" for="username">Username</label>
        <input class="form-input" type="text" name="username">

        <label class="form-lbl" for="password">Password</label>
        <input class="form-input"  type="password" name="password">

        <input class="btn" type="submit" name="submit" value="submit">
    </form>

  </div>

  </body>
  <style>

  .form-container{
    text-align:center;
  }
  form{
    display:inline-block;
    text-align:left;
  }
  .form-lbl, .form-input{
    display:block;
  }
  .form-input{
    margin-bottom:1rem;
    padding:0.5rem;
  }

  .btn{
    background-color:#4C9A2Aff;
    margin-top:0.5rem;
    padding:0.5rem;
    color:white;
    width:100%;
    border:none;
    border-radius:5px;
    box-shadow: 0px 5px 3px #ddd;
    outline: none;

  }
  .btn:hover{
    background:#4C9A2A55;
  }
  .btn:active{
    background:#4C9A2A55;
    box-shadow: 0px 3px 3px #ddd;
    transform: translateY(5px);
  }
</style>
</html>
