
<?php include "functions.php";
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

<?php include "./includes/header.php"; ?>
  <body>
  <h1>Current Users</h1>
  <div class="centered-container">
    <pre>
      <?php getUsers(); ?>
    </pre>
  </div>
  </div>

  </body>
  
<?php include "./includes/footer.php"; ?>
