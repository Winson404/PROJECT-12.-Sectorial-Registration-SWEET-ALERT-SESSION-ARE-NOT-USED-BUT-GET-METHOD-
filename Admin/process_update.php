<?php 
	
	session_start();
	include '../config.php';


    // UPDATE ADMIN
	if(isset($_POST['update_admin'])) {

		$admin_Id    = $_POST['admin_Id'];
		$firstname  = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname   = $_POST['lastname'];
		$suffix     = $_POST['suffix'];
		$gender     = $_POST['gender'];
		$dob        = $_POST['dob'];
		$age        = $_POST['age'];
		$contact    = $_POST['contact'];
		$email      = $_POST['email'];
		$address    = $_POST['address'];
		$file       = basename($_FILES["fileToUpload"]["name"]);

		if(empty($file)) {

					$save = mysqli_query($conn, "UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE admin_Id='$admin_Id'");
		            if($save) {
			                $_SESSION['success']  = "Admin information has been updated!";
			                header("Location: admin.php");                                
		            } else {
			                $_SESSION['exists'] = "Something went wrong while saving the information. Please try again.";
			                header("Location: admin.php");
		            }

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
	                      	$save = mysqli_query($conn, "UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact', image='$file' WHERE admin_Id='$admin_Id'");
				            if($save) {
					                $_SESSION['success']  = "Admin information has been updated!";
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




	// CHANGE ADMIN PASSWORD
	if(isset($_POST['password_admin'])) {

    	$admin_Id    = $_POST['admin_Id'];	
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM admin WHERE password='$OldPassword' AND admin_Id='$admin_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['exists']  = "Password does not matched. Please try again";
		          			header("Location: admin.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE admin SET password='$password' WHERE admin_Id='$admin_Id' ");

			    			if($update_password) {
			    					$_SESSION['success']  = "Password has been changed.";
		          					header("Location: admin.php");
			    			} else {
			    					$_SESSION['exists']  = "Something went wrong while changing the password.";
			          				header("Location: admin.php");
			    			}
		    		}
    	} else {
    		$_SESSION['exists']  = "Old password is incorrect.";
            header("Location: admin.php");
    	}

    }







    if(isset($_POST['update_household'])) {

    	$household_Id           = $_POST['household_Id'];
			$firstname              = $_POST['firstname'];
			$middlename             = $_POST['middlename'];
			$lastname               = $_POST['lastname'];
			$email                  = $_POST['email'];
			$contact                = $_POST['contact'];
			$sectorial_registration = $_POST['sectorial_registration'];
		   $applicationtype       	= $_POST['applicationtype'];
			// $senior                 = $_POST['senior'];
			$causeofbeingsoloparent = $_POST['causeofbeingsoloparent'];
			$typeofdisabilities     = $_POST['typeofdisabilities'];
			$address                = $_POST['address'];
			$dob                    = $_POST['dob'];
			$age                    = $_POST['age'];
			$gender          		   = $_POST['gender'];
			$placeofbirth           = $_POST['placeofbirth'];
			$civilstatus            = $_POST['civilstatus'];
			$educationalattainment  = $_POST['educationalattainment'];

			$workstatus             = $_POST['workstatus'];
			$workname               = $_POST['workname'];
			$worktype               = $_POST['worktype'];
			$salary                 = $_POST['salary'];
			$source                 = $_POST['source'];
			$religion               = $_POST['religion'];
			$tribe       		        = $_POST['tribe'];
			$programservices        = $_POST['programservices'];
			$numberofmembers        = $_POST['numberofmembers'];
			$properties             = $_POST['properties'];
			$livingwith             = $_POST['livingwith'];

			$first_child            = $_POST['first_child'];
			$second_child           = $_POST['second_child'];
			$third_child            = $_POST['third_child'];
			$fourth_child           = $_POST['fourth_child'];
			$fifth_child            = $_POST['fifth_child'];
			$sixth_child            = $_POST['sixth_child'];
			$seventh_child          = $_POST['seventh_child'];
			$eight_child            = $_POST['eight_child'];
			$nineth_child           = $_POST['nineth_child'];
			$tenth_child            = $_POST['tenth_child'];
			$eleventh_child         = $_POST['eleventh_child'];
			$twelveth_child         = $_POST['twelveth_child'];

			$skills          				= $_POST['skills'];

			$sec_register=""; 
  	  foreach($sectorial_registration as $sectorial_registrations)  
      {  
         $sec_register .= $sectorial_registrations.",";  
      }


      $app_type=""; 
  	  foreach($applicationtype as $applicationtypes)  
      {  
         $app_type .= $applicationtypes.",";  
      }


   		$save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', contact_number='$contact', sectorial_registration='$sec_register', causeofbeingsoloparent='$causeofbeingsoloparent', typeofdisabilities='$typeofdisabilities', application_type='$app_type', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', work_name='$workname', type_of_work='$worktype', salary='$salary', source_of_income='$source', religion='$religion', part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', first_child='$first_child', secon_child='$second_child', 3rd_child='$third_child', fourth_child='$fourth_child', fifth_child='$fifth_child', sixth_child='$sixth_child', seventh_child='$seventh_child', eight_child='$eight_child', nineth_child='$nineth_child', tenth_child='$tenth_child', eleventh_child='$eleventh_child', twelveth_child='$twelveth_child', skills='$skills' WHERE household_Id='$household_Id'");
			if($save) {
					$_SESSION['success']  = "Information has been successfully updated.";
						header('Location: pwd_update.php?household_Id='.$household_Id.'');
			} else {
					$_SESSION['exists']  = "Something went wrong.";
	 				header('Location: pwd_update.php?household_Id='.$household_Id.'');
			}
  

	}









	// UPDATE SENIOR CITIZEN
	if(isset($_POST['senior_update_household'])) {

    	$household_Id           = $_POST['household_Id'];
			$firstname              = $_POST['firstname'];
			$middlename             = $_POST['middlename'];
			$lastname               = $_POST['lastname'];
			$email                  = $_POST['email'];
			$contact                = $_POST['contact'];
			$sectorial_registration = $_POST['sectorial_registration'];
		  $applicationtype       	= $_POST['applicationtype'];
			// $senior                 = $_POST['senior'];
			$causeofbeingsoloparent = $_POST['causeofbeingsoloparent'];
			$typeofdisabilities     = $_POST['typeofdisabilities'];
			$address                = $_POST['address'];
			$dob                    = $_POST['dob'];
			$age                    = $_POST['age'];
			$gender          		   = $_POST['gender'];
			$placeofbirth           = $_POST['placeofbirth'];
			$civilstatus            = $_POST['civilstatus'];
			$educationalattainment  = $_POST['educationalattainment'];

			$workstatus             = $_POST['workstatus'];
			$workname               = $_POST['workname'];
			$worktype               = $_POST['worktype'];
			$salary                 = $_POST['salary'];
			$source                 = $_POST['source'];
			$religion               = $_POST['religion'];
			$tribe       		        = $_POST['tribe'];
			$programservices        = $_POST['programservices'];
			$numberofmembers        = $_POST['numberofmembers'];
			$properties             = $_POST['properties'];
			$livingwith             = $_POST['livingwith'];

			$first_child            = $_POST['first_child'];
			$second_child           = $_POST['second_child'];
			$third_child            = $_POST['third_child'];
			$fourth_child           = $_POST['fourth_child'];
			$fifth_child            = $_POST['fifth_child'];
			$sixth_child            = $_POST['sixth_child'];
			$seventh_child          = $_POST['seventh_child'];
			$eight_child            = $_POST['eight_child'];
			$nineth_child           = $_POST['nineth_child'];
			$tenth_child            = $_POST['tenth_child'];
			$eleventh_child         = $_POST['eleventh_child'];
			$twelveth_child         = $_POST['twelveth_child'];

			$skills          				= $_POST['skills'];

			$sec_register=""; 
  	  foreach($sectorial_registration as $sectorial_registrations)  
      {  
         $sec_register .= $sectorial_registrations.",";  
      }


      $app_type=""; 
  	  foreach($applicationtype as $applicationtypes)  
      {  
         $app_type .= $applicationtypes.",";  
      }


   		$save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', contact_number='$contact', sectorial_registration='$sec_register', causeofbeingsoloparent='$causeofbeingsoloparent', typeofdisabilities='$typeofdisabilities', application_type='$app_type', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', work_name='$workname', type_of_work='$worktype', salary='$salary', source_of_income='$source', religion='$religion', part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', first_child='$first_child', secon_child='$second_child', 3rd_child='$third_child', fourth_child='$fourth_child', fifth_child='$fifth_child', sixth_child='$sixth_child', seventh_child='$seventh_child', eight_child='$eight_child', nineth_child='$nineth_child', tenth_child='$tenth_child', eleventh_child='$eleventh_child', twelveth_child='$twelveth_child', skills='$skills' WHERE household_Id='$household_Id'");
			if($save) {
					$_SESSION['success']  = "Information has been successfully updated.";
						header('Location: senior_citizen_update.php?household_Id='.$household_Id.'');
			} else {
					$_SESSION['exists']  = "Something went wrong.";
	 				header('Location: senior_citizen_update.php?household_Id='.$household_Id.'');
			}
  

	}






	// UPDATE SOLO PARENT
	if(isset($_POST['solo_update_household'])) {

    	$household_Id           = $_POST['household_Id'];
			$firstname              = $_POST['firstname'];
			$middlename             = $_POST['middlename'];
			$lastname               = $_POST['lastname'];
			$email                  = $_POST['email'];
			$contact                = $_POST['contact'];
			$sectorial_registration = $_POST['sectorial_registration'];
		  $applicationtype       	= $_POST['applicationtype'];
			// $senior                 = $_POST['senior'];
			$causeofbeingsoloparent = $_POST['causeofbeingsoloparent'];
			$typeofdisabilities     = $_POST['typeofdisabilities'];
			$address                = $_POST['address'];
			$dob                    = $_POST['dob'];
			$age                    = $_POST['age'];
			$gender          			= $_POST['gender'];
			$placeofbirth           = $_POST['placeofbirth'];
			$civilstatus            = $_POST['civilstatus'];
			$educationalattainment  = $_POST['educationalattainment'];

			$workstatus             = $_POST['workstatus'];
			$workname               = $_POST['workname'];
			$worktype               = $_POST['worktype'];
			$salary                 = $_POST['salary'];
			$source                 = $_POST['source'];
			$religion               = $_POST['religion'];
			$tribe       		        = $_POST['tribe'];
			$programservices        = $_POST['programservices'];
			$numberofmembers        = $_POST['numberofmembers'];
			$properties             = $_POST['properties'];
			$livingwith             = $_POST['livingwith'];

			$first_child            = $_POST['first_child'];
			$second_child           = $_POST['second_child'];
			$third_child            = $_POST['third_child'];
			$fourth_child           = $_POST['fourth_child'];
			$fifth_child            = $_POST['fifth_child'];
			$sixth_child            = $_POST['sixth_child'];
			$seventh_child          = $_POST['seventh_child'];
			$eight_child            = $_POST['eight_child'];
			$nineth_child           = $_POST['nineth_child'];
			$tenth_child            = $_POST['tenth_child'];
			$eleventh_child         = $_POST['eleventh_child'];
			$twelveth_child         = $_POST['twelveth_child'];

			$skills          				= $_POST['skills'];

			$sec_register=""; 
  	  foreach($sectorial_registration as $sectorial_registrations)  
      {  
         $sec_register .= $sectorial_registrations.",";  
      }


      $app_type=""; 
  	  foreach($applicationtype as $applicationtypes)  
      {  
         $app_type .= $applicationtypes.",";  
      }


   		$save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', contact_number='$contact', sectorial_registration='$sec_register', causeofbeingsoloparent='$causeofbeingsoloparent', typeofdisabilities='$typeofdisabilities', application_type='$app_type', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', work_name='$workname', type_of_work='$worktype', salary='$salary', source_of_income='$source', religion='$religion', part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', first_child='$first_child', secon_child='$second_child', 3rd_child='$third_child', fourth_child='$fourth_child', fifth_child='$fifth_child', sixth_child='$sixth_child', seventh_child='$seventh_child', eight_child='$eight_child', nineth_child='$nineth_child', tenth_child='$tenth_child', eleventh_child='$eleventh_child', twelveth_child='$twelveth_child', skills='$skills' WHERE household_Id='$household_Id'");
			if($save) {
					$_SESSION['success']  = "Information has been successfully updated.";
						header('Location: solo_parent_update.php?household_Id='.$household_Id.'');
			} else {
					$_SESSION['exists']  = "Something went wrong.";
	 				header('Location: solo_parent_update.php?household_Id='.$household_Id.'');
			}
  

	}







	if(isset($_POST['email-only'])) {

      	$admin_Id = $_POST['admin_Id'];
      	$email = $_POST['email'];

      	$update = mysqli_query($conn, "UPDATE admin SET email='$email' WHERE admin_Id='$admin_Id'");
      	if($update) {
          $_SESSION['success']  = "Email has been updated.";
          header('Location: settings.php');  
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php');
        }

      } 





      if(isset($_POST['phone-only'])) {

      	$admin_Id = $_POST['admin_Id'];
      	$phone = $_POST['phone'];

      	$update = mysqli_query($conn, "UPDATE admin SET contact='$phone' WHERE admin_Id='$admin_Id'");
      	if($update) {
          $_SESSION['success']  = "Phone number has been updated.";
          header('Location: settings.php');  
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php');
        }

      } 




       if(isset($_POST['dob-only'])) {

      	$admin_Id = $_POST['admin_Id'];
      	$dob = $_POST['dob'];

      	$update = mysqli_query($conn, "UPDATE admin SET dob='$dob' WHERE admin_Id='$admin_Id'");
      	if($update) {
          $_SESSION['success']  = "Birthday has been updated.";
          header('Location: settings.php');  
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php');
        }

      } 


	



?>