<?php 
	session_start();
	include '../config.php';

	// DELETE MSG
	if(isset($_POST['delete_message'])) {

		$household_Id   = $_POST['household_Id'];
		$admin_reply_Id = $_POST['admin_reply_Id'];

		$delete = mysqli_query($conn, "DELETE FROM admin_reply WHERE admin_reply_Id='$admin_reply_Id'");
		if($delete) {
			$_SESSION['success']  = "Message has been deleted!";
	        header('Location: messages.php?household_Id='.$household_Id.'');   
		} else {
			$_SESSION['exists'] = "Something went wrong while deleting the message. Please try again.";
            header('Location: messages.php?household_Id='.$household_Id.'');   
		}
	}


?>