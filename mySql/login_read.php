
<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
      echo "connected to database";
    } else {
      die("database connection failed");
    }

    $query = "SELECT * FROM users"; 

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("query failed" . mysqli_error());
    }
    
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head> <meta charset="utf-8">
  </head>
  <body>
  <div class="container">
  <?php 
    while($row = mysqli_fetch_assoc($result)){
  ?>
  <pre>
  <?php 
      print_r($row);
  ?>
  </pre>
  <?php 
    }
  ?>
    
  </div>

  </body>
  <style>

  .container{
    text-align:center;
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
