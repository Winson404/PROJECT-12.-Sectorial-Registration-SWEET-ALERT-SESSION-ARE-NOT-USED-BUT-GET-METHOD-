<title>PWD Application</title>
<?php include 'navbar.php';  ?>


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
                <h3 class="card-title">Requirements in applying for PWD</h3>
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
                        <label for="">Copy Certification of Disability (MHO)</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Certification_of_Disability">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">   
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Copy Blood Type (MHO)</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Blood_Type">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Copy Whole Body Picture</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Body_Picture">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Copy 2x2 ID Picture</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="ID_Picture">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Copy Birth Certificate</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Copy_Birth_Certificate">Submit</button>
                      </form>
                      <br>

                    
                  </div>
               
                </div>
           
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

