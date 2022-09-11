<?php 
	session_start();
	include '../config.php';

	// DELETE SOLO PARENT
	if(isset($_POST['delete'])) {
		$household_Id = $_POST['household_Id'];

		$delete = mysqli_query($conn, "DELETE FROM household_head WHERE household_Id='$household_Id'");
		if($delete) {
			$_SESSION['success']  = "Information has been deleted!";
	        header("Location: solo_parent.php");   
		} else {
			$_SESSION['exists'] = "Something went wrong while deleting the record. Please try again.";
            header("Location: solo_parent.php");  
		}
	}


	// DELETE SENIOR
	if(isset($_POST['delete_senior'])) {
		$household_Id = $_POST['household_Id'];

		$delete = mysqli_query($conn, "DELETE FROM household_head WHERE household_Id='$household_Id'");
		if($delete) {
			$_SESSION['success']  = "Information has been deleted!";
	        header("Location: senior_citizen.php");   
		} else {
			$_SESSION['exists'] = "Something went wrong while deleting the record. Please try again.";
            header("Location: senior_citizen.php");  
		}
	}



	// DELETE PWD
	if(isset($_POST['delete_pwd'])) {
		$household_Id = $_POST['household_Id'];

		$delete = mysqli_query($conn, "DELETE FROM household_head WHERE household_Id='$household_Id'");
		if($delete) {
			$_SESSION['success']  = "Information has been deleted!";
	        header("Location: pwd.php");   
		} else {
			$_SESSION['exists'] = "Something went wrong while deleting the record. Please try again.";
            header("Location: pwd.php");  
		}
	}



	// DELETE MSG
	if(isset($_POST['delete_message'])) {
		$message_Id = $_POST['message_Id'];

		$delete = mysqli_query($conn, "DELETE FROM message WHERE message_Id='$message_Id'");
		if($delete) {
			$_SESSION['success']  = "Message has been deleted!";
	        header("Location: messages.php");   
		} else {
			$_SESSION['exists'] = "Something went wrong while deleting the message. Please try again.";
            header("Location: messages.php");  
		}
	}



?>