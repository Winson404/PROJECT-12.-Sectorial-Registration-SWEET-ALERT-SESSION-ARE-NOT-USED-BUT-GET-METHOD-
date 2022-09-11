<title>PWD Application</title>
<?php include 'navbar.php';  ?>

<?php  
    // if(isset($_GET['household_Id']))
    //   $household_Id = $_GET['household_Id'];

    // $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
    // $row_fetch = mysqli_fetch_array($fetch);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PWD Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">PWD Application</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary"  style="min-height: 78vh;">
              <div class="card-header">
                <h3 class="card-title">Requirements in applying for Persons with disabilities(PWD)</h3>
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
                
                
                <div class="d-flex justify-content-center mt-4">
                  <ul class="">
                  <li>
                    <h4>1 Copy Certification of Disability (MHO)</h4>
                  </li>
                  <li>
                    <h4>1 Copy Blood Type (MHO)</h4>
                  </li>
                  <li>
                    <h4>1 Copy Whole Body Picture</h4>
                  </li>
                  <li>
                    <h4>1 Copy 2x2 ID Picture</h4>
                  </li>
                  <li>
                    <h4>1 Copy Birth Certificate</h4>
                  </li>
                </ul>


                <form action="process_save.php" method="POST" enctype="multipart/form-data">
                </div>
                <div class="form-group mt-5" style="width: 50%; direction: block;margin-left: auto;margin-right: auto;">
                  <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                  <label for="">Attach File (ID for verification)</label>
                  <input type="file" class="form-control" name="fileToUpload" required>
                </div>

                <div class="form-group" style="width: 50%; direction: block;margin-left: auto;margin-right: auto;">
                  <button class="btn btn-primary" type="submit" name="upload">Submit</button>
                </div>
                </form>
           
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



  <?php include 'footer.php'; ?>
 
</body>
</html>

