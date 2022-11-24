<title>Dashboard</title>

<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row d-flex justify-content-evenly">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $new = mysqli_query($conn, "SELECT household_Id from household_head WHERE application_type LIKE 'New,'");
                  $row_new = mysqli_num_rows($new);
                 ?>
                <h3><?php echo $row_new; ?></h3>

                <p>New Applicants</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pending_applicants.php" class="small-box-footer">Total applicants</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $old = mysqli_query($conn, "SELECT household_Id from household_head WHERE application_type LIKE 'Old,'");
                  $row_old = mysqli_num_rows($old);
                 ?>
                <h3><?php echo $row_old; ?></h3>

                <p>Old Applicants</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>
         

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $renewal = mysqli_query($conn, "SELECT household_Id from household_head WHERE application_type LIKE 'Renewal,'");
                  $row_renewal = mysqli_num_rows($renewal);
                 ?>
                <h3><?php echo $row_renewal; ?></h3>

                <p>Renewal Applicants</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pending_applicants_renew.php" class="small-box-footer">Total applicants</a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  $total = mysqli_query($conn, "SELECT household_Id from household_head");
                  $row_total = mysqli_num_rows($total);
                 ?>
                <h3><?php echo $row_total; ?></h3>

                <p>Total Applicants</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $solo = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Solo Parent,'");
                  $row_solo = mysqli_num_rows($solo);
                 ?>
                <h3><?php echo $row_solo; ?></h3>

                <p>Solo Parents</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $pwd = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'PWD,'");
                  $row_pwd = mysqli_num_rows($pwd);
                 ?>
                <h3><?php echo $row_pwd; ?></h3>

                <p>Person's With Disabilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $senior = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Senior Citizens,'");
                  $row_senior = mysqli_num_rows($senior);
                 ?>
                <h3><?php echo $row_senior; ?></h3>

                <p>Senior Citizen</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  $senior = mysqli_query($conn, "SELECT household_Id from household_head WHERE gender ='Male'");
                  $row_senior = mysqli_num_rows($senior);
                 ?>
                <h3><?php echo $row_senior; ?></h3>

                <p>Male</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $senior = mysqli_query($conn, "SELECT household_Id from household_head WHERE gender ='Female'");
                  $row_senior = mysqli_num_rows($senior);
                 ?>
                <h3><?php echo $row_senior; ?></h3>

                <p>Female</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $senior = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'PWD,' AND age <=17");
                  $row_senior = mysqli_num_rows($senior);
                 ?>
                <h3><?php echo $row_senior; ?></h3>

                <p>Children</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total applicants</a>
            </div>
          </div>



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $admin = mysqli_query($conn, "SELECT admin_Id from admin");
                  $row_admin = mysqli_num_rows($admin);
                 ?>
                <h3><?php echo $row_admin; ?></h3>

                <p>Administrators</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Total administrators</a>
            </div>
          </div>


        </div>
        <!-- /.row -->
        <!-- Main row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 


 <?php include 'footer.php'; ?>