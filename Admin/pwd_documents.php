<title>PWD Documents</title>
<?php 
  include 'navbar.php'; 


  if(isset($_GET['household_Id']))
    $household_Id = $_GET['household_Id'];

  $doc = mysqli_query($conn, "SELECT * FROM documents_pwd WHERE household_Id='$household_Id'");
  $row_doc = mysqli_fetch_array($doc);
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>PWD Documents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">PWD</li>
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
                      <big><strong>Copy of Disability</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Certification_of_Disability']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5">
                      <big><strong>Copy of Blood Type</strong></big>
                      <img src="../images-documents/<?php echo $row_doc['Blood_Type']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Copy of Body Picture</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Body_Picture']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Copy 2x2 ID Picture</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['ID_Picture']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Copy of Birth Certificate</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Copy_Birth_Certificate']; ?>" alt="" width="500">
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



