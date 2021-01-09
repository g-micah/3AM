<!DOCTYPE html>
<html>
<head>

<?php
include('settingsScript.php');
include('../../session.php');
if(!isset($_SESSION['login_user'])){
header("location: ../../index.php"); // Redirecting To Home Page
}
echo '<link rel="stylesheet" type="text/css" href="../maincss'.$login_color.'.css">';
?>

<title>Settings</title>
</head>

<body>

<div class="SideBar">
  <a href="../home.php" class="icon">Home</a><br/>
  <a href="../profile/profile.php" class="icon">Profile</a><br/>
  <a href="../posting/posting.php" class="icon">Post Listings</a><br/>
  <a href="../settings/help.php" class="icon">FAQ</a><br/>
  <a href="../settings/settings.php" class="icon" id="settingButton">Settings</a><br/>
  <a id="logout" href="../../logout.php" class="icon">Log Out</a>
</div>

<div class="ProfileShell">
<h2>Settings</h2>
<hr>
	<div class="top">
		<button class="Theme" id="theBtn">Color Scheme</button>
		<button class="Lang" id="langBtn">Languages</button>
		<button class="Ava"><a href="">Availability</a></button>
	</div>
	<div class="bottom">
		<button class="Help"><a href="help.php">Help Center</a></button>
		<button class="Pro" id="myBtn">Pro Version</button>
		<button class="LogOut"><a id="logout" href="../../logout.php">Log Out</a></button>
	</div>
</div>
<!-- Pro Modal -->
<div id="ProModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="ProClose">&times;</span>
    <p>Feature coming soon...</p>
  </div>
</div>

<form action="" method="post">
<!-- Color Modal -->
<div id="ColModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="ColClose">&times;</span>
    <p>Choose a color setting</p>
    <input type="radio" name="color" value="1">Default</input><br>
    <input type="radio" name="color" value="2">Red</input><br>
    <input type="radio" name="color" value="3">Green</input><br>
    <input type="submit" name="submit" value="Submit" />
  </div>
</div>
</form>

<!-- Lang Modal -->
<div id="LangModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="LangClose">&times;</span>
    <p>Please select one of the following languages</p>
    <input type="radio" name="languages">English</input><br>
    <input type="radio" name="languages">Spanish</input><br>
  </div>
</div>


</body>
<script type="text/javascript">
// Get the modal
var modal1 = document.getElementById("ProModal");
var modal2 = document.getElementById("LangModal");
var modal3 = document.getElementById("ColModal");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");
var btn2 = document.getElementById("langBtn");
var btn3 = document.getElementById("theBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("ProClose")[0];
var span2 = document.getElementsByClassName("LangClose")[0];
var span3 = document.getElementsByClassName("ColClose")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}

</script>
</html>