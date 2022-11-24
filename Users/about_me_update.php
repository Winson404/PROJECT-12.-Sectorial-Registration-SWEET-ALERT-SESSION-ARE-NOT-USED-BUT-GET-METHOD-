<title>Profile</title>
<?php include 'navbar.php'; ?>

<?php  
    // if(isset($_GET['household_Id']))
    //   $household_Id = $_GET['household_Id'];

    // $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
    // $row_fetch = mysqli_fetch_array($fetch);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About me</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">About me</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
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
          <div class="col-md-12 form-group mt-3">
              <label for=""><b>Application Type</b></label>
              <br> 
              <input type="radio" name="applicationtype[]" value="New" class="applicationtype"
              <?php if($row['application_type'] == 'New,') { echo "checked"; } ?>
              > New &nbsp;&nbsp;
              <input type="radio" name="applicationtype[]" value="Old" class="applicationtype" <?php if($row['application_type'] == 'Old,') { echo "checked"; } ?>> Old &nbsp;&nbsp;
              <input type="radio" name="applicationtype[]" value="Renewal" class="applicationtype" <?php if($row['application_type'] == 'Renewal,') { echo "checked"; } ?>> Renewal
            </div>
          <div class="row bg-body p-3">
            <div class="col-md-3 form-group">
              <label for=""><b>First name</b></label>
              <input type="text" class="form-control" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)" value="<?php echo $row['firstname']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Last name</b></label>
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)" value="<?php echo $row['lastname']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Email</b></label>
              <input type="email" class="form-control" placeholder="mail@email.com" name="email"required value="<?php echo $row['email']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Contact number</b></label>
              <input type="number" class="form-control" placeholder="9123456789" name="contact"required value="<?php echo $row['contact_number']; ?>">
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Sectorial registration</b></label>
              <br> 
              <input type="radio" name="sectorial_registration[]" id="solo" value="Solo Parent" class="applicationtype" <?php if($row['sectorial_registration'] == 'Solo Parent,') { echo "checked"; } ?>> Solo Parent &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="pwd" value="PWD" class="applicationtype" <?php if($row['sectorial_registration'] == 'PWD,') { echo "checked"; } ?>> PWD &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="senior" value="Senior Citizens" class="applicationtype" <?php if($row['sectorial_registration'] == 'Senior Citizens,') { echo "checked"; } ?>> Senior Citizens
            </div>
            <style> 
                .hidden {
                  display: none;
                }
                .show {
                  display: block;
                }
            </style>      
            <div class="col-md-4 form-group">
              <label for="" class="hidden" id="cause_label"><b>Cause of being solo parent</b></label>
              <select name="causeofbeingsoloparent" class="custom-select hidden" id="cause">
                <option selected value="">Select a reason here</option>
                <option value="Separated">Separated</option>
                <option value="Abandoned">Abandoned</option>
                <option value="Confined">Confined</option>
                <option value="Widow">Widow/Widower</option>
              </select>
              <input type="text" class="form-control hidden" placeholder="Type of Disabilities" name="typeofdisabilities" id="typeofdisabilities">
            </div>
            

            


            <div class="col-md-12 form-group">
              <label for=""><b>Address</b></label>
              <input type="text" class="form-control"  placeholder="Address" name="address" required value="<?php echo $row['address']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Date of Birth</b></label>
              <input type="date" class="form-control"  placeholder="Date of birth" name="dob" required value="<?php echo $row['dob']; ?>">
            </div>
            <div class="col-md-2 form-group">
              <label for=""><b>Age</b></label>
              <input type="number" class="form-control"  placeholder="Age" name="age" required value="<?php echo $row['age']; ?>">
            </div>
            <div class="col-md-2 form-group">
              <label>Gender</label>
              <select class="custom-select" name="gender" required>
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
              <input type="text" class="form-control"  placeholder="Place of birth" name="placeofbirth" required value="<?php echo $row['place_of_birth']; ?>">
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
              <select class="custom-select" name="educationalattainment" required>
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
              <select class="custom-select" name="workstatus" required>
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
              <input type="text" class="form-control"  placeholder="Work name" name="workname" id="workname" value="<?php echo $row['work_name']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label>Type of Work</label>
              <select class="custom-select" name="worktype" required>
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
              <input type="text" class="form-control"  placeholder="Monthly Salary" name="salary" id="salary" value="<?php echo $row['salary']; ?>">
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Source of Income</b></label>
              <input type="text" class="form-control"  placeholder="Source of Income" name="source" id="source" value="<?php echo $row['source_of_income']; ?>">
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Religion</b></label>
              <input type="text" class="form-control"  placeholder="Religion" name="religion" required value="<?php echo $row['religion']; ?>">
            </div>
            <div class="col-md-4 form-group">
              <label>Part of Any Tribe?</label>
              <select class="custom-select" name="tribe" required>
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
              <label>Program and Services benefited</label>
              <select class="custom-select" name="programservices" required>
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
              <input type="text" class="form-control"  placeholder="Assets/Properties" name="properties" required value="<?php echo $row['assets']; ?>">
            </div>
            <div class="col-md-4 form-group">
              <label>Living with</label>
              <select class="custom-select" name="livingwith" required>
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
            <div class="row p-3">
              <div class="col-md-6 form-group">
                <label for=""><b>Family member #1</b></label>
                <input type="text" class="form-control"  placeholder="Family member #1" name="first_child" value="<?php echo str_replace(',', ' - ', $row['first_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #2</b></label>
                <input type="text" class="form-control"  placeholder="Family member #2" name="second_child" value="<?php echo str_replace(',', ' - ', $row['secon_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #3</b></label>
                <input type="text" class="form-control"  placeholder="Family member #3" name="third_child" value="<?php echo str_replace(',', ' - ', $row['3rd_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #4</b></label>
                <input type="text" class="form-control"  placeholder="Family member #4" name="fourth_child" value="<?php echo str_replace(',', ' - ', $row['fourth_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #5</b></label>
                <input type="text" class="form-control"  placeholder="Family member #5" name="fifth_child" value="<?php echo str_replace(',', ' - ', $row['fifth_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #6</b></label>
                <input type="text" class="form-control"  placeholder="Family member #6" name="sixth_child" value="<?php echo str_replace(',', ' - ', $row['sixth_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #7</b></label>
                <input type="text" class="form-control"  placeholder="Family member #7" name="seventh_child" value="<?php echo str_replace(',', ' - ', $row['seventh_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #8</b></label>
                <input type="text" class="form-control"  placeholder="Family member #8" name="eight_child" value="<?php echo str_replace(',', ' - ', $row['eight_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #9</b></label>
                <input type="text" class="form-control"  placeholder="Family member #9" name="nineth_child" value="<?php echo str_replace(',', ' - ', $row['nineth_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #10</b></label>
                <input type="text" class="form-control"  placeholder="Family member #10" name="tenth_child" value="<?php echo str_replace(',', ' - ', $row['tenth_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #11</b></label>
                <input type="text" class="form-control"  placeholder="Family member #11" name="eleventh_child" value="<?php echo str_replace(',', ' - ', $row['eleventh_child']); ?>"> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #12</b></label>
                <input type="text" class="form-control"  placeholder="Family member #12" name="twelveth_child" value="<?php echo str_replace(',', ' - ', $row['twelveth_child']); ?>"> 
            </div>
            </div>    
            <div class="col-md-12 form-group">
              <label for=""><b>Skills</b></label>
              <input type="text" class="form-control" name="skills" placeholder="Skills" value="<?php echo $row['skills']; ?>" required>
            </div>

            <div class="text-center"><button class="btn btn-primary" type="submit" name="senior_update_household" id="register">Register</button></div>
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


