<?php 
	session_start();
	include '../config.php';



	// CHANGE PATIENT PASSWORD
	if(isset($_POST['password_patient'])) {

    	$user_Id     = $_POST['user_Id'];
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM household_head WHERE password='$OldPassword' AND household_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				// $_SESSION['exists']  = "Password does not matched. Please try again";
		        //   	header('Location: settings.php?household_Id='.$user_Id.'');
                $_SESSION['message'] = "Password does not matched.";
                    $_SESSION['text']    = "Please try again";
                    $_SESSION['status']  = "error";
                    header('Location: settings.php?household_Id='.$user_Id.'');
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE household_head SET password='$password' WHERE household_Id='$user_Id' ");

			    			if($update_password) {
			    					// $_SESSION['success']  = "Password has been changed.";
                    $_SESSION['message'] = "Password has been changed.";
                        $_SESSION['text']    = "Successfully changed";
                        $_SESSION['status']  = "success";
		          			header('Location: settings.php?household_Id='.$user_Id.'');
			    			} else {
			    					// $_SESSION['exists']  = "Something went wrong while changing the password.";
                    $_SESSION['message'] = "Something went wrong while changing the password.";
                          $_SESSION['text']    = "Please try again.";
                          $_SESSION['status']  = "error";
			          				header('Location: settings.php?household_Id='.$user_Id.'');
			    			}
		    		}
    	} else {
    		// $_SESSION['exists']  = "Old password is incorrect.";
        $_SESSION['message'] = "Old password is incorrect.";
            $_SESSION['text']    = "Please try again.";
            $_SESSION['status']  = "error";
            header('Location: settings.php?household_Id='.$user_Id.'');
    	}

    }





    if(isset($_POST['solo_update_household'])) {

    	$household_Id           = $_POST['household_Id'];
			$firstname              = $_POST['firstname'];
			$lastname               = $_POST['lastname'];
			$email                  = $_POST['email'];
			$contact                = $_POST['contact'];
			// $sectorial_registration = $_POST['sectorial_registration'];
		 //  $applicationtype       	= $_POST['applicationtype'];
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

			// $first_child            = $_POST['first_child'];
			// $second_child           = $_POST['second_child'];
			// $third_child            = $_POST['third_child'];
			// $fourth_child           = $_POST['fourth_child'];
			// $fifth_child            = $_POST['fifth_child'];
			// $sixth_child            = $_POST['sixth_child'];
			// $seventh_child          = $_POST['seventh_child'];
			// $eight_child            = $_POST['eight_child'];
			// $nineth_child           = $_POST['nineth_child'];
			// $tenth_child            = $_POST['tenth_child'];
			// $eleventh_child         = $_POST['eleventh_child'];
			// $twelveth_child         = $_POST['twelveth_child'];

			$skills          				= $_POST['skills'];

			// $sec_register=""; 
  	//   foreach($sectorial_registration as $sectorial_registrations)  
   //    {  
   //       $sec_register .= $sectorial_registrations.",";  
   //    }


   //    $app_type=""; 
  	//   foreach($applicationtype as $applicationtypes)  
   //    {  
   //       $app_type .= $applicationtypes.",";  
   //    }


   		$save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', lastname='$lastname', email='$email', contact_number='$contact', causeofbeingsoloparent='$causeofbeingsoloparent', typeofdisabilities='$typeofdisabilities', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', work_name='$workname', type_of_work='$worktype', salary='$salary', source_of_income='$source', religion='$religion', part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', skills='$skills' WHERE household_Id='$household_Id'");
   			// $save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', lastname='$lastname', email='$email', contact_number='$contact', causeofbeingsoloparent='$causeofbeingsoloparent', typeofdisabilities='$typeofdisabilities', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', work_name='$workname', type_of_work='$worktype', salary='$salary', source_of_income='$source', religion='$religion', part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', first_child='$first_child', secon_child='$second_child', 3rd_child='$third_child', fourth_child='$fourth_child', fifth_child='$fifth_child', sixth_child='$sixth_child', seventh_child='$seventh_child', eight_child='$eight_child', nineth_child='$nineth_child', tenth_child='$tenth_child', eleventh_child='$eleventh_child', twelveth_child='$twelveth_child', skills='$skills' WHERE household_Id='$household_Id'");
			if($save) {
					$_SESSION['success']  = "Information has been successfully updated.";
						header('Location: about_me2.php?household_Id='.$household_Id .'');
						// header('Location: about_me_update.php?household_Id='.$household_Id .'');
			} else {
					$_SESSION['exists']  = "Something went wrong.";
	 				// header('Location: about_me_update.php?household_Id='.$household_Id .'');
					header('Location: about_me2.php?household_Id='.$household_Id .'');
			}
  

	}













  // UPDATE SENIOR CITIZEN
  
    if(isset($_POST['senior_update_household'])) {

      $household_Id           = $_POST['household_Id'];
      $firstname              = $_POST['firstname'];
      $lastname               = $_POST['lastname'];
      $email                  = $_POST['email'];
      $contact                = $_POST['contact'];
      $address                = $_POST['address'];
      $dob                    = $_POST['dob'];
      $age                    = $_POST['age'];
      $gender                 = $_POST['gender'];
      $civilstatus            = $_POST['civilstatus'];
      $educationalattainment  = $_POST['educationalattainment'];
      $condition              = $_POST['condition'];
      $Occupation             = $_POST['Occupation'];
      $GSIS                   = $_POST['GSIS'];
      $SSS                    = $_POST['SSS'];
      $PVAO                   = $_POST['PVAO'];
      $otherpensionners       = $_POST['otherpensionners'];
      $alone                  = $_POST['alone'];
      $relatives              = $_POST['relatives'];
      $noofyears              = $_POST['noofyears'];
      $ips                    = $_POST['ips'];
      $bedridden              = $_POST['bedridden'];
      $pwd                    = $_POST['pwd'];
      $others                 = $_POST['others'];
      $Association            = $_POST['Association'];
      $AddressAssociation     = $_POST['AddressAssociation'];
      $Membership             = $_POST['Membership'];
      $Position               = $_POST['Position'];
      $Officer                = $_POST['Officer'];

      $save = mysqli_query($conn, "UPDATE household_head SET firstname='$firstname', lastname='$lastname', email='$email', contact_number='$contact', address='$address', dob='$dob', age='$age', gender='$gender', status='$civilstatus', educational_attainment='$educationalattainment', health_condition='$condition', occupation='$Occupation', GSIS='$GSIS', SSS='$SSS', PVAO='$PVAO', other_pension='$otherpensionners', living_with='$relatives', alone='$alone', no_ofyears='$noofyears', IP_s='$ips', bedridden='$bedridden', pwd='$pwd', other_sector='$others', name_of_association='$Association', address_association='$AddressAssociation', name_membership='$Membership', position='$Position', officer_date_selected='$Officer' WHERE household_Id='$household_Id'");
      if($save) {
          $_SESSION['success']  = "Information has been successfully updated.";
            header('Location: about_me3.php?household_Id='.$household_Id .'');
            // header('Location: about_me_update.php?household_Id='.$household_Id .'');
      } else {
          $_SESSION['exists']  = "Something went wrong.";
          // header('Location: about_me_update.php?household_Id='.$household_Id .'');
          header('Location: about_me3.php?household_Id='.$household_Id .'');
      }
  }









  if(isset($_POST['pwd_update_household'])) {

      $household_Id           = $_POST['household_Id'];
      $pwdnumber              = $_POST['pwdnumber'];
      $dateissued             = $_POST['dateissued'];
      $firstname              = $_POST['firstname'];
      $middlename             = $_POST['middlename'];
      $lastname               = $_POST['lastname'];
      $email                  = $_POST['email'];
      $contact                = $_POST['contact'];
      $reference              = $_POST['reference'];
      $address                = $_POST['address'];
      $dob                    = $_POST['dob'];
      $age                    = $_POST['age'];
      $gender                 = $_POST['gender'];
      $placeofbirth           = $_POST['placeofbirth'];
      $civilstatus            = $_POST['civilstatus'];
      $educationalattainment  = $_POST['educationalattainment'];
      $workstatus             = $_POST['workstatus'];
      $type_employer          = $_POST['type_employer'];
      $salary                 = $_POST['salary'];
      $workname               = $_POST['workname'];
      $worktype               = $_POST['worktype'];
      $source                 = $_POST['source'];
      $religion               = $_POST['religion'];
      $solo_parent            = $_POST['solo_parent'];
      $type_disability        = $_POST['type_disability'];
      $cause_disability       = $_POST['cause_disability'];
      $tribe                  = $_POST['tribe'];
      $programservices        = $_POST['programservices'];
      $numberofmembers        = $_POST['numberofmembers'];
      $properties             = $_POST['properties'];
      $livingwith             = $_POST['livingwith'];
      $skills                 = $_POST['skills'];
      $community_activities   = $_POST['community_activities'];
      $Economic               = $_POST['Economic'];
      $Social_Emotional       = $_POST['Social_Emotional'];
      $Health                 = $_POST['Health'];
      $health_specify         = $_POST['health_specify'];
      $Housing                = $_POST['Housing'];
      $Toilet_Facility        = $_POST['Toilet_Facility'];
      $Electricity            = $_POST['Electricity'];
      $Community_Service      = $_POST['Community_Service'];
      $Specific_Needs         = $_POST['Specific_Needs'];

      $ref=""; 
      foreach($reference as $references)  
      {  
         $ref .= $references.",";  
      }

      $save = mysqli_query($conn, "UPDATE household_head SET pwdnumber='$pwdnumber', date_issued='$dateissued', firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', contact_number='$contact', id_reference='$ref', address='$address', dob='$dob', age='$age', gender='$gender', place_of_birth='$placeofbirth', status='$civilstatus', educational_attainment='$educationalattainment', employment_status='$workstatus', type_employer='$type_employer', salary='$salary', work_name='$workname', type_of_work='$worktype',  source_of_income='$source', religion='$religion', solo_parent='$solo_parent', typeofdisabilities='$type_disability', cause_disability='$cause_disability',  part_of_tribe='$tribe', program_services='$programservices', num_fam_members='$numberofmembers', assets='$properties', living_with='$livingwith', skills='$skills', community_activities='$community_activities', Economic='$Economic', Social_Emotional='$Social_Emotional', Health='$Health',  health_specify='$health_specify', Housing='$Housing', Toilet_Facility='$Toilet_Facility', Electricity='$Electricity', Community_Service='$Community_Service', Specific_Needs='$Specific_Needs' WHERE household_Id='$household_Id'");
      
      
      if($save) {
          $_SESSION['success']  = "Information has been successfully updated.";
            header('Location: about_me4.php?household_Id='.$household_Id .'');
            // header('Location: about_me_update.php?household_Id='.$household_Id .'');
      } else {
          $_SESSION['exists']  = "Something went wrong.";
          // header('Location: about_me_update.php?household_Id='.$household_Id .'');
          header('Location: about_me4.php?household_Id='.$household_Id .'');
      }
  

  }



















	if(isset($_POST['update_ID'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: view_uploaded_Id.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: view_uploaded_Id.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE uploaded_file SET image='$file' WHERE Upload_household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Id.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: view_uploaded_Id.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: view_uploaded_Id.php?household_Id='.$id.'');
                      }
         }



      } 





      if(isset($_POST['email-only'])) {

      	$household_Id = $_POST['household_Id'];
      	$email = $_POST['email'];

      	$update = mysqli_query($conn, "UPDATE household_head SET email='$email' WHERE household_Id='$household_Id'");
      	if($update) {
          $_SESSION['success']  = "Email has been updated.";
          header('Location: settings.php?household_Id='.$household_Id.'');  
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php?household_Id='.$household_Id.''); 
        }

      } 





      if(isset($_POST['phone-only'])) {

      	$household_Id = $_POST['household_Id'];
      	$phone = $_POST['phone'];

      	$update = mysqli_query($conn, "UPDATE household_head SET contact_number='$phone' WHERE household_Id='$household_Id'");
      	if($update) {
          $_SESSION['success']  = "Phone number has been updated.";
          header('Location: settings.php?household_Id='.$household_Id.''); 
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php?household_Id='.$household_Id.''); 
        }

      } 




       if(isset($_POST['dob-only'])) {

      	$household_Id = $_POST['household_Id'];
      	$dob = $_POST['dob'];

      	$update = mysqli_query($conn, "UPDATE household_head SET dob='$dob' WHERE household_Id='$household_Id'");
      	if($update) {
          $_SESSION['success']  = "Birthday has been updated.";
          header('Location: settings.php?household_Id='.$household_Id.'');   
        } else {
          $_SESSION['exists'] = "Something went wrong. Please try again.";
          header('Location: settings.php?household_Id='.$household_Id.''); 
        }

      } 






      if(isset($_POST['update_ID2x2'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: view_uploaded_ID2x2.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: view_uploaded_ID2x2.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET ID_2='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_ID2x2.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: view_uploaded_ID2x2.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: view_uploaded_ID2x2.php?household_Id='.$id.'');  
                      }
         }
      } 






       if(isset($_POST['update_residency'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: view_uploaded_Barangay_Certification.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: view_uploaded_Barangay_Certification.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET Barangay_Certification='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Barangay_Certification.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: view_uploaded_Barangay_Certification.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: view_uploaded_Barangay_Certification.php?household_Id='.$id.'');  
                      }
         }
      } 






       if(isset($_POST['update_solo_parent'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: view_uploaded_Punong_Barangay.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Punong_Barangay.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET Punong_Barangay='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Punong_Barangay.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: view_uploaded_Punong_Barangay.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                           header('Location: view_uploaded_Punong_Barangay.php?household_Id='.$id.'');  
                      }
         }
      } 




      if(isset($_POST['walang_kinakasama'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: view_uploaded_Walang_Kinakasama.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Walang_Kinakasama.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET Walang_Kinakasama='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Walang_Kinakasama.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Walang_Kinakasama.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Walang_Kinakasama.php?household_Id='.$id.'');  
                      }
         }
      } 







       if(isset($_POST['Kopyanganak'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Certificate_Ng_Anak.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Certificate_Ng_Anak.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET Certificate_Ng_Anak='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Certificate_Ng_Anak.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Certificate_Ng_Anak.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Certificate_Ng_Anak.php?household_Id='.$id.'');  
                      }
         }
      } 





           if(isset($_POST['certificate_choices'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_certificate_choices.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_certificate_choices.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET certificate_choices='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_certificate_choices.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_certificate_choices.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_certificate_choices.php?household_Id='.$id.'');  
                      }
         }
      } 









           if(isset($_POST['Treasurer_Certification'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_treasures_certification.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_treasures_certification.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents SET Treasurer_Certification='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_treasures_certification.php?household_Id='.$id.'');
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_treasures_certification.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_treasures_certification.php?household_Id='.$id.'');
                      }
         }
      } 












           if(isset($_POST['Certification_of_Disability'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Certification_of_Disability.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Certification_of_Disability.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_pwd SET Certification_of_Disability='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Certification_of_Disability.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Certification_of_Disability.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Certification_of_Disability.php?household_Id='.$id.'');  
                      }
         }
      } 









           if(isset($_POST['Blood_Type2'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Blood_Type.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Blood_Type.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_pwd SET Blood_Type='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Blood_Type.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Blood_Type.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Blood_Type.php?household_Id='.$id.'');  
                      }
         }
      } 







       if(isset($_POST['Body_Picture'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Body_Picture.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Body_Picture.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_pwd SET Body_Picture='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Body_Picture.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Body_Picture.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Body_Picture.php?household_Id='.$id.'');  
                      }
         }
      } 








      if(isset($_POST['ID_Picture'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_ID_Picture.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_ID_Picture.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_pwd SET ID_Picture='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_ID_Picture.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_ID_Picture.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_ID_Picture.php?household_Id='.$id.''); 
                      }
         }
      } 










         if(isset($_POST['Copy_Birth_Certificate'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Copy_Birth_Certificate.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Copy_Birth_Certificate.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_pwd SET Copy_Birth_Certificate='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Copy_Birth_Certificate.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Copy_Birth_Certificate.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Copy_Birth_Certificate.php?household_Id='.$id.'');  
                      }
         }
      } 










       if(isset($_POST['Birth_certificate'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Birth_certificate.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Birth_certificate.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_senior SET Birth_certificate='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Birth_certificate.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Birth_certificate.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Birth_certificate.php?household_Id='.$id.'');  
                      }
         }
      } 









       if(isset($_POST['Marriage_contract'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Marriage_contract.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Marriage_contract.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_senior SET Marriage_contract='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Marriage_contract.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Marriage_contract.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Marriage_contract.php?household_Id='.$id.'');  
                      }
         }
      } 








      
       if(isset($_POST['Valid_Id'])) {
							$id   = $_POST['household_Id'];
							$file = basename($_FILES["fileToUpload"]["name"]);

          	  // Check if image file is a actual image or fake image
              $target_dir = "../images-documents/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: view_uploaded_Valid_Id.php?household_Id='.$id.'');  
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: view_uploaded_Valid_Id.php?household_Id='.$id.'');  
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE documents_senior SET Valid_Id='$file' WHERE household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been updated.";
                              header('Location: view_uploaded_Valid_Id.php?household_Id='.$id.'');  
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: view_uploaded_Valid_Id.php?household_Id='.$id.'');  
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                          header('Location: view_uploaded_Valid_Id.php?household_Id='.$id.'');  
                      }
         }
      } 


?>