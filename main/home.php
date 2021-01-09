<!DOCTYPE html>
<html>
<head>
<?php
include('../session.php');
if(!isset($_SESSION['login_user'])){
header("location: ../index.php"); // Redirecting To Home Page
}
echo '<link rel="stylesheet" type="text/css" href="maincss'.$login_color.'.css">';
if (isset($_POST['go']))
{
	header('Location: home.php?'.$_POST['Category']);
}
?>


<title>3AM</title>
</head>
<body>

<div id="" class="posting">

<h1>Home</h1>
</div>




<div class="SideBar">
  <a href="home.php" class="icon" id="helpButton">Home</a><br/>
  <a href="profile/profile.php" class="icon">Profile</a><br/>
  <a href="posting/posting.php" class="icon">Post Listings</a><br/>
  <a href="settings/help.php" class="icon"">FAQ</a><br/>
  <a href="settings/settings.php" class="icon">Settings</a><br/>
  <a id="logout" href="../logout.php" class="icon">Log Out</a>

</div>



<div style=" background-color: #f5eace; width: 30%; height: 95%; float: right; border="2px">
<a href="#" style="font-family: Bodoni MT;">ALABAMA</a>
<a href="#" style="font-family: Bodoni MT;">ALASKA</a>
<a href="#" style="font-family: Bodoni MT;">ARIZONA</a>
<a href="#" style="font-family: Bodoni MT;">ARKANSAS</a>
<a href="#" style="font-family: Bodoni MT;">CALIFORNIA</a>
<a href="#" style="font-family: Bodoni MT;">COLORADO</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">CONNECTICUT</a>
<a href="#" style="font-family: Bodoni MT;">DELAWARE</a>
<a href="#" style="font-family: Bodoni MT;">FLORIDA</a>
<a href="#" style="font-family: Bodoni MT;">GEORGIA</a>
<a href="#" style="font-family: Bodoni MT;">HAWAII</a>
<a href="#" style="font-family: Bodoni MT;">IDAHO</a>
<a href="#" style="font-family: Bodoni MT;">ILLINOIS</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">INDIANA</a>
<a href="#" style="font-family: Bodoni MT;">IOWA</a>
<a href="#" style="font-family: Bodoni MT;">KANSAS</a>
<a href="#" style="font-family: Bodoni MT;">KENTUCKY</a>
<a href="#" style="font-family: Bodoni MT;">LOUISIANA</a>
<a href="#" style="font-family: Bodoni MT;">MAINE</a>
<a href="#" style="font-family: Bodoni MT;">MARYLAND</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">MASSACHUSETTS</a>
<a href="#" style="font-family: Bodoni MT;">MICHIGAN</a>
<a href="#" style="font-family: Bodoni MT;">MINNESOTA</a>
<a href="#" style="font-family: Bodoni MT;">MISSISSIPPI</a>
<a href="#" style="font-family: Bodoni MT;">MISSOURI</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">MONTANA</a>
<a href="#" style="font-family: Bodoni MT;">NEBRASKA</a>
<a href="#" style="font-family: Bodoni MT;">NEVADA</a>
<a href="#" style="font-family: Bodoni MT;">NEW HAMPSHIRE</a>
<a href="#" style="font-family: Bodoni MT;">NEW JERSEY</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">NEW MEXICO</a>
<a href="#" style="font-family: Bodoni MT;">NEW YORK</a>
<a href="#" style="font-family: Bodoni MT;">NORTH CAROLINA</a>
<a href="#" style="font-family: Bodoni MT;">NORTH DAKOTA</a>
<a href="#" style="font-family: Bodoni MT;">OHIO</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">OKLAHOMA</a>
<a href="#" style="font-family: Bodoni MT;">OREGON</a>
<a href="#" style="font-family: Bodoni MT;">PENNSYLVANIA</a>
<a href="#" style="font-family: Bodoni MT;">RHODE ISLAND</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">SOUTH CAROLINA</a>
<a href="#" style="font-family: Bodoni MT;">SOUTH DAKOTA</a>
<a href="#" style="font-family: Bodoni MT;">TENNESSEE</a>
<a href="#" style="font-family: Bodoni MT;">TEXAS</a>
<a href="#" style="font-family: Bodoni MT;">UTAH</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">VERMONT</a>
<a href="#" style="font-family: Bodoni MT;">VIRGINIA</a>
<a href="#" style="font-family: Bodoni MT;">WASHINGTON</a>
<a href="#" style="font-family: Bodoni MT;">WEST VIRGINIA</a>
<a href="#" style="font-family: Bodoni MT;">WISCONSIN</a><br/><br/>
<a href="#" style="font-family: Bodoni MT;">WYOMING</a>
<a href="#" style="font-family: Bodoni MT;">AFRICA</a>
<a href="#" style="font-family: Bodoni MT;">ASIA</a>
<a href="#" style="font-family: Bodoni MT;">EUROPE</a>
<a href="#" style="font-family: Bodoni MT;">AUSTRALIA</a><br/><br/>
<img src="world.jpg" width="100%" height="30%">


