<?php 
	session_start();
	include 'config.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/PHPMailer/src/Exception.php';
	require 'vendor/PHPMailer/src/PHPMailer.php';
	require 'vendor/PHPMailer/src/SMTP.php';

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

	$sec_register=""; 
	foreach($sectorial_registration as $sectorial_registrations) {
		$sec_register .= $sectorial_registrations.","; 
	}

	$app_type=""; 
	foreach($applicationtype as $applicationtypes) { 
		$app_type .= $applicationtypes.","; 
	}

	$check_email = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email'");
	if(mysqli_num_rows($check_email) > 0) {
		$_SESSION['message'] = "Email already exists.";
		$_SESSION['text']    = "Email exists";
		$_SESSION['status']  = "error";
		header('Location: index2.php');
	} else {
		$save = mysqli_query($conn, "INSERT INTO household_head (firstname, middlename, lastname, email, contact_number, password, sectorial_registration,  application_type)  VALUES ('$firstname', '$middlename', '$lastname', '$email', '$contact', '$password', '$sec_register', '$app_type')");

			if($save) {

				$get_ID = mysqli_query($conn, "SELECT * FROM household_head WHERE firstname='$firstname' AND middlename='$middlename' AND lastname='$lastname' AND email='$email' AND contact_number='$contact' ");
				if(mysqli_num_rows($get_ID) > 0) {

					$row = mysqli_fetch_array($get_ID);
					$h_ID = $row['household_Id'];
					$key  = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

					$check_code = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$h_ID'");
					$row_check_code = mysqli_fetch_array($check_code);
					$v_code = $row_check_code['v_code'];
					if($v_code == NULL) { 

						$insert_code = mysqli_query($conn, "UPDATE household_head SET v_code='$key' WHERE household_Id='$h_ID'");
						if($insert_code) {

							$get_code = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$h_ID'");
							$row2 = mysqli_fetch_array($get_code);
							$code = $row2['v_code'];

							$email   = $_POST['email'];
							$subject = 'Verification code';
							$message = '<p>Good day sir/maam '.$email.', your verification code is <b>'.$code.'</b>. Please do not share this code to other people. Thank you!</p>
							<p>You can verify your email by clicking it <a href="http://localhost/PROJECT%2012.%20Sectorial%20Registration%20(SWEET%20ALERT%20,%20SESSION%20ARE%20NOT%20USED,%20BUT%20GET%20METHOD)/email_verification.php?h_ID='.$h_ID.'&&email='.$email.'&&key='.$code.'">here!</a></p> 
							<p><b>NOTE:</b> This is a system generated email. Please do not reply.</p> ';

							$mail = new PHPMailer(true);                            
							try {
							//Server settings
							$mail->isSMTP();                                     
							$mail->Host = 'smtp.gmail.com';                      
							$mail->SMTPAuth = true;                             
							$mail->Username = 'mswdo7963@gmail.com';     
							$mail->Password = 'onxiszflbdgrabiz';              
							$mail->SMTPOptions = array(
							'ssl' => array(
							'verify_peer' => false,
							'verify_peer_name' => false,
							'allow_self_signed' => true
							)
							);                         
							$mail->SMTPSecure = 'ssl';                           
							$mail->Port = 465;                                   

							//Send Email
							$mail->setFrom('mswdo7963@gmail.com');

							//Recipients
							$mail->addAddress($email);              
							$mail->addReplyTo('mswdo7963@gmail.com');

							//Content
							$mail->isHTML(true);                                  
							$mail->Subject = $subject;
							$mail->Body    = $message;

							$mail->send();

							$_SESSION['message'] = "Child's account has been approved!";
							$_SESSION['text']    = "Approval successful!";
							$_SESSION['status']  = "success";
							header('Location: email_verification.php?h_ID='.$h_ID.'&&email='.$email.'&&key='.$code.'');

							} catch (Exception $e) {
								$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
								$_SESSION['text']     = "Please try again.";
								$_SESSION['status']   = "error";
								header("Location: index2.php");
							}
						} else {
							$_SESSION['message'] = "Updating Verification code went wrong.";
							$_SESSION['text']    = "Update failed";
							$_SESSION['status']  = "error";
							header('Location: index2.php');
						}

					} else {
						$_SESSION['message'] = "Verification code is not empty.";
						$_SESSION['text']    = "Verification error";
						$_SESSION['status']  = "error";
						header('Location: index2.php');
					}

				} else {
					$_SESSION['message'] = "Something went wrong.";
					$_SESSION['text']    = "Error";
					$_SESSION['status']  = "error";
					header('Location: index2.php');
				}

		} else {
			$_SESSION['message'] = "Something went wrong.";
			$_SESSION['text']    = "Error";
			$_SESSION['status']  = "error";
			header('Location: index2.php');
		}
	}
}





	if(isset($_POST['verify_email'])) {

		$household_Id = $_POST['household_Id'];
		$email        = $_POST['email'];
		$v_code		  = $_POST['v_code'];

		$sectorial_registration = mysqli_query($conn, "SELECT sectorial_registration FROM household_head WHERE household_Id='$household_Id'");
		$row_sectorial = mysqli_fetch_array($sectorial_registration);
		$sector = $row_sectorial['sectorial_registration'];

		$fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
		$row = mysqli_fetch_array($fetch);
		$code = $row['v_code'];

		if($v_code == $code) {

			$update = mysqli_query($conn, "UPDATE household_head SET verified='True' WHERE household_Id='$household_Id'");
			if($update) {
				$_SESSION['household_Id'] = $household_Id;
				$_SESSION['message'] = "You have successfully verified your email.";
				$_SESSION['text'] = "Email verification successful!";
				$_SESSION['status'] = "success";
				header('Location: email_verification.php?sectorial_registrations='.$sector.'&&h_ID='.$household_Id.'&&email='.$email.'&&key='.$v_code.'');
			} else {
				$_SESSION['message'] = "Something went wrong.";
				$_SESSION['text'] = "Error";
				$_SESSION['status'] = "error";
				header('Location: email_verification.php?h_ID='.$household_Id.'&&email='.$email.'&&key='.$v_code.'');
			}
		} else {
			$_SESSION['message'] = "Something went wrong.";
			$_SESSION['text'] = "Error";
			$_SESSION['status'] = "error";
			header('Location: email_verification.php?h_ID='.$household_Id.'&&email='.$email.'&&key='.$v_code.'');
		}
	}		








		
?>


