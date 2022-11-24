<title>Solo Parent Application</title>
<?php include 'navbar.php';  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solo Parent Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Solo Parent Application</li>
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
                <h3 class="card-title">Requirements in applying for Solo Parent</h3>
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
                        <label for="">Upload ID(2x2 ID Picture)</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="IDupload">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">   
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Upload Barangay Certification of Residency Residency</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Residency">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Upload Punong Barangay Certification</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Certification">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Upload Salaysay Na Ikaw Ay Walang Kinakasama Sa Kasalukuyan</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Salaysay">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Upload Kopya Ng Birth Certificate Ng Anak Ng Below 18 Years Old At Anak Na Kahit Lampas Na 18 Years Old Basta May Malubhang Kapansanan</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Kopya">Submit</button>
                      </form>
                      <br>

                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Mamili Lang Po Ng Isa (1) Lamang Sa Mga Sumusunod Kung Ano Ang Applicable Sa Inyo;</label>
                        <br>
                        <small>- Death Certificate Ng Inyong Asawa Kung Kayo ay Balo</small>
                        <br>
                        <small>- Kopya Ng Court Decition Kung Kayo Po Ay Annulled</small>
                        <br>
                        <small>- Koypa ng Court Decition Kung Kayo Po Ay Legally Separated</small>
                        <br>
                        <small>- Medical Certificate Kung Ang Inyong Asawa OR Ama/Ina Ng Inyong Mga Anak Ay May Kapansanan Sa Pag-iisip</small>
                        <br>
                        <small>- Kopya ng Court Order Or Certification Galing Ahensiya Kung Saan Nakapiit/Nakakulong Ang Inyong Asawa</small>
                        <br>
                        <small>- MSWDO Certification Kung Kayo Ay May Inaalagaan Or Mga Naiwang Mga Bata Sa Inyong Puder Kustodiya (Kailangan Po Muna Ng Assessment At Endorsement Ng MSWD Social Workers Bago Po Mabigyan Ng MSWD Certification)</small>
                        <br>

                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="choices">Submit</button>
                      </form>
                      <br>


                      <form action="process_save.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                        <label for="">Barangay Treasurer's Certification Na Ikaw Ay Mas Mababa Sa Php 9,200.00 Family Income (Family Of Members) Na Nasa Iisang Bahay At Walang Pag-aaring Lupain At Sasakyan</label>
                        <input type="file" class="form-control" name="fileToUpload" required>
                        <button class="btn btn-primary mt-1" type="submit" name="Treasurer">Submit</button>
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