</div>

<div class="listings">
<form action="" method="POST">


<div style="width: 276px; height: 40px;  display: inline-block;">
	<h2 style="font-size:20px">LISTINGS</h2>
</div>

<div style="width: 345px; height: 45px;  display: inline-block;">


<u style="font-size:20px">Category:</u>


	<?php
	if(isset($_GET['-1']))
	{
		$cate = -1;
	}
	else if(isset($_GET['1']))
	{
		$cate = 1;
	}
	else if(isset($_GET['2']))
	{
		$cate = 2;
	}
	else if(isset($_GET['3']))
	{
		$cate = 3;
	}else if(isset($_GET['4']))
	{
		$cate = 4;
	}else if(isset($_GET['5']))
	{
		$cate = 5;
	}else if(isset($_GET['6']))
	{
		$cate = 6;
	}else if(isset($_GET['7']))
	{
		$cate = 7;
	}else if(isset($_GET['8']))
	{
		$cate = 8;
	}else if(isset($_GET['9']))
	{
		$cate = 9;
	}else if(isset($_GET['10']))
	{
		$cate = 10;
	}else if(isset($_GET['11']))
	{
		$cate = 11;
	}else if(isset($_GET['12']))
	{
		$cate = 12;
	}
    else if(isset($_GET['13']))
	{
		$cate = 13;
	}

	$result = $conn->query("select CAT_id, CAT_name from CATEGORY");
    echo "<select style='height:45px; width:200px; float:center; font-size:16px'; name='Category'>";
	echo '<option value="0">All</option>';
    while ($row = $result->fetch_assoc()) {

        unset($id, $name);
        $id = $row['CAT_id'];
        $name = $row['CAT_name']; 
        
        if($cate != $id)
        {
        	echo '<option value="'.$id.'">'.$name.'</option>';
        }
        else{
        	echo '<option selected="selected" value="'.$id.'">'.$name.'</option>';
    	}

	}
	echo'</select>';
	?>

<input type="submit" name="go" value="Go" />
</div>


<hr/>
<?php
if(isset($cate)){
	$cate = ' AND CATEGORY.CAT_id = '.$cate;
}
else{
	$cate = '';
}

$sql = "SELECT LISTINGS.USR_username, LIST_id, LIST_price, LIST_title, LIST_info, LIST_hidden, CAT_name, LIST_id, USER.USR_phone, USER.USR_email FROM LISTINGS
INNER JOIN USER ON LISTINGS.USR_username = USER.USR_username
INNER JOIN CATEGORY ON CATEGORY.CAT_id = LISTINGS.CAT_id
WHERE LIST_hidden = 0".$cate."
ORDER BY LIST_id DESC";



if(!mysqli_query($conn,$sql))
{
	ECHO 'ERROR IN SQL COMMAND<br>';
	echo $sql;
}
else
{

$result = $conn->query($sql);

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
						<b>Username:</b> <p>'.$row['USR_username'].'</p>
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
					<td colspan="2">
						<b>Contact Information:</b> <p>'.$row['USR_email'];



				if($row['USR_phone']!="")
				{
					echo ' - '.$row['USR_phone'];
				}
				

				echo'
				</p>
					</td>
				</tr>
			</table>
			<hr/>
			';

		}















/*

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		echo "<br> - Username:". $row["USR_username"]."<br>Price: ". $row["LIST_price"]."<br>Title: ". $row["LIST_title"]."<br> Info: ". $row["LIST_info"]."<br>Phone: "
		. $row["USR_phone"]. "<br>Email: ". $row["USR_email"]. "<br>";
	}
}

else {
	echo "0 results";
}
*/

}
?>

</form>
<div>


</div>


</body>
</html>