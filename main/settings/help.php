<!DOCTYPE html>
<html>
<head>
<?php
include('../../session.php');
if(!isset($_SESSION['login_user'])){
header("location: ../../index.php"); // Redirecting To Home Page
}
echo '<link rel="stylesheet" type="text/css" href="../maincss'.$login_color.'.css">';
?>
	<title>Help Center</title>
</head>
<body>

<div class="SideBar">
  <a href="../home.php" class="icon">Home</a><br/>
  <a href="../profile/profile.php" class="icon">Profile</a><br/>
  <a href="../posting/posting.php" class="icon">Post Listings</a><br/>
  <a href="../settings/help.php" class="icon" id="helpButton">FAQ</a><br/>
  <a href="../settings/settings.php" class="icon">Settings</a><br/>
  <a id="logout" href="../../logout.php" class="icon">Log Out</a>
</div>

<div class="HelpPage">
<h2>Help and FAQ</h2>

<div class="FAQ">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis ipsum id dolor gravida, eu consectetur justo pretium. Nulla sapien risus, gravida et blandit ac, blandit at nulla. Sed sed mauris pharetra, tincidunt urna a, finibus est. Morbi vestibulum ac dolor eu auctor. Ut id magna consequat, mollis nulla ut, ultricies odio. In mollis id nisl non maximus. Suspendisse ut convallis erat. Nullam viverra urna non arcu elementum, non tempor turpis eleifend. Nunc finibus ornare laoreet. Aenean nec finibus sem. Nam ornare justo aliquet lacus convallis porta. Duis vel nisl nunc.

Nunc quis quam iaculis, fermentum est et, sollicitudin ipsum. Nullam nisi lectus, eleifend non massa sed, sollicitudin convallis justo. Suspendisse tincidunt felis felis, nec imperdiet urna rhoncus sed. Ut vel condimentum elit. Aenean sed neque tincidunt, commodo mauris quis, vehicula orci. Vivamus et nulla sed nisl congue fringilla. Nulla facilisi.

Suspendisse eget leo id lectus egestas vestibulum at eget dui. Vivamus vel mauris varius, euismod diam porttitor, consectetur augue. Nulla commodo mollis eros, a lacinia turpis hendrerit et. Integer convallis eros sed dolor cursus, id sollicitudin diam luctus. Cras tincidunt nisl eu sodales faucibus. Donec pharetra libero non ipsum dignissim, in porta metus aliquet. Nulla facilisi. Donec vel fringilla velit, id mattis neque. Nam vel mollis nisi, ultrices pulvinar est.</p>


</div>

<button onclick="contactButton()">Contact Us</button>
<div class="ContactUs" id="email" style="display: none;">
  <form action="">

    <label for="FullName">Name</label>
    <input type="text" id="FullName" name="fullname" placeholder="Your name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submittemp" value="Submit">

  </form>
</div>

<script>
function contactButton() {
  var hide = document.getElementById("email");
  if (hide.style.display === "none") {
    hide.style.display = "block";
  } else {
    hide.style.display = "none";
  }
}
</script>


</div>
</body>
</html>