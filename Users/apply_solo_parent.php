<title>Solo Parent Application</title>
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
                  <div class="col-md-6">
                    <ul class="">
                      <li>
                        <h6>Application Form Solo Parent Profile | % Na May Kumpletong impormasyon, May ID 2x2 ID Picture At Lagda</h6>
                      </li>
                      <li>
                        <h6>Barangay Certification of Residency Residency | 6 Na Buwan Na Residente Pataas</h6>
                      </li>
                      <li>
                        <h6>Punong Barangay Certification Na Nakasaad Na Ikaw ay Solo Parent</h6>
                      </li>
                      <li>
                        <h6>Salaysay Na Ikaw Ay Walang Kinakasama Sa Kasalukuyan (Witness Si Punong Barangay At Kagawad On Social Services)</h6>
                      </li>
                      <li>
                        <h6>Kopya Ng Birth Certificate Ng Anak Ng Below 18 Years Old At Anak Na Kahit Lampas Na 18 Years Old Basta May Malubhang Kapansanan (Registered PWD Na Nasa Iyong Custodiya)</h6>
                      </li>
                      <li>
                        <h6>Mamili Lang Po Ng Isa (1) Lamang Sa Mga Sumusunod Kung Ano Ang Applicable Sa Inyo;</h6>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <p>- Death Certificate Ng Inyong Asawa Kung Kayo ay Balo</p>
                    <p>- Kopya Ng Court Decition Kung Kayo Po Ay Annulled</p>
                    <p>- Koypa ng Court Decition Kung Kayo Po Ay Legally Separated</p>
                    <p>- Medical Certificate Kung Ang Inyong Asawa OR Ama/Ina Ng Inyong Mga Anak Ay May Kapansanan Sa Pag-iisip</p>
                    <p>- Kopya ng Court Order Or Certification Galing Ahensiya Kung Saan Nakapiit/Nakakulong Ang Inyong Asawa</p>
                    <p>- MSWDO Certification Kung Kayo Ay May Inaalagaan Or Mga Naiwang Mga Bata Sa Inyong Puder Kustodiya (Kailangan Po Muna Ng Assessment At Endorsement Ng MSWD Social Workers Bago Po Mabigyan Ng MSWD Certification)</p>
                    <ul>
                      <li>
                        <h6>Barangay Treasurer's Certification Na Ikaw Ay Mas Mababa Sa Php 9,200.00 Family Income (Family Of Members) Na Nasa Iisang Bahay At Walang Pag-aaring Lupain At Sasakyan.</h6>
                      </li>
                    </ul>
                  </div>


                
                </div>
                <form action="process_save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2" style="width: 50%; direction: block;margin-left: auto;margin-right: auto;">
                  <input type="hidden" class="form-control" name="household_Id" value="<?php echo $id; ?>">
                  <label for="">Attach File (ID for verification)</label>
                  <input type="file" class="form-control" name="fileToUpload" required>
                </div>

                <div class="form-group" style="width: 50%; direction: block;margin-left: auto;margin-right: auto;">
                  <button class="btn btn-primary" type="submit" name="save_solo">Submit</button>
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