<script>
    $('.applicationtype').change(function(){
    var applicationtype = $(this).val();
    if(applicationtype =="Solo Parent") {

            $('#cause').removeClass("hidden");
            $('#cause').addClass("show");

            $('#cause_label').removeClass("hidden");
            $('#cause_label').addClass("show");
            
            document.getElementById("cause").required = true;

            $('#typeofdisabilities').removeClass("show");
            $('#typeofdisabilities').addClass("hidden");
            
            document.getElementById("pwd").checked = false;
            document.getElementById("senior").checked = false;



    }else if(applicationtype =="PWD"){
          
            $('#cause').removeClass("show");
            $('#cause').addClass("hidden"); 


            $('#cause_label').removeClass("show");
            $('#cause_label').addClass("hidden");


            $('#typeofdisabilities').removeClass("hidden");
            $('#typeofdisabilities').addClass("show");
            $("#typeofdisabilities").attr('required', '');

            document.getElementById("solo").checked = false;
            document.getElementById("senior").checked = false;
            
    } else {

            $('#cause').removeClass("show");
            $('#cause').addClass("hidden"); 

            $('#cause_label').removeClass("show");
            $('#cause_label').addClass("hidden");

            $('#typeofdisabilities').removeClass("show");
            $('#typeofdisabilities').addClass("hidden");

            document.getElementById("solo").checked = false;
            document.getElementById("pwd").checked = false;
            
    }
            //console.log(responseID);
            });
</script>


<script>
    $('.workstatus').change(function(){
    var workstatus = $(this).val();
    if(workstatus =="Employed" || workstatus =="Self-employed") {

            $('#workname').removeClass("hidden");
            $('#workname').addClass("show"); 

            $('#typeofwork').removeClass("hidden");
            $('#typeofwork').addClass("show");

            $('#salary').removeClass("hidden");
            $('#salary').addClass("show");

            $('#source').removeClass("hidden");
            $('#source').addClass("show");

            document.getElementById('workname').value = "";
            $("#workname").prop('readonly', false);

            document.getElementById('salary').value = "";
            $("#salary").prop('readonly', false);

            document.getElementById('source').value = "";
            $("#source").prop('readonly', false);

            $("#typeofwork").prop('readonly', false);
            $('#typeofwork').attr("style", "pointer-events: cursor;");

    } else {

            $('#workname').removeClass("hidden");
            $('#workname').addClass("show");

            document.getElementById('workname').value = "N/A";
            $("#workname").prop('readonly', true);

            $('#typeofwork').removeClass("hidden");
            $('#typeofwork').addClass("show");
            $('#typeofwork').attr("style", "pointer-events: none; background-color: lightgrey");

            $('#salary').removeClass("hidden");
            $('#salary').addClass("show");

            document.getElementById('salary').value = "N/A";
            $("#salary").prop('readonly', true);

            $('#source').removeClass("hidden");
            $('#source').addClass("show");
            document.getElementById('source').value = "N/A";
            $("#source").prop('readonly', true);

            
    }
            //console.log(responseID);
            });
</script>

 
<script>
   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    var text=document.createElement('p');
    text.innerHTML='Image preview';
    text.style['position']="relative";
    text.style['margin-left']="215px";
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

<script>
    function validate_password() {

      var pass = document.getElementById('newpassword').value;
      var confirm_pass = document.getElementById('confirmpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('register').disabled = true;
        document.getElementById('register').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('register').disabled = false;
        document.getElementById('register').style.opacity = (1);
      }
    }




    function lettersOnly(input) {
      var regex = /[^a-z ]/gi;
      input.value = input.value.replace(regex, "");
    }

</script>
