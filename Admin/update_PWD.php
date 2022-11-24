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
            <div class="col-md-6 form-group">
              <label for=""><b>PWD Number</b></label>
              <input type="text" class="form-control" placeholder="PWD Number" name="pwdnumber" required value="<?php echo $row['pwdnumber']; ?>" >
            </div>
            <div class="col-md-6 form-group">
              <label for=""><b>Date issued</b></label>
              <input type="text" class="form-control" placeholder="Date issued" name="dateissued" required value="<?php echo $row['date_issued']; ?>" >
            </div>
            
           <!--  <div class="col-md-4 form-group">
              <label for=""><b>First name</b></label>
              <input type="text" class="form-control" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)" value="<?php //echo $row['firstname']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Middle name</b></label>
              <input type="text" class="form-control" placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)" value="<?php //echo $row['middlename']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Last name</b></label>
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)" value="<?php //echo $row['lastname']; ?>" >
            </div> 
           
            <div class="col-md-4 form-group">
              <label for=""><b>Email</b></label>
              <input type="email" class="form-control" placeholder="mail@email.com" name="email"required value="<?php //echo $row['email']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Contact number</b></label>
              <input type="number" class="form-control" placeholder="9123456789" name="contact"required value="<?php //echo $row['contact_number']; ?>" >
            </div>
            -->
            <div class="col-lg-6">
               <label for=""><b>IDENTIFICATION REFERENCE (Check all that apply)</b></label>
               <div class="form-check">
                  <input class="form-check-input position-static" type="checkbox" value="SSS" name="reference[]"
                  <?php if(in_array('SSS', $b)) { echo "checked"; } ?> > SSS
               </div>
               <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" value="GSIS" name="reference[]"
                  <?php if(in_array('GSIS', $b)) { echo "checked"; } ?> > GSIS
               </div>
               <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" value="PWD" name="reference[]"
                  <?php if(in_array('PWD', $b)) { echo "checked"; } ?> > PWD
               </div>
               <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" value="PhilHealth Member" name="reference[]"
                  <?php if(in_array('PhilHealth Member', $b)) { echo "checked"; } ?> > PhilHealth Member
               </div>
               <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" value="PhilHealth dependent" name="reference[]"
                  <?php if(in_array('PhilHealth dependent', $b)) { echo "checked"; } ?> > PhilHealth dependent
               </div>
               <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" value="Pag-IBIG" name="reference[]"
                  <?php if(in_array('Pag-IBIG', $b)) { echo "checked"; } ?> > Pag-IBIG
               </div>
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
            <div class="col-md-4 form-group">
              <label for=""><b>Type of employer</b></label>
              <select class="custom-select" name="type_employer" required >
                  <option selected disabled> Select type of employer</option>
                  <option value="Private">Private</option>
                  <option value="Government">Government</option>
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
          
            <div class="col-md-4 form-group">
              <label for=""><b>Monthly income</b></label>
              <select class="custom-select" name="salary" required >
                  <option selected disabled> Select monthly income</option>
                  <option value="10,000 above">10,000 above</option>
                  <option value="9,000-9,999">9,000-9,999</option>
                  <option value="8,000-8,999">8,000-8,999</option>
                  <option value="7,000-7,999">7,000-7,999</option>
                  <option value="6,000-6,999">6,000-6,999</option>
                  <option value="5,000-5,999">5,000-5,999</option>
                  <option value="4,000-4,999">4,000-4,999</option>
                  <option value="3,000-3,999">3,000-3,999</option>
                  <option value="2,000-2,999">2,000-2,999</option>
                  <option value="1,000-1,999">1,000-1,999</option>
                  <option value="999">999 below</option>
                  <option value="None">None</option>
               </select>
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Work name</b></label>
              <input type="text" class="form-control"  placeholder="Work name" name="workname" id="workname" value="<?php echo $row['work_name']; ?>" >
            </div>
            <div class="col-md-4 form-group">
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
            <div class="col-md-4 form-group">
              <label for=""><b>Source of Income</b></label>
              <input type="text" class="form-control"  placeholder="Source of Income" name="source" required value="<?php echo $row['source_of_income']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Religion</b></label>
              <input type="text" class="form-control"  placeholder="Religion" name="religion" required value="<?php echo $row['religion']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Solo Parent?</b></label>
              <select class="custom-select" name="solo_parent" required >
                  <option selected disabled> Select here</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
               </select>
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Type of Disability</b></label>
               <input type="text" class="form-control"  placeholder="Type of Disability" name="type_disability" required value="<?php echo $row['typeofdisabilities']; ?>" >
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Cause of Disability</b></label>
              <select class="custom-select" name="cause_disability" required >
                  <option selected disabled> Select here</option>
                  <option value="Congenital/inborn">Congenital/inborn</option>
                  <option value="Illness">Illness</option>
                  <option value="Injury">Injury</option>
               </select>
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
              <label>Program and Services benefited</label>
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
            <div class="col-md-4 form-group">
              <label for=""><b>Number of family members</b></label>
              <input type="number" class="form-control"  placeholder="Number of family members" name="numberofmembers" required value="<?php echo $row['num_fam_members']; ?>">
            </div>
            <div class="col-md-4   form-group">
              <label for=""><b>Assets/Properties</b></label>
              <input type="text" class="form-control"  placeholder="Assets/Properties" name="properties" required value="<?php echo $row['assets']; ?>" >
            </div>
            <div class="col-md-3 form-group">
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
          
               
            <div class="col-md-5 form-group">
              <label for=""><b>Areas of Specialization/Skills(Check all applicable)</b></label>
              <select class="custom-select" name="skills" required >
                  <option selected disabled> Select here</option>
                  <option value="Farming">Farming</option>
                  <option value="Teaching">Teaching</option>
                  <option value="Fishing">Fishing</option>
                  <option value="Dental">Dental</option>
                  <option value="Counseling">Counseling</option>
                  <option value="Evangelization">Evangelization</option>
                  <option value="Cooking">Cooking</option>
                  <option value="Vocational">Vocational</option>
                  <option value="Arts">Arts</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Organizing">Organizing</option>
                  <option value="Others">Others</option>
               </select>
            </div>


            <div class="col-md-4 form-group">
              <label for=""><b>Involment in community activities(Check all applicable)</b></label>
              <select class="custom-select" name="community_activities" required >
                  <option selected disabled> Select here</option>
                  <option value="Medical Service">Medical Service</option>
                  <option value="Community Service">Community Service</option>
                  <option value="Community Beautification">Community Beautification</option>
                  <option value="Community/Organizational Leader">Community/Organizational Leader</option>
                  <option value="Neighborhood Support Services">Neighborhood Supportt Services</option>
                  <option value="Religious">Religious</option>
                  <option value="Counseling/Referral">Counseling/Referral</option>
                  <option value="Friendly visit">Friendly visit</option>
                  <option value="Member of association">Member of association</option>
                  <option value="Affiliation">Affiliation</option>
                  <option value="Others">Others</option>
               </select>
            </div>


            <div class="col-md-12 mt-3">
              <h4><b>PROBLEMS/NEEDS COMMONLY ENCOUNTERED: (Check all applicable)</b></h4>
            </div>
            
            <div class="col-md-4 form-group">
              <label for=""><b>Economic</b></label>
              <select class="custom-select" name="Economic" required >
                  <option selected disabled> Select here</option>
                  <option value="Lack of income/resources">Lack of income/resources</option>
                  <option value="Loss of income/resources">Loss of income/resources</option>
                  <option value="Skills/Capability Training">Skills/Capability Training</option>
                  <option value="Livelihood opportunities">Livelihood opportunities</option>
                  <option value="Not employed ">Not employed</option>
                  <option value="Others">Others</option>
               </select>
            </div>

            <div class="col-md-4 form-group">
              <label for=""><b>Social/Emotional</b></label>
              <select class="custom-select" name="Social_Emotional" required >
                  <option selected disabled> Select here</option>
                  <option value="Feeling of neglect & rejection">Feeling of neglect & rejection</option>
                  <option value="Feeling of helplessness & worthlessness">Feeling of helplessness & worthlessness</option>
                  <option value="Feeling of loneliness & isolation">Feeling of loneliness & isolation</option>
                  <option value="Feeling of Descrimanation">Feeling of Descrimanation</option>
                  <option value="Inadequate leisure/recreational activities">Inadequate leisure/recreational activities</option>
                  <option value="PWD  Friendly Environment">PWD  Friendly Environment</option>
                  <option value="Others">Others</option>
               </select>
            </div>

            <div class="col-md-4 form-group">
              <label for=""><b>Health</b></label>
              <select class="custom-select" name="Health" required >
                  <option selected disabled> With Maintenance?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
               </select>
            </div>

            <div class="col-md-4 form-group">
              <label for=""><b>If yes from previous(Health), please specify</b></label>
              <select class="custom-select" name="health_specify" required >
                  <option selected disabled> With Maintenance?</option>
                  <option value="Accessibility to Health Services">Accessibility to Health Services</option>
                  <option value="Lack /No health insurance/s inadequate health services">Lack /No health insurance/s inadequate health services</option>
                  <option value="Lack of hospitals/medical facilities">Lack of hospitals/medical facilities</option>
                  <option value="Lack of medical professionals">Lack of medical professionals</option>
                  <option value="Lack/No access to sanitation">Lack/No access to sanitation</option>
                  <option value="Others">Others</option>
               </select>
            </div>

             <div class="col-md-4 form-group">
              <label for=""><b>Housing</b></label>
              <select class="custom-select" name="Housing" required >
                  <option selected disabled> Select here</option>
                  <option value="Overcrowding in the family home">Overcrowding in the family home</option>
                  <option value="No permanent housing">No permanent housing</option>
                  <option value="Longing for independent living/quiet atmosphere">Longing for independent living/quiet atmosphere</option>
                  <option value="Light materials (cogon, nipa, anahaw)">Light materials (cogon, nipa, anahaw)</option>
                  <option value="Salvaged/makeshift materials">Salvaged/makeshift materials</option>
                  <option value="Strong materials (galvanized iron, aluminum, tiles, concrete, brick, stone)">Strong materials (galvanized iron, aluminum, tiles, concrete, brick, stone)</option>
                  <option value="One room affair">One room affair</option>
                  <option value="Informal settlers">Informal settlers</option>
                  <option value="Cost rent">Cost rent</option>
                  <option value="Others">Others</option>

               </select>
            </div>


            <div class="col-md-4 form-group">
              <label for=""><b>Toilet Facility</b></label>
              <select class="custom-select" name="Toilet_Facility" required >
                  <option selected disabled> Select here</option>
                  <option value="Water sealed, used exclusively by household">Water sealed, used exclusively by household</option>
                  <option value="Close pit, used exclusively by household">Close pit, used exclusively by household</option>
                  <option value="Open pit, used exclusively by household">Open pit, used exclusively by household</option>
                  <option value="Others">Others</option>
               </select>
            </div>

            <div class="col-md-4 form-group">
              <label for=""><b>Electricity</b></label>
              <select class="custom-select" name="Electricity" required >
                  <option selected disabled> Select here</option>
                  <option value="Own use, faucet, community water system">Own use, faucet, community water system</option>
                  <option value="Shared, faucet, communicty water system">Shared, faucet, communicty water system</option>
                  <option value="Own use, tubes/piped well">Own use, tubes/piped well</option>
                  <option value="Rainfall">Rainfall</option>
                  <option value="Shared, tubed/piped well">Shared, tubed/piped well</option>
                  <option value="Dug Well">Dug Well</option>
                  <option value="Spring, river, stream,etc">Spring, river, stream,etc</option>
                  <option value="Peddler">Peddler</option>
               </select>
            </div>


            <div class="col-md-4 form-group">
              <label for=""><b>Community Service</b></label>
              <select class="custom-select" name="Community_Service" required >
                  <option selected disabled> Select here</option>
                  <option value="Desire to participate">Desire to participate</option>
                  <option value="Skills/resources to share">Skills/resources to share</option>
                  <option value="Peddler">Peddler</option>
               </select>
            </div>

            <div class="col-md-12 form-group">
              <label for=""><b> Identify Others Specific Needs</b></label>
              <input type="text" class="form-control" name="Specific_Needs" placeholder="Identify Others Specific Needs" value="<?php echo $row['Specific_Needs']; ?>" required>
            </div>

          </div>

            <div class="text-center"><button class="btn btn-primary" type="submit" name="pwd_update_household" id="register">Submit</button></div>
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

