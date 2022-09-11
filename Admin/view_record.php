<!-- ****************************************************VIEW*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="view<?php echo $row['household_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> View record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="row">
            <div class="col-md-12">
              <p><b>Application type: </b> <?php echo str_replace(',', '', $row['application_type']); ?></p>
            </div>
            <div class="col-md-6 form-group">
              <label for="">First name</label>
              <input type="text" class="form-control" value="<?php echo $row['firstname']; ?>" readonly>
            </div>
            <div class="col-md-6 form-group">
              <label for="">Middle name</label>
              <input type="text" class="form-control" value="<?php echo $row['middlename']; ?>" readonly>
            </div>
            <div class="col-md-6 form-group">
              <label for="">Last name</label>
              <input type="text" class="form-control" value="<?php echo $row['lastname']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" value="<?php echo $row['email']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Contact number</label>
              <input type="number" class="form-control" value="<?php echo $row['contact_number']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Sectorial Registration</label>
              <input type="text" class="form-control"  value="<?php echo str_replace(',', '', $row['sectorial_registration']); ?>" readonly>
            </div>

            <?php if($row['sectorial_registration'] == 'Solo Parent,'): ?>

            <div class="col-md-4 form-group">
              <label for="">Cause of being solo parent</label>
              <input type="text" class="form-control"  value="<?php echo $row['causeofbeingsoloparent']; ?>" readonly>
            </div>

          <?php elseif($row['sectorial_registration'] == 'PWD,'): ?>

            <div class="col-md-4 form-group">
              <label for="">Type of Disabilities</label>
              <input type="text" class="form-control"  value="<?php echo $row['typeofdisabilities']; ?>" readonly>
            </div>
          <?php else: ?>

          <?php endif; ?>


            <div class="col-md-5 form-group">
              <label for="">Address</label>
              <input type="text" class="form-control"  value="<?php echo $row['address']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for="">Date of birth</label>
              <input type="date" class="form-control"  value="<?php echo $row['dob']; ?>" readonly>
            </div>
            <div class="col-md-2 form-group">
              <label for="">Age</label>
              <input type="number" class="form-control"  value="<?php echo $row['age']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Gender</label>
              <input type="text" class="form-control"  value="<?php echo $row['gender']; ?>" readonly>
            </div>
            <div class="col-md-6 form-group">
              <label for="">Place of Birth</label>
              <input type="text" class="form-control"  value="<?php echo $row['place_of_birth']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Civil Status</label>
              <input type="text" class="form-control"  value="<?php echo $row['status']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Educational Attainment</label>
              <input type="text" class="form-control"  value="<?php echo $row['educational_attainment']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Employment Status</label>
              <input type="text" class="form-control"  value="<?php echo $row['employment_status']; ?>" readonly>
            </div>

            <?php if($row['employment_status'] == 'Employed' || $row['employment_status'] == 'Self-employed'): ?>
            <div class="col-md-4 form-group">
              <label for="">Work name</label>
              <input type="text" class="form-control"  value="<?php echo $row['work_name']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Type of Work</label>
              <input type="text" class="form-control"  value="<?php echo $row['type_of_work']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Salary</label>
              <input type="text" class="form-control"  value="<?php echo $row['salary']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Source of Income</label>
              <input type="text" class="form-control"  value="<?php echo $row['source_of_income']; ?>" readonly>
            </div>
          <?php else: ?>
          <?php endif; ?>


            <div class="col-md-3 form-group">
              <label for="">Religion</label>
              <input type="text" class="form-control"  value="<?php echo $row['religion']; ?>" readonly>
            </div>
            <div class="col-md-2 form-group">
              <label for="">Part of tribe?</label>
              <input type="text" class="form-control"  value="<?php echo $row['part_of_tribe']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Services Benefited</label>
              <input type="text" class="form-control"  value="<?php echo $row['program_services']; ?>" readonly>
            </div>
            <div class="col-md-3 form-group">
              <label for="">Num. of Family members</label>
              <input type="text" class="form-control"  value="<?php echo $row['num_fam_members']; ?>" readonly>
            </div>
            <div class="col-md-8 form-group">
              <label for="">Assets/ Properties</label>
              <input type="text" class="form-control"  value="<?php echo $row['assets']; ?>" readonly>
            </div>
            <div class="col-md-4 form-group">
              <label for="">Living with</label>
              <input type="text" class="form-control"  value="<?php echo $row['living_with']; ?>" readonly>
            </div>
            

          </div>

          <div class="row mt-3">

          <?php if($row['first_child'] == ',,,,' && $row['secon_child'] == ',,,,' && $row['3rd_child'] == ',,,,' && $row['fourth_child'] == ',,,,' && $row['fifth_child'] == ',,,,' && $row['sixth_child'] == ',,,,' && $row['seventh_child'] == ',,,,' && $row['eight_child'] == ',,,,' && $row['nineth_child'] == ',,,,' && $row['tenth_child'] == ',,,,' && $row['eleventh_child'] == ',,,,' && $row['twelveth_child'] == ',,,,'): ?>
          <?php else: ?>
            <div class="col-md-12 form-group">
              <h5><b>Family Members</b></h5>
              <br>
              <p class="form-control" readonly>1.  <?php echo str_replace(',', ' - ', $row['first_child']); ?></p>
              <p class="form-control" readonly>2.  <?php echo str_replace(',', ' - ', $row['secon_child']); ?></p>
              <p class="form-control" readonly>3.  <?php echo str_replace(',', ' - ', $row['3rd_child']); ?></p>
              <p class="form-control" readonly>4.  <?php echo str_replace(',', ' - ', $row['fourth_child']); ?></p>
              <p class="form-control" readonly>5.  <?php echo str_replace(',', ' - ', $row['fifth_child']); ?></p>
              <p class="form-control" readonly>6.  <?php echo str_replace(',', ' - ', $row['sixth_child']); ?></p>
              <p class="form-control" readonly>7.  <?php echo str_replace(',', ' - ', $row['seventh_child']); ?></p>
              <p class="form-control" readonly>8.  <?php echo str_replace(',', ' - ', $row['eight_child']); ?></p>
              <p class="form-control" readonly>9.  <?php echo str_replace(',', ' - ', $row['nineth_child']); ?></p>
              <p class="form-control" readonly>10. <?php echo str_replace(',', ' - ', $row['tenth_child']); ?></p>
              <p class="form-control" readonly>11. <?php echo str_replace(',', ' - ', $row['eleventh_child']); ?></p>
              <p class="form-control" readonly>12. <?php echo str_replace(',', ' - ', $row['twelveth_child']); ?></p>
            </div>
          <?php endif; ?>

            <div class="col-md-12 form-group">
              <label for="">Skills</label>
              <input type="text" class="form-control"  value="<?php echo $row['skills']; ?>" readonly>
            </div>
            
          </div>









      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-success" name="delete"><i class="fa-solid fa-floppy-disk"></i> Update</button>
      </div>
      
    </div>
  </div>
</div>
<!-- ****************************************************END VIEW*********************************************************************** -->

























