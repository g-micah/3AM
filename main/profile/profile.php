<!DOCTYPE html>
<html>
<head>
<?php

include('../../session.php');
include('processForm.php');
if(!isset($_SESSION['login_user'])){
header("location: ../../index.php"); // Redirecting To Home Page
}
echo '<link rel="stylesheet" type="text/css" href="../maincss'.$login_color.'.css">';
?>
<title>My Profile</title>
<style type="text/css">
table, th, td {

}
td{
    padding-top: 5px;
    padding-left: 15px;
}
label{
    font-weight: bolder;
}
#space{
    padding-left: 160px;
}
</style>
</head>

<body>

<div class="SideBar">
    <a href="../home.php" class="icon">Home</a><br/>
    <a href="../profile/profile.php" class="icon" id="profileButton">Profile</a><br/>
	<a href="../posting/posting.php" class="icon">Post Listings</a><br/>
	<a href="../settings/help.php" class="icon">FAQ</a><br/>
	<a href="../settings/settings.php" class="icon">Settings</a><br/>
	<a id="logout" href="../../logout.php" class="icon">Log Out</a>
</div>

<?php
    $query = "SELECT USR_username, USR_fname, USR_lname, USR_email, USR_phone, USR_image, USR_cert, USER.CAT_id, CATEGORY.CAT_name, USR_Bio from USER
        INNER JOIN CATEGORY ON CATEGORY.CAT_id = USER.CAT_id
        where USR_username = '$user_check'";

    if(!mysqli_query($conn,$query))
    {
        ECHO 'ERROR IN SQL COMMAND<br>';
        echo $query;
    }
    else
    {
        $result = $conn->query($query);
        $row = mysqli_fetch_assoc($result);
    }
?>

<div class="ProfileShell">
<?php if(!empty($msg)): ?>
    <div class="alert <?php echo $css_class; ?>">
        <?php echo $msg; ?>
    </div>
<?php endif; ?>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <div class="profile-page-row">
            <div class="prof-col-md-4">
                <div class="profile-img">
                    <?php
                    echo "<img class=\"profileImg\"; style=\"height:200px;\" src=\"".$row['USR_image']."\" id=\"profileDisplay\" />";
                    ?>   
                    <div class="ProfileImg" id="ProfileTop">
                    </div>
                </div>
            </div>
            <div class="prof-col-md-6">
                <div class="profile-head" id="ProfileTop">
                    <h4><?php echo $row['USR_fname'].' '.$row['USR_lname'];?></h4>
                    <hr>
                </div>
            </div>
        </div>
        <div class="ProfileDetails">
            <table>
                <tr>
                <td><label>UserName:</label></td>
                <td><p><?php echo $row['USR_username'];?></p></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td><label>Email:</label></td>  
                <td>
                    <?php echo $row['USR_email'];?>
                </td>
                <div class="emailP" name="email"></div>                
                </td>
                <td><p><label id="space">Phone:</label></p></td>
                <td>
                <?php echo $row['USR_phone'];?>
                </td>
                </tr>
                <tr>
                <td><label>Profession:</label></td>
                <td>
                    <p><?php echo $row['CAT_name'];?></p>
                </td>
                <td><label id="space">Certifications:</label></td>
                <td>
                	<?php echo $row['USR_cert'];?>
                </td>
                </tr>
            </table>
            <table>
                <tr>
                <td><label>Additional Info:</label></td>
                </tr>
                <tr>
                <td>
                	<p><?php echo $row['USR_Bio'];?></p>
                </td>
                </tr>
            </table>
        </div>
    </form>


<button  id="myBtn">Edit Profile</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Edit Profile</h2>
  </div>
  <div class="modal-body">
<p>Edit the available fields or click outside to close</p>
        <form action="profile.php" method="post" enctype="multipart/form-data">
        <div class="modal-guts">
        <fieldset>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" required 
            value=<?php echo "\"".$row['USR_email']."\"";?>  
            class=="form-control">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required 
            value=<?php echo "\"".$row['USR_phone']."\"";?>  
            class="form-control">
        </div>
            <br>
        <div class="form-group">
            <?php
                echo "<img class=\"profileImg\" style=\"height:200px;\" src=\"".$row['USR_image']."\" id=\"profileDisplay\" /><br/>";
            ?>
            <label for="profileImage">Change Photo</label>
            <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" accept="image/*"/ class="form-control">
        </div>
            <br>
        <div class="form-group">
            <label>Profession</label>


            <?php
            $resultCAT = $conn->query("select CAT_id, CAT_name from CATEGORY");
            echo "<select id='Profession' name='Profession' class='form-control'>";
            echo '<option value="-1">None</option>';
            while ($rowCAT = $resultCAT->fetch_assoc()) {

                unset($id, $name);
                $id = $rowCAT['CAT_id'];
                $name = $rowCAT['CAT_name']; 
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            echo '</select>';
            ?>

            
        </div>
        <div class="form-group">
            <label>Certifications</label>
            <input type="text" name="certi" 
            value=<?php echo "\"".$row['USR_cert']."\"";?>  
            class="form-control">
        </div>
            <br>
        <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" name="bio" required 
            value=<?php echo "\"".$row['USR_Bio']."\"";?> 
            class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="save-user" class="btn btn-primary btn-block" value="submit">Submit Changes</button>
        </div>
        </fieldset>
        </div>
        </form>
      </div>
  </div>
  <div class="modal-footer">
    <h3></h3>
  </div>
</div>

</div>
<script type="text/javascript">
function triggerClick() {
    document.queerySelector('#profileImage').click();
}
function displayImage(e) {
    if(e.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            document.queerySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>        
</body>      
</html>
