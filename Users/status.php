<title>Account Status | Template System</title>
<?php include 'navbar.php'; ?>

<?php 

    $f = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$id'");
    $r_f = mysqli_fetch_array($f);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Status</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Account Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center d-flex">
          <!-- left column -->
          <div class="col-lg-8">
            <!-- jquery validation -->
            <div class="card card-primary p-3">
              <div class="card-header">
                <h3 class="card-title">Account Status</h3>
              </div>
                <?php if(isset($_SESSION['success'])) { ?> 
                    <p class="alert alert-success position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['success']; ?></p> 
                <?php unset($_SESSION['success']); } ?>

                <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                    <p class="alert alert-danger position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></p>
                <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


                <?php  if(isset($_SESSION['exists'])) { ?>
                    <p class="alert alert-danger position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['exists']; ?></p>
                <?php unset($_SESSION['exists']); } ?>
              <!-- /.card-header -->
              <!-- form start -->
              
                <?php if($r_f['account_status'] == 'Approved'): ?>
                    <hr>
                    <h3>Your account has been <b>approved.</b></h3>
                 <?php 
                    elseif($r_f['account_status'] == 'Declined'): 
                    $fetch_reason = mysqli_query($conn, "SELECT * FROM reason WHERE household_Id='$id'");
                    $reason_text = mysqli_fetch_array($fetch_reason);
                 ?>
                    <hr>
                    <h3><?php echo $reason_text['reason']; ?></h3>
                <?php else: ?>
                  <hr>
                  <h3>Your account is <b>Pending</b> in status.</h3>
                <?php endif; ?>


            </div>
            <!-- /.card -->
         </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <?php include 'settings_edit.php'; ?>

  <?php include 'footer.php'; ?>
 
</body>
</html>
