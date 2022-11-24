<title>Report</title>

<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 ">
            <!-- jquery validation -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-ce">Report</h3>
              </div>

              <h2 class="text-center mt-2"><b>MSWD SECTORS</b></h2>

              <div class="row d-flex justify-content-evenly p-3">


                <div class="col-lg-6 col-6">
                  <div class="small-box bg-info p-3">
                    <a href="senior_citizen.php">
                    <div class="inner">
                      
                      <?php

                        $a = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Senior Citizens,' AND account_status='Approved'");
                        $b = mysqli_num_rows($a);

                        $old_male = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Senior Citizens,' AND gender='Male'");
                        $row_old_male = mysqli_num_rows($old_male);

                        $old_female = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Senior Citizens,' AND gender='Female'");
                        $row_old_female = mysqli_num_rows($old_female);

                        $total = 7147;
                        $male = $row_old_male/$total*100;
                        $female = $row_old_female/$total*100;

                       ?>
                     
                      <span style="font-size: 15px;">Updated list as of March 31, 2022</span>
                      <h4><b>SENIOR CITIZENS</b></h4>
                      <hr>
                      <p><b>Male:</b> <?php echo number_format((float)$male, 2, '.', ''); ?> %</p>
                          <p><b>Female:</b> <?php echo number_format((float)$female, 2, '.', ''); ?> %</p>
                          <p><b>Total:</b> <?php echo $b; ?></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    </a>
                  </div>
                </div>




                <div class="col-lg-6 col-6">
                  <div class="small-box bg-warning p-3">
                    <a href="solo_parent.php">
                    <div class="inner">
                      <?php

                        $c = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Solo Parent,' AND account_status='Approved'");
                        $d = mysqli_num_rows($c);

                        $old_male = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Solo Parent,' AND gender='Male'");
                        $row_old_male = mysqli_num_rows($old_male);

                        $old_female = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'Solo Parent,' AND gender='Female'");
                        $row_old_female = mysqli_num_rows($old_female);

                        $total = 206;
                        $male = $row_old_male/$total*100;
                        $female = $row_old_female/$total*100;

                       ?>
                      <span style="font-size: 15px;">Updated list as of March 31, 2022</span>
                      <h4><b>SOLO PARENTS</b></h4>
                      <hr>
                      <p><b>Male:</b> <?php echo number_format((float)$male, 2, '.', ''); ?> %</p>
                          <p><b>Female:</b> <?php echo number_format((float)$female, 2, '.', ''); ?> %</p>
                          <p><b>Total:</b> <?php echo $d; ?></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    </a>
                  </div>
                </div>





                <div class="col-lg-6 col-6">
                  <div class="small-box bg-success p-3">
                    <a href="pwd.php">
                    <div class="inner">
                      <?php

                        $e = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'PWD,' AND account_status='Approved'");
                        $f = mysqli_num_rows($e);

                        $old_male = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'PWD,' AND gender='Male'");
                        $row_old_male = mysqli_num_rows($old_male);

                        $old_female = mysqli_query($conn, "SELECT household_Id from household_head WHERE sectorial_registration LIKE 'PWD,' AND gender='Female'");
                        $row_old_female = mysqli_num_rows($old_female);

                        $total = 1460;
                        $male = $row_old_male/$total*100;
                        $female = $row_old_female/$total*100;

                       ?>
                      <span style="font-size: 15px;">Updated list as of March 31, 2022</span>
                      <h4><b>PERSONS WITH DISABILITIES</b></h4>
                      <hr>
                      <p><b></b></p>
                      <p><b>Male:</b> <?php echo number_format((float)$male, 2, '.', ''); ?> %</p>
                          <p><b>Female:</b> <?php echo number_format((float)$female, 2, '.', ''); ?> %</p>
                          <p><b>Total:</b> <?php echo $f; ?></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    </a>
                  </div>
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