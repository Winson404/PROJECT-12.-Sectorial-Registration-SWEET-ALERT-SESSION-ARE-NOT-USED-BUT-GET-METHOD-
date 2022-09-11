<title>Account security | Template System</title>
<?php include 'navbar.php'; ?>

<?php 

    $f = mysqli_query($conn, "SELECT * FROM admin WHERE admin_Id='$id'");
    $r_f = mysqli_fetch_array($f);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings and Privacy</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Settings and Privacy</li>
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
                <h3 class="card-title">Personal And Account Information</h3>
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
              <table id="example1" class="table table-bordered">
                  <tr>
                    <th>Email Address
                      <p style="font-weight: normal;"><?php echo $r_f['email']; ?></p>
                    </th>
                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#email<?php echo $id; ?>">Edit</button></td>
                  </tr>
                  <tr>
                    <th>Phone Number
                      <p style="font-weight: normal;"><?php echo $r_f['contact']; ?></p>
                    </th>
                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#phone<?php echo $id; ?>">Edit</button></td>
                  </tr>
                  <tr>
                    <th>Birthday
                      <p style="font-weight: normal;"><?php echo $r_f['dob']; ?></p>
                    </th>
                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#dob<?php echo $id; ?>">Edit</button></td>
                  </tr>
                </table>
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
