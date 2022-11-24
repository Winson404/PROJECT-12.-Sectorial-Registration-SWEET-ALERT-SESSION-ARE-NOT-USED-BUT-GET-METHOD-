<?php 
	session_start();
	include 'config.php';

	// ADMIN / EMPLOYER LOGIN
	if(isset($_POST['login'])) {

		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password' AND user_type='Admin'");
		if(mysqli_num_rows($check)===1) {

			$row = mysqli_fetch_array($check);
			if($row['email'] === $email && $row['password'] === $password) {
				$_SESSION['admin_Id'] = $row['admin_Id'];
				header("Location: Admin/dashboard.php");
			} else {
				///$_SESSION['exists'] = "Password is incorrect. Try again!"; 
                // $script =  "<script> $(document).ready(function(){ $('#employerlogin').modal('show'); }); </script>";  
                //header("Location: index.php"); 
            	$_SESSION['message'] = "Password is Incorrect. Please Try Again!";
                $_SESSION['status'] = "error";
				header("Location: login2.php");
			}
			
		} else {
				
				$check2 = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email' AND password='$password' AND sectorial_registration='Solo Parent,'");
                if(mysqli_num_rows($check2)===1) {

					$row = mysqli_fetch_array($check2);
					if($row['email'] === $email && $row['password'] === $password) {
						// $_SESSION['household_Id'] = $row['household_Id'];
						$household_Id = $row['household_Id'];
						header('Location: Users/about_me2.php?household_Id='.$household_Id.'');

					} else {
		                // echo //<script>alert ("Password is incorrect. Please try again.");
		                		// window.history.go(-1);
		                	  // </script>';
		                $_SESSION['message'] = "Password is Incorrect. Please Try Again!";
		                $_SESSION['status'] = "error";
						header("Location: login2.php");
					}
					
				} else {

					$check2 = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email' AND password='$password' AND sectorial_registration='Senior Citizens,'");
	                if(mysqli_num_rows($check2)===1) {

						$row = mysqli_fetch_array($check2);
						if($row['email'] === $email && $row['password'] === $password) {
							// $_SESSION['household_Id'] = $row['household_Id'];
							$household_Id = $row['household_Id'];
							header('Location: Users/about_me3.php?household_Id='.$household_Id.'');

						} else {
			                // echo //<script>alert ("Password is incorrect. Please try again.");
			                		// window.history.go(-1);
			                	  // </script>';
			                $_SESSION['message'] = "Password is Incorrect. Please Try Again!";
			                $_SESSION['status'] = "error";
							header("Location: login2.php");
						}
						
					} else {

							$check2 = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email' AND password='$password' AND sectorial_registration='PWD,'");
			                if(mysqli_num_rows($check2)===1) {

								$row = mysqli_fetch_array($check2);
								if($row['email'] === $email && $row['password'] === $password) {
									// $_SESSION['household_Id'] = $row['household_Id'];
									$household_Id = $row['household_Id'];
									header('Location: Users/about_me4.php?household_Id='.$household_Id.'');

								} else {
					                // echo //<script>alert ("Password is incorrect. Please try again.");
					                		// window.history.go(-1);
					                	  // </script>';
					                $_SESSION['message'] = "Password is Incorrect. Please Try Again!";
					                $_SESSION['status'] = "error";
									header("Location: login2.php");
								}
								
							} else {
								$_SESSION['message'] = "Password is Incorrect. Please Try Again!";
				                $_SESSION['status'] = "error";
								header("Location: login2.php");
					         }
			         }
		         }
         }
	}
	

?>