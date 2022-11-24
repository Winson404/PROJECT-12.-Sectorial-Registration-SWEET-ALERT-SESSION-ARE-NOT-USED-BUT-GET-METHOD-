<title>Person's With Disabilities</title>


<?php 

  include 'navbar.php'; 
?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Person's With Disabilities</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Person's With Disabilities</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_user"><i class="bi bi-plus-circle"></i> Add</button> -->
                  <span class="text-white">g</span>
                  <?php if(isset($_SESSION['success'])) { ?> 
                      <h3 class="alert card-title position-absolute py-2 alert-success rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['success']; ?></h3>
                  <?php unset($_SESSION['success']); } ?>


                  <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></h3>
                  <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


                  <?php  if(isset($_SESSION['exists'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['exists']; ?></h3>
                  <?php unset($_SESSION['exists']); } ?>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Full name</th>
                    <th>Contact</th>
                    <th>Categories</th>
                    <th>Application type</th>
                    <th>Approve / Declined</th>
                    <th>Tools</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM household_head WHERE sectorial_registration LIKE 'PWD,' AND action='Restore' AND account_status='Approved'");
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                       
                        <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '; ?></td>
                        <td><?php echo $row['contact_number']; ?></td>
                        <td><?php echo $row['causeofbeingsoloparent']; ?></td>
                        <td><?php echo str_replace(',', '', $row['application_type']); ?></td>
                         <td>

                          <?php if($row['account_status'] == 'Pending'): ?>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#approve<?php echo $row['household_Id']; ?>"><i class="fa-solid fa-thumbs-up"></i></button>
                          \
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declined<?php echo $row['household_Id']; ?>"><i class="fa-solid fa-thumbs-down"></i></button>
                            
                          <?php elseif($row['account_status'] == 'Approved'): ?>
                              <span class="badge badge-primary rounded-pill"><?php echo $row['account_status']; ?></span>
                          <?php else :?>  
                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#approve<?php echo $row['household_Id']; ?>"><i class="fa-solid fa-thumbs-up"></i></button>
                          \
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declined<?php echo $row['household_Id']; ?>"><i class="fa-solid fa-thumbs-down"></i></button>
                          <?php endif; ?>
                        <td>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view<?php //echo $row['household_Id']; ?>"><i class="fa-solid fa-eye"></i></button> -->
                            <a href="pwd_print.php?household_Id=<?php echo $row['household_Id']; ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            <a href="pwd_update.php?household_Id=<?php echo $row['household_Id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php //echo $row['household_Id']; ?>"><i class="fa-solid fa-trash-can"></i></button>   -->
                            <a href="pwd_documents.php?household_Id=<?php echo $row['household_Id']; ?>" class="btn btn-info"><i class="fa-solid fa-file"></i></a>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#archive<?php echo $row['household_Id']; ?>"><i class="fa-solid fa-box-archive"></i></button> 
                        </td>  
                    </tr>

                    <?php include 'pwd_delete.php'; include 'view_record.php'; } ?>
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Full name</th>
                        <th>Contact</th>
                        <th>Categories</th>
                        <th>Application type</th>
                        <th>Approve / Declined</th>
                        <th>Tools</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


 <?php include 'footer.php'; ?>
