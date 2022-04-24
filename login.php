<?php
$title = "C2S Login ByMikiii";
$icon = "./Images/monkaH.png";
require('./parts/header.php');

$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<form id="login-form" method="POST" action="./phpscripts/loginscript.php">
<h2 id="h2-login">Login</h2>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="username" class="form-control" name='username' required autocomplete="off">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name='password' required autocomplete="off">
    </div>
  </div>
  <p id="error-message" ><?php echo $error ?></p>
  <button type="submit" class="btn btn-dark" id="signinbutton">Sign in</button>
</form>

<?php
require('./parts/footer.php');
?>