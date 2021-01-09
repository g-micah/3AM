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
<title>Ratings</title>
</head>

<body>

<div class="SideBar">
    <a href="../home.php" class="icon">Home</a><br/>
    <a href="../profile/profile.php" class="icon">Profile</a><br/>
	<a href="../posting/posting.php" class="icon">Post Listings</a><br/>
	<a href="../settings/help.php" class="icon">FAQ</a><br/>
	<a href="../settings/settings.php" class="icon">Settings</a><br/>
	<a id="logout" href="../../logout.php" class="icon">Log Out</a>
</div>

<div class="HistoryShell">
	<h1>HISTORY</h1>
	<hr>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec turpis volutpat, laoreet nibh sit amet, euismod libero. Nulla facilisi. In pharetra dictum cursus. Duis mattis non felis in sollicitudin. Mauris semper justo semper ornare fermentum. Praesent est nibh, lacinia sed augue at, rhoncus vulputate leo. Sed sit amet nisi venenatis, cursus ante sit amet, ornare lacus. Etiam blandit eros vitae nibh suscipit, nec vestibulum arcu consequat. Vivamus convallis vehicula enim, ut tempus arcu tempus sit amet. Vestibulum lobortis, felis non dictum pharetra, magna nibh bibendum augue, ac pellentesque dui purus eget diam. In tempor urna massa, a vulputate ligula laoreet eu. Nam aliquam ornare arcu, ac semper enim imperdiet vel. Nullam pretium magna et vehicula vulputate.</p>
</div>

<div class="RatingsShell">
<div class="Ratings-img">
    <img class="profileImg" src="E:\CapStoneProject\exe.jpg" alt=""/>
</div>
<table id="ReviewRate">	
		<tr id="column">
			<th>Profession</th>
			<th>Rating</th>
		</tr>
		<tr id="column">
			<td>Musician</td>
			<td>4/5</td>
		</tr>
    <tr>
    <td class="divider" colspan="2"><hr /></td>
    </tr>
		<tr id="column">
			<td>Comedian</td>
			<td>2/5</td>
		</tr>
    <tr>
    <td class="divider" colspan="2"><hr /></td>
    </tr>
		<tr id="column">
			<td>Astronomer</td>
			<td>4/5</td>
		</tr>
</table>
</br>
<table id="CustomerRate">	
		<tr id="column">
			<th>Profession</th>
			<th>Rating</th>
		</tr>
    <tr>
    <td class="divider" colspan="2"><hr /></td>
    </tr>
		<tr id="column">
			<td>Customer</td>
			<td>4/5</td>
		</tr>
</table>
</div>


</body>
<script type="javascript">
	
</script>
</html>