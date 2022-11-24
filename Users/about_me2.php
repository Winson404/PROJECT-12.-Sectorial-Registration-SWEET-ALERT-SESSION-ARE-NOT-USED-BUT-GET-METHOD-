<title>Profile</title>
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
            <div class="col-md-2 form-group">
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
            <div class="col-md-5 form-group">
              <label for=""><b>Place of Birth</b></label>
              <input type="text" class="form-control"  placeholder="Place of birth" name="placeofbirth" required value="<?php echo $row['place_of_birth']; ?>" >
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
              <label>Employment Status</label>
              <select class="custom-select" name="workstatus" required >
                  <?php if($row['employment_status'] == 'Employed'): ?>
                        <option value="<?php echo $row['employment_status']; ?>" selected><?php echo $row['employment_status']; ?>  </option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Self-employed">Self-employed</option>
                   <?php elseif($row['employment_status'] == 'Unemployed'): ?>
                        <option value="Employed">Employed</option>
                        <option value="<?php echo $row['employment_status']; ?>" selected><?php echo $row['employment_status']; ?>  </option>
                        <option value="Self-employed">Self-employed</option>
                   <?php elseif($row['employment_status'] == 'Self-employed'): ?>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="<?php echo $row['employment_status']; ?>" selected><?php echo $row['employment_status']; ?>  </option>
                   <?php else: ?>
                        <option selected disabled>Select employment status</option>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Self-employed">Self-employed</option>
                  <?php endif; ?>
               </select>
            </div>
            
            <style> 
                .hidden {
                  display: none;
                }
                .show {
                  display: block;
                }
            </style>  
            <div class="col-md-3 form-group">
              <label for=""><b>Work name</b></label>
              <input type="text" class="form-control"  placeholder="Work name" name="workname" id="workname" value="<?php echo $row['work_name']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label>Type of Work</label>
              <select class="custom-select" name="worktype" required >
                  <?php if($row['type_of_work'] == 'Permanent'): ?>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['type_of_work'] == 'Contractual'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>
                   
                   <?php elseif($row['type_of_work'] == 'Emergency'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Casual'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Seasonal'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Housewife'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Business owner'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Job Order'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>
                        <option value="Others">Others</option>

                  <?php elseif($row['type_of_work'] == 'Others'): ?>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="<?php echo $row['type_of_work']; ?>" selected><?php echo $row['type_of_work']; ?>  </option>

                   <?php else: ?>
                        <option selected value="N/A">Type of Work</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Casual">Casual</option>
                        <option value="Seasonal">Seasonal</option>
                        <option value="Housewife">Housewife</option>
                        <option value="Business owner">Business owner</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Others">Others</option>
                  <?php endif; ?>
               </select>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Salary</b></label>
              <input type="text" class="form-control"  placeholder="Monthly Salary" name="salary" id="salary" value="<?php echo $row['salary']; ?>" >
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Source of Income</b></label>
              <input type="text" class="form-control"  placeholder="Source of Income" name="source" id="source" value="<?php echo $row['source_of_income']; ?>">
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Religion</b></label>
              <input type="text" class="form-control"  placeholder="Religion" name="religion" required value="<?php echo $row['religion']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label>Part of Any Tribe?</label>
              <select class="custom-select" name="tribe" required >
                    <?php if($row['part_of_tribe'] == 'Yes'): ?>
                        <option value="<?php echo $row['part_of_tribe']; ?>" selected><?php echo $row['part_of_tribe']; ?>  </option>
                        <option value="No">No</option>

                   <?php elseif($row['part_of_tribe'] == 'No'): ?>
                        <option value="Yes">Yes</option>
                        <option value="<?php echo $row['part_of_tribe']; ?>" selected><?php echo $row['part_of_tribe']; ?>  </option>
                        
                  <?php else: ?>
                        <option selected disabled>Select only one</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                  <?php endif; ?>
               </select>
            </div>
          

            <div class="col-md-4 form-group">
              <label>Program or Services benefited</label>
              <select class="custom-select" name="programservices" required >
                  <?php if($row['program_services'] == 'Educational Assistance'): ?>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="ECCD">ECCD</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="4Ps">4Ps</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == 'ECCD'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="4Ps">4Ps</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == 'Scholarship'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="4Ps">4Ps</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == '4Ps'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == 'Econonic Training'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="4Ps">4Ps</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == 'Medical Assistance'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="4Ps">4Ps</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>
                        <option value="Others">Others</option>

                   <?php elseif($row['program_services'] == 'Others'): ?>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="4Ps">4Ps</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="<?php echo $row['program_services']; ?>" selected><?php echo $row['program_services']; ?>  </option>

                  <?php else: ?>
                        <option selected disabled>Select program and services</option>
                        <option value="Educational Assistance">Educational Assistance</option>
                        <option value="ECCD">ECCD</option>
                        <option value="4Ps">4Ps</option>
                        <option value="Scholarship">Scholarship</option>
                        <option value="Econonic Training">Econonic Training</option>
                        <option value="Medical Assistance">Medical Assistance</option>
                        <option value="Others">Others</option>

                  <?php endif; ?>
               </select> 
            </div>

            <div class="col-md-3 form-group">
              <label for=""><b>Number of family members</b></label>
              <input type="number" class="form-control"  placeholder="Number of family members" name="numberofmembers" required value="<?php echo $row['num_fam_members']; ?>">
            </div>
            <div class="col-md-5 form-group">
              <label for=""><b>Assets/Properties</b></label>
              <input type="text" class="form-control"  placeholder="Assets/Properties" name="properties" required value="<?php echo $row['assets']; ?>" >
            </div>
            <div class="col-md-4 form-group">
             
              <label>Living with</label>
              <select class="custom-select" name="livingwith" required >
                   <?php if($row['living_with'] == 'Owned house'): ?>
                        <option value="<?php echo $row['living_with']; ?>" selected><?php echo $row['living_with']; ?>  </option>
                        <option value="Siblings">Siblings</option>
                        <option value="Parents">Parents</option>
                        <option value="Relative">Relative</option>
                        <option value="Mother-in-Law">Mother-in-Law</option>

                   <?php elseif($row['living_with'] == 'Siblings'): ?>
                        <option value="Owned house">Owned house</option>
                        <option value="<?php echo $row['living_with']; ?>" selected><?php echo $row['living_with']; ?>  </option>
                        <option value="Parents">Parents</option>
                        <option value="Relative">Relative</option>
                        <option value="Mother-in-Law">Mother-in-Law</option>

                  <?php elseif($row['living_with'] == 'Parents'): ?>
                        <option value="Owned house">Owned house</option>
                        <option value="Siblings">Siblings</option>
                        <option value="<?php echo $row['living_with']; ?>" selected><?php echo $row['living_with']; ?>  </option>
                        <option value="Relative">Relative</option>
                        <option value="Mother-in-Law">Mother-in-Law</option>

                  <?php elseif($row['living_with'] == 'Relative'): ?>
                        <option value="Owned house">Owned house</option>
                        <option value="Siblings">Siblings</option>
                        <option value="Parents">Parents</option>
                        <option value="<?php echo $row['living_with']; ?>" selected><?php echo $row['living_with']; ?>  </option>
                        <option value="Mother-in-Law">Mother-in-Law</option>

                  <?php elseif($row['living_with'] == 'Mother-in-Law'): ?>
                        <option value="Owned house">Owned house</option>
                        <option value="Siblings">Siblings</option>
                        <option value="Parents">Parents</option>
                        <option value="Relative">Relative</option>
                        <option value="<?php echo $row['living_with']; ?>" selected><?php echo $row['living_with']; ?>  </option>
                        
                  <?php else: ?>
                        <option selected disabled>Select only one</option>
                        <option value="Owned house">Owned house</option>
                        <option value="Siblings">Siblings</option>
                        <option value="Parents">Parents</option>
                        <option value="Relative">Relative</option>
                        <option value="Mother-in-Law">Mother-in-Law</option>
                        
                  <?php endif; ?>
               </select>
            </div>
            </div>
               
            <div class="col-md-12 form-group">
              <label for=""><b>Skills</b></label>
              <input type="text" class="form-control" name="skills" placeholder="Skills" value="<?php echo $row['skills']; ?>" required>
            </div>

            <div class="text-center"><button class="btn btn-primary" type="submit" name="solo_update_household" id="register">Submit</button></div>
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

