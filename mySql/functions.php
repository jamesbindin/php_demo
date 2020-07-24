<?php include "db.php";

function createUser(){
  global $connection;
  if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("query failed" . mysqli_error());
    } else {
      echo "User Created";
    }

    if($username && $password){
    } else {
      echo "please enter username and password";
    }
  }
}

function getUsers(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die("query failed" . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
      print_r($row);
       
    }
}

  function updateUser(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result){
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<p>User Updated</p>";
    }
  }

function deleteUser(){
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM users "; 
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result){
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<p>User Deleted</p>";
    }
  }
?>
