<title>Senior Citizen Application</title>
<?php include 'navbar.php';  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Senior Citizen Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Senior Citizen Application</li>
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
                <h3 class="card-title">Requirements in applying for Senior Citizen</h3>
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
                
                <div class="row mt-4">
                  <div class="col-md-12 p-3">
                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Birth Certificate</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Birth_certificate">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">   
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Marriage Contract</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Marriage_contract">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Valid ID</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Valid_Id">Submit</button>
                      </form>
                      <br>
                  </div>
                </div>
            </div>
         </div>
        </div>
      </div>
    </section>
  </div>


  <?php include 'footer.php'; ?>
 
</body>
</html>

