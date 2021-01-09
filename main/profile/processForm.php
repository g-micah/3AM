<?php
$msg = "";
$css_class = "";

if (isset($_POST['save-user'])) {

	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$profe = $_POST['Profession'];
	$cert = $_POST['certi'];
	$bio = $_POST['bio'];



	$sql = "UPDATE USER SET USR_email = \"$email\", USR_phone=\"$phone\", CAT_id = \"$profe\", USR_cert=\"$cert\", USR_Bio=\"$bio\"
		WHERE USR_username = \"$login_session\";";

	if (mysqli_query($conn, $sql)) {
		$msg1 = "Profile Successfully Updated";
		$css_class = "alert-success";	
		}else{
		$msg1 = "Profile SQL update error!".$sql;
		$css_class = "alert-danger";
		}






	echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";

	//$bio = $_POST['bio'];
	$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
	$UBio = $row['USR_username'];

	$target = 'images/' . $profileImageName;

	if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {

		$sql = "UPDATE USER SET USR_image = \"images/$profileImageName\" WHERE USR_username = \"$login_session\"";

		if (mysqli_query($conn, $sql)) {
		$msg = "Image uploaded and saved to database<br>".$msg1;
		$css_class = "alert-success";	
		}else{
		$msg = "Image upload SQL update error!".$msg1;
		$css_class = "alert-danger";
		}

	}else {
		//$msg = "Failed to upload";
		$msg = $msg1;
		$css_class = "alert-success";
	}

} 