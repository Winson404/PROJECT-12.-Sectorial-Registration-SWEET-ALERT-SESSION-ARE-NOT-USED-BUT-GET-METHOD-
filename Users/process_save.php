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



// *********************************************************************************************************************************

        // SOLO PARENT APPLICATION
          if(isset($_POST['IDupload'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

                 $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET ID_2='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {


              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, ID_2)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }










        // SOLO PARENT APPLICATION
          if(isset($_POST['Residency'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

                $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET Barangay_Certification='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                 
               $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, Barangay_Certification)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }







      // SOLO PARENT APPLICATION
          if(isset($_POST['Certification'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {
                $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET Punong_Barangay='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                  

                $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, Punong_Barangay)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }





        // SOLO PARENT APPLICATION
          if(isset($_POST['Salaysay'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

                   $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET Walang_Kinakasama='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                 

              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, Walang_Kinakasama)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }









        // SOLO PARENT APPLICATION
          if(isset($_POST['Kopya'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

                $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET Certificate_Ng_Anak='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                  
              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, Certificate_Ng_Anak)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }









        // SOLO PARENT APPLICATION
          if(isset($_POST['Treasurer'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

               $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET Treasurer_Certification='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                  
               $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, Treasurer_Certification)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }







        // SOLO PARENT APPLICATION
          if(isset($_POST['choices'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $okay = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id = '$id'");
           if(mysqli_num_rows($okay) > 0) {

               $b = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$id' AND (ID_2 = '' || Barangay_Certification = '' || Punong_Barangay = '' || Walang_Kinakasama = '' || Certificate_Ng_Anak = '' || certificate_choices = '' || Treasurer_Certification = '' || ID_2 != '' || Barangay_Certification != '' || Punong_Barangay != '' || Walang_Kinakasama != '' || Certificate_Ng_Anak != '' || certificate_choices != '' || Treasurer_Certification != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_ID.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_ID.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents SET certificate_choices='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_ID.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
            
           }else {

                 

                $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_ID.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents (household_Id, certificate_choices)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_ID.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_ID.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_ID.php?household_Id='.$id.''); 
                      }
                  }
           }
        }




// *********************************************************************************************************************************














// *********************************************************************************************************************************

        // PWD APPLICATION
          if(isset($_POST['Certification_of_Disability'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id = '$id'");
           if(mysqli_num_rows($a) > 0) {

                 $b = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$id' AND (Certification_of_Disability = '' || Blood_Type = '' || Body_Picture = '' || ID_Picture = '' || Copy_Birth_Certificate = '' || Certification_of_Disability != '' || Blood_Type != '' || Body_Picture != '' || ID_Picture != '' || Copy_Birth_Certificate != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_pwd SET Certification_of_Disability='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                 

              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_pwd (household_Id, Certification_of_Disability)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }







        
        // PWD APPLICATION
          if(isset($_POST['Blood_Type'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

                   $b = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$id' AND (Certification_of_Disability = '' || Blood_Type = '' || Body_Picture = '' || ID_Picture = '' || Copy_Birth_Certificate = '' || Certification_of_Disability != '' || Blood_Type != '' || Body_Picture != '' || ID_Picture != '' || Copy_Birth_Certificate != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_pwd SET Blood_Type='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

               



              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_pwd (household_Id, Blood_Type)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }






        // PWD APPLICATION
          if(isset($_POST['Body_Picture'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

                 $b = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$id' AND (Certification_of_Disability = '' || Blood_Type = '' || Body_Picture = '' || ID_Picture = '' || Copy_Birth_Certificate = '' || Certification_of_Disability != '' || Blood_Type != '' || Body_Picture != '' || ID_Picture != '' || Copy_Birth_Certificate != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_pwd SET Body_Picture='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }
                

           } else {

                 


              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_pwd (household_Id, Body_Picture)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }





        // PWD APPLICATION
          if(isset($_POST['ID_Picture'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

               $b = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$id' AND (Certification_of_Disability = '' || Blood_Type = '' || Body_Picture = '' || ID_Picture = '' || Copy_Birth_Certificate = '' || Certification_of_Disability != '' || Blood_Type != '' || Body_Picture != '' || ID_Picture != '' || Copy_Birth_Certificate != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_pwd SET ID_Picture='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                 



                $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_pwd (household_Id, ID_Picture)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }




        // PWD APPLICATION
          if(isset($_POST['Copy_Birth_Certificate'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

                    $b = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$id' AND (Certification_of_Disability = '' || Blood_Type = '' || Body_Picture = '' || ID_Picture = '' || Copy_Birth_Certificate = '' || Certification_of_Disability != '' || Blood_Type != '' || Body_Picture != '' || ID_Picture != '' || Copy_Birth_Certificate != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_PWD_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_pwd SET Copy_Birth_Certificate='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                



              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_pwd (household_Id, Copy_Birth_Certificate)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_PWD_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }
     
// *********************************************************************************************************************************













// *********************************************************************************************************************************


        // SENIOR APPLICATION
          if(isset($_POST['Birth_certificate'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

               $b = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id='$id' AND (Birth_certificate = '' || Marriage_contract = '' || Valid_Id = '' || Birth_certificate != '' || Marriage_contract != '' || Valid_Id != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_senior SET Birth_certificate='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                  

               $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_senior (household_Id, Birth_certificate)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }




     



        // SENIOR APPLICATION
          if(isset($_POST['Marriage_contract'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

                $b = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id='$id' AND (Birth_certificate = '' || Marriage_contract = '' || Valid_Id = '' || Birth_certificate != '' || Marriage_contract != '' || Valid_Id != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_senior SET Marriage_contract='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                  
              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_senior (household_Id, Marriage_contract)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }









          // SENIOR APPLICATION
          if(isset($_POST['Valid_Id'])) {

           $id   = $_POST['household_Id'];
           $file = basename($_FILES["fileToUpload"]["name"]);

           $a = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id = '$id' ");
           if(mysqli_num_rows($a) > 0) {

                $b = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id='$id' AND (Birth_certificate = '' || Marriage_contract = '' || Valid_Id = '' || Birth_certificate != '' || Marriage_contract != '' || Valid_Id != '')");
                  if(mysqli_num_rows($b) > 0) {

                  // Check if image file is a actual image or fake image
                  $target_dir = "../images-documents/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');     
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header('Location: upload_senior_documents.php?household_Id='.$id.'');    
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $udpate = mysqli_query($conn, "UPDATE documents_senior SET Valid_Id='$file' WHERE household_Id='$id'");
                            if($udpate) {
                              $_SESSION['success']  = "File has been uploaded.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.'');        
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                    }
              } else {

              }

           } else {

                  
              $target_dir = "../images-documents/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                 header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                             $save = mysqli_query($conn, "INSERT INTO documents_senior (household_Id, Valid_Id)  VALUES ('$id', '$file')");
                            if($save) {
                              $_SESSION['success']  = "File has been uploaded.";
                              header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            } else {
                              $_SESSION['exists'] = "Something went wrong. Please try again.";
                             header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header('Location: upload_senior_documents.php?household_Id='.$id.''); 
                      }
                  }
           }
        }



// *********************************************************************************************************************************



?>



