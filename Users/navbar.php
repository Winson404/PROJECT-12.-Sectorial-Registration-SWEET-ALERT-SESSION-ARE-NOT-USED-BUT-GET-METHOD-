<?php

    session_start();
    include '../config.php';

    if(isset($_GET['household_Id'])) {
      $id = $_GET['household_Id'];


    // if(isset($_SESSION['household_Id'])) {
    //     $id = $_SESSION['household_Id'];

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MSWD</title>

  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="../images/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css"> -->
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../css/summernote-bs4.min.css">

  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- TOASTER -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  

  <!-- DataTables -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/buttons.bootstrap4.min.css">

  <script src="../js/bootstrap5-downloaded-ni-erwin/bootstrap.bundle.min.js" type="text/javascript"></script>
  <style>
  .modal-content{
    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -moz-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -o-box-shadow: 0 5px 15px rgba(0,0,0,0);
    box-shadow: 0 5px 15px rgba(0,0,0,0);
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  
<div class="wrapper">

  <!-- Preloader -->
 <!--  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="about_me2.php?household_Id=<?php // echo $id; ?>" class="nav-link">About me</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->

            <!-- Message Start -->

           <!--  <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->



            <!-- Message End -->


         <!--  </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->

      <li class="mt-1">
        <a class="mt-3">Today is <?php echo date("l"); ?> | <?php echo date("d, M Y"); ?></a>
      </li>

      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="modal" data-target="#add">
          <i class="far fa-envelope"></i>
        </a>
       
      </li>

      <?php 
        $fetch = mysqli_query($conn, "SELECT admin_reply_Id FROM admin_reply WHERE admin_household_Id='$id'");
        $row_msg = mysqli_num_rows($fetch);
        
      ?>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $row_msg; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $row_msg; ?> Notifications</span>
          <div class="dropdown-divider"></div>
          <?php 
          // $fetch_all = mysqli_query($conn, "SELECT * FROM admin_reply JOIN household_head ON admin_reply.admin_household_Id=household_head.household_Id ORDER BY admin_reply_Id DESC LIMIT 6");
          $fetch_all = mysqli_query($conn, "SELECT * FROM admin_reply JOIN admin ON admin_reply.admin_Id=admin.admin_Id ORDER BY admin_reply_Id DESC LIMIT 6");
          while ($row = mysqli_fetch_array($fetch_all)) {  
          ?>
          <a class="dropdown-item">
            <i class="fas fa-file mr-2"></i> <?php echo $row['firstname']; echo ' '; echo $row['lastname']; ?>
            <span class="float-right text-muted text-sm"><?php echo $row['date_added']; ?></span>
          </a>
        <?php } ?>
          <div class="dropdown-divider"></div>
          <a href="messages.php?household_Id=<?php  echo $id; ?>" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- FULL SCREEN -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- FULL SCREEN -->


      <!-- RIGHT SIDEBAR -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <!-- RIGHT SIDEBAR -->

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php?household_Id=<?php  echo $id; ?>" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">User</span>
    </a>

    <?php 
        $admin = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$id'");
        $row = mysqli_fetch_array($admin);
        $a   = $row['id_reference'];
        $b   = explode(",", $a);
    ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="../images-users/<?php //echo $row['image']; ?>" alt="User Image" style="height: 34px; width: 34px; border-radius: 50%;">
        </div> -->
        <div class="info">
          <a href="about_me.php?household_Id=<?php  echo $id; ?>" class="d-block"><?php echo ' '.$row['firstname'].' '.$row['lastname'].' '; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> -->

          <li class="nav-header">PROFILE</li>

           <li class="nav-item">
            <a href="status.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-hourglass-start"></i>
              <p>
                &nbsp;&nbsp; Account Status
              </p>
            </a>
          </li>

          <?php if($row['sectorial_registration'] == 'Solo Parent,'): ?>

          <li class="nav-item">
            <a href="about_me2.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>
                &nbsp;&nbsp; About me
              </p>
            </a>
          </li>
        <?php elseif($row['sectorial_registration'] == 'Senior Citizens,'): ?>

           <li class="nav-item">
            <a href="about_me3.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>
                &nbsp;&nbsp; About me
              </p>
            </a>
          </li>

          <?php else: ?>

           <li class="nav-item">
            <a href="about_me4.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>
                &nbsp;&nbsp; About me
              </p>
            </a>
          </li>
        <?php endif; ?>

          <?php if($row['sectorial_registration'] == 'Solo Parent,'): ?>

            <li class="nav-header">FILE UPLOAD</li>
           <!--  <li class="nav-item">
              <a href="apply_solo_parent.php?household_Id=<?php  //echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Application for Solo Parent
                </p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="upload_ID.php?household_Id=<?php  echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Upload files
                </p>
              </a>
            </li>




          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-file"></i>
              <p>&nbsp;&nbsp; View uploaded documents<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_uploaded_ID2x2.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-id-card-clip"></i>
                  <p>&nbsp;&nbsp; ID (2x2)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Barangay_Certification.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Certification of Residency</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Punong_Barangay.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Certification for Solo Parent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Walang_Kinakasama.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Salaysay Na Ikaw Ay Walang Kinakasama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Certificate_Ng_Anak.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Kopya Ng Birth Certificate Ng Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_treasures_certification.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Barangay Treasurer's Certification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_certificate_choices.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Other certification</p>
                </a>
              </li>
            </ul>
          </li>
          




          <?php elseif($row['sectorial_registration'] == 'Senior Citizens,'): ?>

            <li class="nav-header">FILE UPLOAD</li>
            <!-- <li class="nav-item">
              <a href="apply_senior.php?household_Id=<?php  //echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Application for Senior Citizen
                </p>
              </a>
            </li>


 -->

             <li class="nav-item">
              <a href="upload_senior_documents.php?household_Id=<?php  echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Upload files
                </p>
              </a>
            </li>


            <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-file"></i>
              <p>&nbsp;&nbsp; View uploaded documents<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_uploaded_Birth_certificate.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Birth Certificate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Marriage_contract.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-file-contract"></i>
                  <p>&nbsp;&nbsp; Marriage contract</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Valid_Id.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-id-card-clip"></i>
                  <p>&nbsp;&nbsp; Valid ID</p>
                </a>
              </li>
             
            </ul>
          </li>





          <?php else: ?>

            <li class="nav-header">FILE UPLOAD</li>
            <!-- <li class="nav-item">
              <a href="apply_pwd.php?household_Id=<?php // echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Application for PWD
                </p>
              </a>
            </li>
 -->
            <li class="nav-item">
              <a href="upload_PWD_documents.php?household_Id=<?php  echo $id; ?>" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>
                  &nbsp;&nbsp; Upload files
                </p>
              </a>
            </li>


            <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-file"></i>
              <p>&nbsp;&nbsp; View uploaded documents<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_uploaded_Certification_of_Disability.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Copy Certification of Disability (MHO)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Blood_Type.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-id-card-clip"></i>
                  <p>&nbsp;&nbsp; Copy Blood Type (MHO)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Body_Picture.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Copy Whole Body Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_ID_Picture.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-id-card-clip"></i>
                  <p>&nbsp;&nbsp; Copy 2x2 ID Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_uploaded_Copy_Birth_Certificate.php?household_Id=<?php echo $row['household_Id']; ?>" class="nav-link text-light">
                  <i class="fa-solid fa-certificate"></i>
                  <p>&nbsp;&nbsp; Copy Birth Certificate</p>
                </a>
              </li>
              
            </ul>
          </li>




          <?php endif; ?>


          <!-- <li class="nav-item">
              <a href="view_uploaded_Id.php?household_Id=<?php //echo $row['household_Id']; ?>" class="nav-link">
                <i class="fa-solid fa-eye"></i>
                <p>
                  &nbsp;&nbsp; View Uploaded ID
                </p>
              </a>
            </li> -->


          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="settings.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-key"></i>
              <p>
                &nbsp;&nbsp; Settings and Privacy
              </p>
            </a>
          </li>
          

<!-- 
          <li class="nav-item">
            <a href="delete_account.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-trash-can"></i>
              <p>
                &nbsp;&nbsp; Delete Account
              </p>
            </a>
          </li>
                  

          <li class="nav-header">SECURITY</li>
          <li class="nav-item">
            <a href="changepassword.php?household_Id=<?php  echo $id; ?>" class="nav-link">
              <i class="fa-solid fa-key"></i>
              <p>
                &nbsp;&nbsp; Change password
              </p>
            </a>
          </li>




          

          

          <li class="nav-header">EXIT</li>
          <li class="nav-item">
            <a href="" data-toggle="modal" data-target="#logoutmodal" class="nav-link">
              <i class="fa-solid fa-power-off"></i>
              <p>
                &nbsp; Logout
              </p>
            </a>
          </li> -->
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-------------------------------LOGOUT MODAL------------------------------------>
      <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
             <div class="modal-header alert-light">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> User logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../logout.php" method="POST">
                <?php if($row['gender'] === 'Male'):?>
                    <h6>Mr.   <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php else: ?>
                    <h6>Ma'am <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php endif; ?>
            </div>
            <div class="modal-footer alert-light">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
              <button type="submit" class="btn btn-primary" name="delete_user"><i class="fa-solid fa-circle-check"></i> Confirm</button>
            </div>
              </form>
          </div>
        </div>
      </div>
  <!-------------------------------END LOGOUT MODAL-------------------------------->

<?php include 'add_feedback.php'; ?>
<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../login2.php');
    }
?>
