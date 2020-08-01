<?php
include("../connect.php"); 
include("../auth.php");

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

if(isset($_POST["changePass"])) {
	$newPassword = $_POST['newPassword'];
	$newPassword = sha1($newPassword);

	//Gets the id of the current session of the user
	  $id = $_SESSION["SESS_MEMBER_ID"];

	  //The update the new password set in the database
				$sqlPass = "UPDATE employees SET password = '$newPassword' WHERE id='$id' " or die (mysqli_error());

				$sqlChangePass = "UPDATE employees SET isChangePass = 1 WHERE id='$id' " or die (mysqli_error());

				mysqli_query($mysqli, $sqlPass);
				mysqli_query($mysqli, $sqlChangePass);
				header("location: index.php");

				exit(); 



}

?>
