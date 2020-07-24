<?php
  include "functions.php";
  if(isset($_POST['submit'])){
    updateUser();
  }
?>

<?php include "./includes/header.php"; ?>
  <body>
  <h1>Update User</h1>
  <div class="container">
  <div class="form-container">

    <form action="login_update.php" method="post">
        <label class="form-lbl" for="username">Username</label>
        <input class="form-input" type="text" name="username">

        <label class="form-lbl" for="password">Password</label>
        <input class="form-input"  type="password" name="password">

        <label class="form-lbl" for="id">Id</label>
        <select class="form-input" name="id" id="">
        <?php
         getUsers();
        ?>
        </select>
        <input class="btn" type="submit" name="submit" value="submit">
    </form>

  </div>

  </div>

  </body>


<?php include "./includes/footer.php"; ?>