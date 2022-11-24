<title>Profile</title>
<?php
    include 'navbar.php'; 
    if(isset($_GET['household_Id']))
      $household_Id = $_GET['household_Id'];

    $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
    $row = mysqli_fetch_array($fetch);
    $a   = $row['id_reference'];
    $b   = explode(",", $a);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3 class="card-title">Information</h3>
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
              <!-- /.card-header -->
              <!-- form start -->
        <form action="process_update.php" method="post" class="bg-body pb-4" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="household_Id"  value="<?php echo $row['household_Id']; ?>">
        
          <div class="row bg-body p-3">
            <div class="col-md-3 form-group">
              <label for=""><b>First name</b></label>
              <input type="text" class="form-control" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)" value="<?php echo $row['firstname']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Last name</b></label>
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)" value="<?php echo $row['lastname']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Email</b></label>
              <input type="email" class="form-control" placeholder="mail@email.com" name="email"required value="<?php echo $row['email']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Contact number</b></label>
              <input type="number" class="form-control" placeholder="9123456789" name="contact"required value="<?php echo $row['contact_number']; ?>" >
            </div>

            <div class="col-md-12 form-group">
              <label for=""><b>Address</b></label>
              <input type="text" class="form-control"  placeholder="Address" name="address" required value="<?php echo $row['address']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Date of Birth</b></label>
              <input type="date" class="form-control"  placeholder="Date of birth" name="dob" required value="<?php echo $row['dob']; ?>" >
            </div>
            <div class="col-md-2 form-group">
              <label for=""><b>Age</b></label>
              <input type="number" class="form-control"  placeholder="Age" name="age" required value="<?php echo $row['age']; ?>" >
            </div>



            <div class="col-md-3 form-group">
              <label>Gender</label>
              <select class="custom-select" name="gender" required >
                  <?php if($row['gender'] == 'Male'): ?>
                        <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?>  </option>
                        <option value="Female">Female</option>
                   <?php elseif($row['gender'] == 'Female'): ?>
                        <option value="Male">Male</option>
                        <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?>  </option>
                   <?php else: ?>
                        <option selected disabled>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                  <?php endif; ?>
               </select> 
            </div>



            <div class="col-md-4 form-group">
              <label>Civil Status</label>
               <select class="custom-select" name="civilstatus" required >
                  <?php if($row['status'] == 'Single'): ?>
                        <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?>  </option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                   <?php elseif($row['status'] == 'Married'): ?>
                        <option value="Single">Single</option>
                        <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?>  </option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                   <?php elseif($row['status'] == 'Divorced'): ?>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?>  </option>
                        <option value="Widowed">Widowed</option>
                   <?php elseif($row['status'] == 'Widowed'): ?>
                        <option value="Single">Single</option>
                        <option value="Divorced">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?>  </option>
                   <?php else: ?>
                        <option selected disabled>Select status</option>
                        <option value="Single">Single</option>
                        <option value="Divorced">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                  <?php endif; ?>
               </select> 
            </div>


            
            <div class="col-md-4 form-group">
              <label>Educational Attainment</label>
              <select class="custom-select" name="educationalattainment" required >
                 <?php if($row['educational_attainment'] == 'Elementary level'): ?>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="Elementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                   <?php elseif($row['educational_attainment'] == 'Elementary Graduate'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                   <?php elseif($row['educational_attainment'] == 'High School Level'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                   <?php elseif($row['educational_attainment'] == 'High School Graduate'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                  <?php elseif($row['educational_attainment'] == 'College Level'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                  <?php elseif($row['educational_attainment'] == 'College Graduate'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                  <?php elseif($row['educational_attainment'] == 'Technical Vocational'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                  <?php elseif($row['educational_attainment'] == 'Masterate in Graduate School and Doctorate in Post Graduate Studies'): ?>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="<?php echo $row['educational_attainment']; ?>" selected><?php echo $row['educational_attainment']; ?>  </option>
                   <?php else: ?>
                        <option selected disabled>Select education attainment</option>
                        <option value="Elementary Level">Elementary Level</option>
                        <option value="HElementary Graduate">Elementary Graduate</option>
                        <option value="High School Level">High School Level</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Technical Vocational">Technical Vocational</option>
                        <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
                  <?php endif; ?>
               </select> 
            </div>
            
           
              
            <div class="col-md-4 form-group">
              <label for=""><b>Present Health Condition</b></label>
              <input type="text" class="form-control"  placeholder="Present Health Condition" name="condition" value="<?php echo $row['health_condition']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label>Occupation</label>
              <input type="text" class="form-control"  placeholder="Occupation" name="Occupation" value="<?php echo $row['occupation']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label>GSIS Pensioner</label>
              <input type="text" class="form-control"  placeholder="GSIS Pensioner" name="GSIS" value="<?php echo $row['GSIS']; ?>">
            </div>
             <div class="col-md-3 form-group">
              <label>SSS Pensioner</label>
              <input type="text" class="form-control"  placeholder="SSS Pensioner" name="SSS" value="<?php echo $row['SSS']; ?>">
            </div>
             <div class="col-md-3 form-group">
              <label>PVAO</label>
              <input type="text" class="form-control"  placeholder="PVAO" name="PVAO" value="<?php echo $row['PVAO']; ?>">
            </div>
             <div class="col-md-3 form-group">
              <label>Others:</label>
              <input type="text" class="form-control"  placeholder="Others" name="otherpensionners" value="<?php echo $row['other_pension']; ?>">
            </div>


            <div class="col-md-12 form-group mt-3">
              <label>LIVING ARRANGEMENT:</label>
            </div>
            <div class="col-md-4 form-group">
              <label>Living Alone:</label>
              <input type="text" class="form-control"  placeholder="Living Alone" name="alone" value="<?php echo $row['alone']; ?>">
            </div>
                         <div class="col-md-4 form-group">
              <label>Living with relatives:</label>
              <input type="text" class="form-control"  placeholder="Living with relatives" name="relatives" value="<?php echo $row['living_with']; ?>">
            </div>
                         <div class="col-md-4 form-group">
              <label>No of years:</label>
              <input type="text" class="form-control"  placeholder="No of years" name="noofyears" value="<?php echo $row['no_ofyears']; ?>">
            </div>

            
            <div class="col-md-12 form-group mt-4">
              <label>SECTOR:</label>
            </div>
            <div class="col-md-3 form-group">
              <label>IP'S:</label>
              <input type="text" class="form-control"  placeholder="IP'S" name="ips" value="<?php echo $row['IP_s']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label>BEDRIDDEN:</label>
              <input type="text" class="form-control"  placeholder="BEDRIDDEN" name="bedridden" value="<?php echo $row['bedridden']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label>PWD:</label>
              <input type="text" class="form-control"  placeholder="PWD" name="pwd" value="<?php echo $row['pwd']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label>Others:</label>
              <input type="text" class="form-control"  placeholder="Others" name="others" value="<?php echo $row['other_sector']; ?>">
            </div>



            <div class="col-md-12 form-group">
              <label>Name of Association:</label>
              <input type="text" class="form-control"  placeholder="Name of Association" name="Association" value="<?php echo $row['name_of_association']; ?>">
            </div>
            <div class="col-md-12 form-group">
              <label>Address of Association:</label>
              <input type="text" class="form-control"  placeholder="Address of Association" name="AddressAssociation" value="<?php echo $row['address_association']; ?>">
            </div>
            <div class="col-md-6 form-group">
              <label>Name of Membership:</label>
              <input type="text" class="form-control"  placeholder="Name of Membership" name="Membership" value="<?php echo $row['name_membership']; ?>">
            </div>
            <div class="col-md-6 form-group">
              <label>Position:</label>
              <input type="text" class="form-control"  placeholder="Position" name="Position" value="<?php echo $row['position']; ?>">
            </div>
            <div class="col-md-12 form-group">
              <label>Officer, Date Elected:</label>
              <input type="text" class="form-control"  placeholder="Officer, Date Elected" name="Officer" value="<?php echo $row['officer_date_selected']; ?>">
            </div>

            <div class="text-center"><button class="btn btn-primary" type="submit" name="senior_update_household" id="register">Submit</button></div>
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

