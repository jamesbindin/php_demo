
<?php
  include "functions.php";
  if(isset($_POST['submit'])){
    deleteUser();
  }
?>

<?php include "./includes/header.php"; ?>
  <body>
  <h1>Delete User</h1>
  <div class="container">
  <div class="form-container">
    <form action="login_delete.php" method="post">
        <label class="form-lbl" for="id">Id</label>
        <select class="form-input" name="id" id="">
        <?php
         getUsers();
        ?>
        </select>
        <input class="btn" type="submit" name="submit" value="DELETE">
    </form>
  </div>
  </div>
  </body>
<?php include "./includes/footer.php"; ?>