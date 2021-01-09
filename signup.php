<?php
include('signupScript.php');
if (isset($_SESSION['login_user'])) {
  header("location: main/home.php"); // Redirecting To Profile Page
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
    <a href="index.php">
      <p class="logo">3AM</p>
    </a>
    <hr>
    <div class="wlcome">
      <p>
      <h1>Sign up to 3AM</h1>
      </p>
      <div class="SignIupBlock">
        <form action="" method="post">
          <div class="container">
            <label for="email"><b>First name</b></label>
            <input id="fname" type="text" placeholder="Enter First name" name="Firstname">

            <label for="email"><b>Last name</b></label>
            <input id="lname" type="text" placeholder="Enter Last name" name="Lastname">

            <label for="email"><b>User name</b></label>
            <input id="user" type="text" placeholder="Enter User name" name="Username">

            <label for="psw"><b>Password</b></label>
            <input id="pass" type="password" placeholder="Enter Password" name="Password">

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="Email">
          </div>
      </div>
      <input id="homeSignUp_btn" type="submit" name="submit" value="Sign Up" />
      <a href="index.php" class="button" id="cancel_btn">Cancel</a>

      <br><br><span><?php echo $error; ?></span>

    </div>

    
    </form>
  </div>
</body>
</html>