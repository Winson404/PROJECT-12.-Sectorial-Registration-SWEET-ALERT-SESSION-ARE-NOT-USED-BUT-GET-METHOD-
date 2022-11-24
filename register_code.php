<?php 
	session_start();
	include 'config.php';

	if(isset($_POST['create_household'])) {

			$firstname              = $_POST['firstname'];
			$middlename             = $_POST['middlename'];
			$lastname               = $_POST['lastname'];
			$email                  = $_POST['email'];
			$contact                = $_POST['contact'];
			$password               = md5($_POST['password']);
			$cpassword              = md5($_POST['cpassword']);
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
			$tribe       		      = $_POST['tribe'];
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



			$first=""; 
  	  foreach($first_child as $first_childs)  
      {  
         $first .= $first_childs.",";  
      }

      $second=""; 
  	  foreach($second_child as $second_childs)  
      {  
         $second .= $second_childs.",";  
      }

      $third=""; 
  	  foreach($third_child as $third_childs)  
      {  
         $third .= $third_childs.",";  
      }

      $fourth=""; 
  	  foreach($fourth_child as $fourth_childs)  
      {  
         $fourth .= $fourth_childs.",";  
      }

      $fifth=""; 
  	  foreach($fifth_child as $fifth_childs)  
      {  
         $fifth .= $fifth_childs.",";  
      }

      $sixth=""; 
  	  foreach($sixth_child as $sixth_childs)  
      {  
         $sixth .= $sixth_childs.",";  
      }

      $seventh=""; 
  	  foreach($seventh_child as $seventh_childs)  
      {  
         $seventh .= $seventh_childs.",";  
      }

      $eight=""; 
  	  foreach($eight_child as $eight_childs)  
      {  
         $eight .= $eight_childs.",";  
      }

      $nineth=""; 
  	  foreach($nineth_child as $nineth_childs)  
      {  
         $nineth .= $nineth_childs.",";  
      }

      $tenth=""; 
  	  foreach($tenth_child as $tenth_childs)  
      {  
         $tenth .= $tenth_childs.",";  
      }

      $eleventh=""; 
  	  foreach($eleventh_child as $eleventh_childs)  
      {  
         $eleventh .= $eleventh_childs.",";  
      }

      $twelveth=""; 
  	  foreach($twelveth_child as $twelveth_childs)  
      {  
         $twelveth .= $twelveth_childs.",";  
      }



      
   



   $save = mysqli_query($conn, "INSERT INTO household_head (firstname, middlename, lastname, email, contact_number, password, sectorial_registration, causeofbeingsoloparent, typeofdisabilities, application_type, address, dob, age, gender, place_of_birth, status, educational_attainment, employment_status, work_name, type_of_work, salary, source_of_income, religion, part_of_tribe, program_services, num_fam_members, assets, living_with, first_child, secon_child, 3rd_child, fourth_child, fifth_child, sixth_child, seventh_child, eight_child, nineth_child, tenth_child, eleventh_child, twelveth_child, skills) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$contact', '$password', '$sec_register', '$causeofbeingsoloparent', '$typeofdisabilities', '$app_type', '$address', '$dob', '$age', '$gender', '$placeofbirth', '$civilstatus', '$educationalattainment', '$workstatus', '$workname', '$worktype', '$salary', '$source', '$religion', '$tribe', '$programservices', '$numberofmembers', '$properties', '$livingwith', '$first', '$second', '$third', '$fourth', '$fifth', '$sixth', '$seventh', '$eight', '$nineth', '$tenth', '$eleventh', '$twelveth', '$skills' )");
		if($save) {

					$fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email' AND password='$password'");
					if(mysqli_num_rows($fetch) ===1) {

							$row = mysqli_fetch_array($fetch);
							if($row['email'] === $email && $row['password'] === $password) {
									// $_SESSION['household_Id'] = $row['household_Id'];
									// header("Location: Users/about_me.php");
									// 
									$_SESSION['household_Id'] = $row['household_Id'];
									$_SESSION['message'] = "You are now registered. Click okay to proceed.";
			                	$_SESSION['status'] = "success";

									header("Location: index.php");
							} else {
				                $_SESSION['success']  = "Information has been successfully saved.";
									 header("Location: index.php");
							}

					} else {
								$_SESSION['success']  = "Information has been successfully saved.";
								header("Location: index.php");
					}
				   
		} else {
				$_SESSION['exists']  = "Something went wrong.";
 				header("Location: index.php");
		}
  

  // if(!empty($solo)) {

	 //  	$save = mysqli_query($conn, "INSERT INTO household_head (firstname, lastname, email, contact_number, password, solo, causeofbeingsoloparent, address, dob, gender, place_of_birth, status, educational_attainment, employment_status, work_name, type_of_work, salary, source_of_income, religion, part_of_tribe, program_services, num_fam_members, assets, living_with, skills) VALUES ('$firstname', '$lastname', '$email', '$contact', '$password', '$solo', '$causeofbeingsoloparent', '$address', '$dob', '$gender', '$placeofbirth', '$civilstatus', '$educationalattainment', '$workstatus', '$workname', '$worktype', '$salary', '$source', '$religion', '$tribe', '$programservices', '$numberofmembers', '$properties', '$livingwith', '$skills' )");
		// if($save) {
		// 		echo "good";
		// } else {
		// echo "bad";
		// }

  // } elseif(!empty($pwd)) {

  // 			$save = mysqli_query($conn, "INSERT INTO household_head (firstname, lastname, email, contact_number, password, pwd, typeofdisabilities, address, dob, gender, place_of_birth, status, educational_attainment, employment_status, work_name, type_of_work, salary, source_of_income, religion, part_of_tribe, program_services, num_fam_members, assets, living_with, skills) VALUES ('$firstname', '$lastname', '$email', '$contact', '$password', '$pwd', '$typeofdisabilities', '$address', '$dob', '$gender', '$placeofbirth', '$civilstatus', '$educationalattainment', '$workstatus', '$workname', '$worktype', '$salary', '$source', '$religion', '$tribe', '$programservices', '$numberofmembers', '$properties', '$livingwith', '$skills' )");
		// if($save) {
		// 		echo "good";
		// } else {
		// echo "bad";
		// }

  // } else {


  // 			$save = mysqli_query($conn, "INSERT INTO household_head (firstname, lastname, email, contact_number, password, senior, address, dob, gender, place_of_birth, status, educational_attainment, employment_status, work_name, type_of_work, salary, source_of_income, religion, part_of_tribe, program_services, num_fam_members, assets, living_with, skills) VALUES ('$firstname', '$lastname', '$email', '$contact', '$password', '$senior', '$address', '$dob', '$gender', '$placeofbirth', '$civilstatus', '$educationalattainment', '$workstatus', '$workname', '$worktype', '$salary', '$source', '$religion', '$tribe', '$programservices', '$numberofmembers', '$properties', '$livingwith', '$skills' )");
		// if($save) {
		// 		echo "good";
		// } else {
		// echo "bad";
		// }

  // }







			
			

	}



?>