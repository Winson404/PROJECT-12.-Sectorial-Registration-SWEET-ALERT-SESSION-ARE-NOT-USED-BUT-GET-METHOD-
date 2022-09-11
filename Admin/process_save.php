<?php 
	session_start();
	include '../config.php';


	// SAVE ADMIN
	if(isset($_POST['create_admin'])) {

		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$contact         = $_POST['contact'];
		$email           = $_POST['email'];
		$address         = $_POST['address'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
		if(mysqli_num_rows($check_email)>0) {
			$_SESSION['exists']  = "Email is already taken.";
            header("Location: admin.php");
		} else {

			if($password != $cpassword) {
				$_SESSION['exists']  = "Password does not matched.";
            	header("Location: admin.php");
			} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-admin/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header("Location: admin.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header("Location: admin.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO admin (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
	                            $_SESSION['success']  = "Admin information has been successfully saved!";
	                            header("Location: admin.php");                                
                            } else {
                              $_SESSION['exists'] = "Something went wrong while saving the information. Please try again.";
                              header("Location: admin.php");
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header("Location: admin.php");
                      }
				 }

			}

		}

	}



	if(isset($_POST['reply'])) {
		$message_Id   = $_POST['message_Id'];
		$household_Id = $_POST['household_Id'];
		$admin_Id     = $_POST['admin_Id'];
		$comment      = $_POST['comment'];
		$date         = $date = date('d-m-y');

		$save = mysqli_query($conn, "INSERT INTO admin_reply (admin_message_Id, admin_household_Id, admin_reply, admin_Id, date_added) VALUES('$message_Id', '$household_Id', '$comment', '$admin_Id', '$date')");

		if($save) {
      $_SESSION['success']  = "You have successfully added a message!";
      header("Location: messages.php");                                
    } else {
      $_SESSION['exists'] = "Something went wrong while. Please try again.";
      header("Location: messages.php");
    }
	}



?>