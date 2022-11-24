<title>Senior Citizen Documents</title>
<?php 
  include 'navbar.php'; 


  if(isset($_GET['household_Id']))
    $household_Id = $_GET['household_Id'];

  $doc = mysqli_query($conn, "SELECT * FROM documents_senior WHERE household_Id='$household_Id'");
  $row_doc = mysqli_fetch_array($doc);
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Senior Citizen Documents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Senior Citizen</li>
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
                      <big><strong>Birth Certificate</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Birth_certificate']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5">
                      <big><strong>Marriage Contract</strong></big>
                      <img src="../images-documents/<?php echo $row_doc['Marriage_contract']; ?>" alt="" width="500">
                    </div>


                     <div class="col-md-6 mb-5 mt-4">
                      <big><strong>Valid ID</strong></big>
                    <img src="../images-documents/<?php echo $row_doc['Valid_Id']; ?>" alt="" width="500">
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



