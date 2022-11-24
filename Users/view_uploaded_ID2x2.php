<title>Uploaded ID</title>
<?php include 'navbar.php';  ?>

<?php  
    if(isset($_GET['household_Id']))
      $household_Id = $_GET['household_Id'];

    $fetch = mysqli_query($conn, "SELECT * FROM documents WHERE household_Id='$household_Id'");
    $row_fetch = mysqli_fetch_array($fetch);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Uploaded ID (2x2)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Uploaded ID (2x2)</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Uploaded ID(2x2)</h3>
              </div>
             
              <?php if($row_fetch['ID_2'] == ' '): ?>
                <h3 class="p-3">You haven't uploaded an ID(2x2) yet.</h3>
                <p style="margin-left: 20px;"><a href="upload_ID.php?household_Id=<?php echo $household_Id; ?>">Click here</a> to upload.</p>
              <?php else: ?>
              <img src="../images-documents/<?php echo $row_fetch['ID_2']; ?>" alt="" style="width: 1000px;padding: 20px 20px; display: block;margin-left: auto;margin-right: auto;">
            <?php endif; ?>
              
             <div style="margin-left: 50px;">
               <?php if($row_fetch['ID_2'] != ""): ?>
                <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#update<?php echo $household_Id; ?>">Update</button>
               <?php endif; ?>
               
             </div>
             <br>
            <?php include 'view_uploaded_ID2x2_update.php'; ?>
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
<br>


  <?php include 'footer.php'; ?>
 
</body>
</html>

<script>
   function updategetImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('updatepreview');
    var newimg=document.createElement('img');
    var text=document.createElement('p');
    text.innerHTML='Image preview';
    text.style['position']="relative";
    text.style['margin-left']="175px";
    text.style['margin-top']="10px";
    text.style['font-weight']="bold";
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
    imagediv.appendChild(text);
  }
</script>