<?php
include('signinScript.php');
if(isset($_SESSION['login_user'])){
header("location: main/home.php"); // Redirecting To Profile Page
}
if(empty($_SESSION['newuser'])){
  $_SESSION['newuser'] = false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<div class="topSection">
  <a href="index.php"><p class="logo">3AM</p></a>
  <hr>
  <div class="wlcome">
    <?php
    if ($_SESSION['newuser'])
    {
      echo 'New user created! Please login.';
      $_SESSION['newuser'] = false;
    }
    ?>
    <p>
      <h1>Sign in to 3AM</h1>
    </p>
    <div class="SignInBlock">
      <form action="" method="post">
        <div class="container">
      <label for="uname"><b>UserName</b></label>
      <input id="name" name="username" placeholder="username" type="text">


      <label for="psw"><b>Password</b></label>
      <input id="password" name="password" placeholder="**********" type="password"><br><br>
    </div>


    <input name="submit" type="submit" value="Login" id="homeSignin_btn">
    <a href="index.php" class="button" id="cancel_btn">Cancel</a>
    </form>
    <form action="" method="post">
      <input id="name" name="username" type="hidden" value="guest" hidden>
      <input id="password" name="password" type="hidden" value="GuestPass123" hidden>
      <input name="submit" type="submit" value="Guest Login (demo)" id="guestSignin_btn">
    </form>

  </div>
    
  <br><br><span><?php echo $error; ?></span>
  </div>
</div>
</body>
</html>