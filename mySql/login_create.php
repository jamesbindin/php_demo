
<?php include "functions.php";
  createUser();
?>

<?php include "./includes/header.php"; ?>
  <body>
  <div class="heading-container">
    <h1>Create User</h1>
  </div>
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
<?php include "./includes/footer.php"; ?>