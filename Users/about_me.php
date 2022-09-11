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
              <input type="text" class="form-control" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)" value="<?php echo $row['firstname']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Last name</b></label>
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)" value="<?php echo $row['lastname']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Email</b></label>
              <input type="email" class="form-control" placeholder="mail@email.com" name="email"required value="<?php echo $row['email']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Contact number</b></label>
              <input type="number" class="form-control" placeholder="9123456789" name="contact"required value="<?php echo $row['contact_number']; ?>" readonly>
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
              <input type="text" class="form-control"  placeholder="Address" name="address" required value="<?php echo $row['address']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Date of Birth</b></label>
              <input type="date" class="form-control"  placeholder="Date of birth" name="dob" required value="<?php echo $row['dob']; ?>" readonly>
            </div>
            <div class="col-md-2 form-group">
              <label for=""><b>Age</b></label>
              <input type="number" class="form-control"  placeholder="Age" name="age" required value="<?php echo $row['age']; ?>" readonly>
            </div>
            <div class="col-md-2 form-group">
               <?php                           
                  $gender  = mysqli_query($conn, "SELECT DISTINCT gender FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_gender = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_gender);
              ?>
              <label>Gender</label>
              <select class="custom-select" name="gender" required disabled>
                  <?php foreach($gender as $rows):?>
                        <option value="<?php echo $rows['gender']; ?>"  
                            <?php if($row['gender'] == $rows['gender']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['gender']; ?>                                           
                        </option>

                 <?php endforeach;?>
               </select> 
            </div>
            <div class="col-md-5 form-group">
              <label for=""><b>Place of Birth</b></label>
              <input type="text" class="form-control"  placeholder="Place of birth" name="placeofbirth" required value="<?php echo $row['place_of_birth']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <?php                           
                  $status  = mysqli_query($conn, "SELECT DISTINCT status FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_status = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_status);
              ?>
              <label>Civil Status</label>
              <select class="custom-select" name="civilstatus" required disabled>
                  <?php foreach($status as $rows):?>
                        <option value="<?php echo $rows['status']; ?>"  
                            <?php if($row['gender'] == $rows['status']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['status']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select> 
            </div>
            
            <div class="col-md-4 form-group">
              <?php                           
                  $educational_attainment  = mysqli_query($conn, "SELECT DISTINCT educational_attainment FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_educational_attainment = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_educational_attainment);
              ?>
              <label>Educational Attainment</label>
              <select class="custom-select" name="educationalattainment" required disabled>
                  <?php foreach($educational_attainment as $rows):?>
                        <option value="<?php echo $rows['educational_attainment']; ?>"  
                            <?php if($row['gender'] == $rows['educational_attainment']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['educational_attainment']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select> 

            </div>
            <div class="col-md-4 form-group">
              <?php                           
                  $employment_status  = mysqli_query($conn, "SELECT DISTINCT employment_status FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_employment_status = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_employment_status);
              ?>
              <label>Employment Status</label>
              <select class="custom-select" name="workstatus" required disabled>
                  <?php foreach($employment_status as $rows):?>
                        <option value="<?php echo $rows['employment_status']; ?>"  
                            <?php if($row['gender'] == $rows['employment_status']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['employment_status']; ?>                                           
                        </option>
                 <?php endforeach;?>
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
              <input type="text" class="form-control"  placeholder="Work name" name="workname" id="workname" value="<?php echo $row['work_name']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <?php                           
                  $type_of_work  = mysqli_query($conn, "SELECT DISTINCT type_of_work FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_type_of_work = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_type_of_work);
              ?>
              <label>Type of Work</label>
              <select class="custom-select" name="worktype" required disabled>
                  <?php foreach($type_of_work as $rows):?>
                        <option value="<?php echo $rows['type_of_work']; ?>"  
                            <?php if($row['gender'] == $rows['type_of_work']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['type_of_work']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Salary</b></label>
              <input type="text" class="form-control"  placeholder="Monthly Salary" name="salary" id="salary" value="<?php echo $row['salary']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Source of Income</b></label>
              <input type="text" class="form-control"  placeholder="Source of Income" name="source" id="source" value="<?php echo $row['source_of_income']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for=""><b>Religion</b></label>
              <input type="text" class="form-control"  placeholder="Religion" name="religion" required value="<?php echo $row['religion']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <?php                           
                  $part_of_tribe  = mysqli_query($conn, "SELECT DISTINCT part_of_tribe FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_part_of_tribe = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_part_of_tribe);
              ?>
              <label>Part of Any Tribe?</label>
              <select class="custom-select" name="tribe" required disabled>
                  <?php foreach($part_of_tribe as $rows):?>
                        <option value="<?php echo $rows['part_of_tribe']; ?>"  
                            <?php if($row['gender'] == $rows['part_of_tribe']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['part_of_tribe']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select>
            </div>
            <div class="col-md-4 form-group">
              <?php                           
                  $program_services  = mysqli_query($conn, "SELECT DISTINCT program_services FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_program_services = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_program_services);
              ?>
              <label>Program and Services benefited</label>
              <select class="custom-select" name="programservices" required disabled>
                  <?php foreach($program_services as $rows):?>
                        <option value="<?php echo $rows['program_services']; ?>"  
                            <?php if($row['gender'] == $rows['program_services']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['program_services']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select>
            </div>
            <div class="col-md-3 form-group">
              <label for=""><b>Number of family members</b></label>
              <input type="number" class="form-control"  placeholder="Number of family members" name="numberofmembers" required value="<?php echo $row['num_fam_members']; ?>" readonly>
            </div>
            <div class="col-md-5 form-group">
              <label for=""><b>Assets/Properties</b></label>
              <input type="text" class="form-control"  placeholder="Assets/Properties" name="properties" required value="<?php echo $row['assets']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <?php                           
                  $living_with  = mysqli_query($conn, "SELECT DISTINCT living_with FROM household_head");
                  $id = $_GET['household_Id'];
                  $all_living_with = mysqli_query($conn, "SELECT * FROM household_head  where household_Id = '$id' ");
                  $row = mysqli_fetch_array($all_living_with);
              ?>
              <label>Living with</label>
              <select class="custom-select" name="livingwith" required disabled>
                  <?php foreach($living_with as $rows):?>
                        <option value="<?php echo $rows['living_with']; ?>"  
                            <?php if($row['gender'] == $rows['living_with']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['living_with']; ?>                                           
                        </option>
                 <?php endforeach;?>
               </select>
            </div>
            </div>
            <div class="row p-3">
              <div class="col-md-6 form-group">
                <label for=""><b>Family member #1</b></label>
                <input type="text" class="form-control"  placeholder="Family member #1" name="first_child" value="<?php echo str_replace(',', ' - ', $row['first_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #2</b></label>
                <input type="text" class="form-control"  placeholder="Family member #2" name="second_child" value="<?php echo str_replace(',', ' - ', $row['secon_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #3</b></label>
                <input type="text" class="form-control"  placeholder="Family member #3" name="third_child" value="<?php echo str_replace(',', ' - ', $row['3rd_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #4</b></label>
                <input type="text" class="form-control"  placeholder="Family member #4" name="fourth_child" value="<?php echo str_replace(',', ' - ', $row['fourth_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #5</b></label>
                <input type="text" class="form-control"  placeholder="Family member #5" name="fifth_child" value="<?php echo str_replace(',', ' - ', $row['fifth_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #6</b></label>
                <input type="text" class="form-control"  placeholder="Family member #6" name="sixth_child" value="<?php echo str_replace(',', ' - ', $row['sixth_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #7</b></label>
                <input type="text" class="form-control"  placeholder="Family member #7" name="seventh_child" value="<?php echo str_replace(',', ' - ', $row['seventh_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #8</b></label>
                <input type="text" class="form-control"  placeholder="Family member #8" name="eight_child" value="<?php echo str_replace(',', ' - ', $row['eight_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #9</b></label>
                <input type="text" class="form-control"  placeholder="Family member #9" name="nineth_child" value="<?php echo str_replace(',', ' - ', $row['nineth_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #10</b></label>
                <input type="text" class="form-control"  placeholder="Family member #10" name="tenth_child" value="<?php echo str_replace(',', ' - ', $row['tenth_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #11</b></label>
                <input type="text" class="form-control"  placeholder="Family member #11" name="eleventh_child" value="<?php echo str_replace(',', ' - ', $row['eleventh_child']); ?>" readonly> 
            </div>
            <div class="col-md-6 form-group">
                <label for=""><b>Family member #12</b></label>
                <input type="text" class="form-control"  placeholder="Family member #12" name="twelveth_child" value="<?php echo str_replace(',', ' - ', $row['twelveth_child']); ?>" readonly> 
            </div>
            </div>    
            <div class="col-md-12 form-group">
              <label for=""><b>Skills</b></label>
              <input type="text" class="form-control" name="skills" placeholder="Skills" value="<?php echo $row['skills']; ?>" required readonly>
            </div>

            <div class="text-center"><a href="about_me_update.php?household_Id=<?php echo $id; ?>" class="btn btn-success">Update</a></div>
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

