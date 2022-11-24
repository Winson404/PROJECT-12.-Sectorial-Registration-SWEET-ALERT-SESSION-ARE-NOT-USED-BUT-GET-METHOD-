<title>Solo Parent Documents</title>
<?php 
  include 'navbar.php'; 


  if(isset($_GET['household_Id']))
    $household_Id = $_GET['household_Id'];

  $doc = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$household_Id'");
  $row_doc = mysqli_fetch_array($doc);
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Solo Parent Documents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Solo Parent Documents</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                
                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <big><strong>ID (2x2)</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['ID_2']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5">
                      <big><strong>Barangay Certification of Residency Residency</strong></big>
                      <img src="../images-documents/<?php echo $row_doc['Barangay_Certification']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Punong Barangay Certification Na Nakasaad Na Ikaw ay Solo Parent</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Punong_Barangay']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Salaysay Na Ikaw Ay Walang Kinakasama Sa Kasalukuyan</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Walang_Kinakasama']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Kopya Ng Birth Certificate Ng Anak Ng Below 18 Years Old At Anak Na Kahit Lampas Na 18 Years Old Basta May Malubhang Kapansanan</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Certificate_Ng_Anak']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Barangay Treasurer's Certification</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Treasurer_Certification']; ?>" alt="" width="500">
                    </div>


                    <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Other certificates</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['certificate_choices']; ?>" alt="" width="500">
                    </div>
                  </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


 <?php include 'footer.php'; ?>
