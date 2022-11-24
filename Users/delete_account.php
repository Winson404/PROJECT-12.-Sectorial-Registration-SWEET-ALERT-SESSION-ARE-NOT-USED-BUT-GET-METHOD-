<title>Account deletion | Template System</title>
<?php include 'navbar.php'; ?>

<?php 

    $f = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$id'");
    $r_f = mysqli_fetch_array($f);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account deletion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Account deletion</li>
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
            <div class="card card-light p-3">
              <div class="card-header">
                <h3 class="card-title">Account deletion</h3>
              </div>
                
                <div class="d-flex justify-content-center mt-4 mb-4">
                  <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteaccount">Delete account?</button>
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
    <?php include 'add_feedback.php'; ?>

  <?php include 'footer.php'; ?>
 
</body>
</html>
