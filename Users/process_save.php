<?php 

		session_start();
		include '../config.php';

		if(isset($_POST['upload'])) {
			$id   = $_POST['household_Id'];
			$file = basename($_FILES["fileToUpload"]["name"]);

      $fetch = mysqli_query($conn, "SELECT * FROM uploaded_file WHERE image != '' AND Upload_household_Id='$id'");
      if(mysqli_num_rows($fetch) > 0) {


          // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_pwd.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_pwd.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE uploaded_file SET image='$file' WHERE Upload_household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_pwd.php?household_Id='.$id.'');                       
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_pwd.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_pwd.php?household_Id='.$id.'');
                      }
         }



      } else {


        // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_pwd.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_pwd.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "INSERT INTO uploaded_file (Upload_household_Id, image) VALUES ('$id', '$file')");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_pwd.php?household_Id='.$id.'');                     
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_pwd.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_pwd.php?household_Id='.$id.'');
                      }
         }



      }
		
        }






        // SAVE SOLO PARENT APPLICATION
      if(isset($_POST['save_solo'])) {
      $id   = $_POST['household_Id'];
      $file = basename($_FILES["fileToUpload"]["name"]);

      $fetch = mysqli_query($conn, "SELECT * FROM uploaded_file WHERE image != '' AND Upload_household_Id='$id'");
      if(mysqli_num_rows($fetch) > 0) {


          // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_solo_parent.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_solo_parent.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE uploaded_file SET image='$file' WHERE Upload_household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_solo_parent.php?household_Id='.$id.'');                         
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_solo_parent.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_solo_parent.php?household_Id='.$id.'');
                      }
         }



      } else {


        // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_solo_parent.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_solo_parent.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "INSERT INTO uploaded_file (Upload_household_Id, image) VALUES ('$id', '$file')");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_solo_parent.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_solo_parent.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_solo_parent.php?household_Id='.$id.'');
                      }
         }



      }
    
        }







         // SAVE SENIOR CITIZEN APPLICATION
      if(isset($_POST['apply_senior'])) {
      $id   = $_POST['household_Id'];
      $file = basename($_FILES["fileToUpload"]["name"]);

      $fetch = mysqli_query($conn, "SELECT * FROM uploaded_file WHERE image != '' AND Upload_household_Id='$id'");
      if(mysqli_num_rows($fetch) > 0) {


          // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_senior.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_senior.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "UPDATE uploaded_file SET image='$file' WHERE Upload_household_Id='$id'");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_senior.php?household_Id='.$id.'');                              
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_senior.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_senior.php?household_Id='.$id.'');
                      }
         }



      } else {


        // Check if image file is a actual image or fake image
              $target_dir = "../images-uploaded/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: apply_senior.php?household_Id='.$id.'');
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: apply_senior.php?household_Id='.$id.'');
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      
                        $save = mysqli_query($conn, "INSERT INTO uploaded_file (Upload_household_Id, image) VALUES ('$id', '$file')");

                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: apply_senior.php?household_Id='.$id.'');                 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                              header('Location: apply_senior.php?household_Id='.$id.'');
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: apply_senior.php?household_Id='.$id.'');
                      }
         }



      }
    
        }








        if(isset($_POST['add_comment'])) {

            $household_Id = $_POST['household_Id'];
            $comment      = $_POST['comment'];
            $date         = $date = date('d-m-y');

            $save = mysqli_query($conn, "INSERT INTO message(message_household_Id, comment, date_added) VALUES('$household_Id', '$comment', '$date')");
            if($save) {
              echo "<script>
                           alert('Message sent succesfully.'); 
                           window.history.go(-1);
                   </script>";                           
            } else {
              echo "<script>
                           alert('Message not sent.'); 
                           window.history.go(-1);
                   </script>"; 
            }
        }

?>