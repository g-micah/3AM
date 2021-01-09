<!DOCTYPE html>
<html>
<head>
<?php
include('../../session.php');
include('postingScript.php');
if(!isset($_SESSION['login_user'])){
header("location: ../../index.php"); // Redirecting To Home Page
}
echo '<link rel="stylesheet" type="text/css" href="../maincss'.$login_color.'.css">';
?>
	<title>Posting Page</title>
</head>
<body>
<div id="PostingPageContainer">

	<!-- Side bar-->
	<div class="SideBar">
	  <a href="../home.php" class="icon">Home</a><br/>
	  <a href="../profile/profile.php" class="icon">Profile</a><br/>
	  <a href="../posting/posting.php" class="icon" id="helpButton">Post Listings</a><br/>
	  <a href="../settings/help.php" class="icon">FAQ</a><br/>
	  <a href="../settings/settings.php" class="icon">Settings</a><br/>
	  <a id="logout" href="../../logout.php" class="icon">Log Out</a>
	</div>

	<!--outside of LeftBorder-->

	<div id="" class="posting">
	<h1 id="">Posting page</h1>
	<h2 id="">Post a listings and get started</h2>
	<hr/>
	<form action="" method="POST">
	<table>
		<tr>
			<td id="">Job title:</td>
			<td><input type="text" maxlength="20" name="Title"></td>
		</tr>
		<tr>
		<td id="">Category</td>
		<td>
		<?php
			$result = $conn->query("select CAT_id, CAT_name from CATEGORY");
		    echo "<select name='Category'>";

		    while ($row = $result->fetch_assoc()) {

	            unset($id, $name);
	            $id = $row['CAT_id'];
	            $name = $row['CAT_name']; 
	            echo '<option value="'.$id.'">'.$name.'</option>';
			}
			
		?>
		</td>
		</tr>

		<tr>
			<td id="">Booking Price</td>
			<td><input type="number" step="0.01" maxlength="10" name="BookingPrice"></td>
		</tr>
		<tr>
			<td id="">Listing Information</td>
			<td><textarea rows="4" cols="50" id="listInfo" placeholder="What is it that you do?" name="ListInfo"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="post" value="Post Listing" /></td> 
			
		</tr>
	</table>
	</form>

	

	<br><span><?php
	// STATUS MESSAGES
	echo $error;
	if(isset($_GET['deletion']))
    {
        echo "Listing Deletion Succeessful";
    }
	else if(isset($_GET['Public']))
    {
        echo "Listing Visability Now Hidden";
    }
    else if(isset($_GET['Hidden']))
    {
        echo "Listing Visability Now Public";
    }
	?></span>
	</div>	
	<hr/>
	<div class="listings">
	<form action="" method="POST">

	<h1>Your Listings:</h1>
	<?php
	$query = "SELECT LIST_id, CAT_name, LIST_price, LIST_title, LIST_info, LIST_hidden from LISTINGS
		INNER JOIN CATEGORY ON CATEGORY.CAT_id = LISTINGS.CAT_id
        where USR_username = '$login_session';";

	$result = mysqli_query($conn, $query);
	//$row = mysqli_fetch_assoc($result);

	if ($result->num_rows > 0) {


	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			if($row['LIST_hidden']){
				$visability = "Hidden";
			}
			else {
				$visability = "Public";
			}
			echo '
			<table>
				<tr>
					<td>
						<b>Job Title:</b> <p>'.$row['LIST_title'].'</p>
					</td>
					<td>
						<b>Username:</b> <p>'.$login_session.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<b>Category:</b> <p>'.$row['CAT_name'].'</p>
					</td>
					<td>
						<b>Booking Price:</b> <p>$'.$row['LIST_price'].'</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>Listing Information:</b> <p>'.$row['LIST_info'].'</p>
					 </td>
				</tr>
				<tr>
					<td><b>Listing Visability:</b> <p>'.$visability.'</p></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="hide_btn" type="submit" name="hide'.$row['LIST_id'].'" value="Hide/Unhide Listing" />
						<input id="cancel_btn" type="submit" name="delete'.$row['LIST_id'].'" value="Delete Listing" />
				</tr>
			</table>
			<hr/>
			';
			if (isset($_POST['delete'.$row['LIST_id'].'']))
			{
				$deletequery = "DELETE FROM LISTINGS WHERE LIST_id = ".$row['LIST_id'];
			
				// Check if deletion successful
				if(!mysqli_query($conn,$deletequery))
				{
					echo "SQL DELETION ERROR IN CODE:<br>";
					echo $deletequery;
				}
				else
				{
					header('Location: posting.php?deletion');
				}
			}
			else if (isset($_POST['hide'.$row['LIST_id'].'']))
			{
				if($visability == "Hidden")
				{
					$hidequery = "UPDATE LISTINGS SET LIST_hidden = 0 WHERE LIST_id = ".$row['LIST_id']."";
				}
				else
				{
					$hidequery = "UPDATE LISTINGS SET LIST_hidden = 1 WHERE LIST_id = ".$row['LIST_id']."";
				}
				
				// Check if query successful
				if(!mysqli_query($conn,$hidequery))
				{
					echo "SQL DELETION ERROR IN CODE:<br>";
					echo $hidequery;
				}
				else
				{
					header('Location: posting.php?'.$visability);
				}
			}
	    }
	}
	?>
	</form>
</div> <!--end page shell-->
</body>
</html>

<?php
mysqli_close($conn); // Closing Connection
?>