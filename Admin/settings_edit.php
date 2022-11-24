<!-- ****************************************************EMAIL UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="email<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Update E-mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="admin_Id">
          <label for="">Email</label>
          <input type="email" class="form-control" value="<?php echo $r_f['email']; ?>" name="email">
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-success" name="email-only"><i class="fa-solid fa-pen"></i> Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END EMAIL UPDATE*********************************************************************** -->








<!-- ****************************************************PHONE NUMBER UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="phone<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Update Phone Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="admin_Id">
          <label for="">Phone Number</label>
          <input type="number" class="form-control" value="<?php echo $r_f['contact']; ?>" name="phone">
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-success" name="phone-only"><i class="fa-solid fa-pen"></i> Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END PHONE NUMBER UPDATE*********************************************************************** -->




<!-- ****************************************************PHONE NUMBER UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="dob<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Update Birthday</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="admin_Id">
          <label for="">Birthday</label>
          <input type="date" class="form-control" value="<?php echo $r_f['dob']; ?>" name="dob">
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-success" name="dob-only"><i class="fa-solid fa-pen"></i> Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END PHONE NUMBER UPDATE*********************************************************************** -->





<!-- ****************************************************CHANGE PASSWORD*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="password<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Change password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="about_me_update_code.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="admin_Id">
          <label for=""><b>Old password</b></label>
          <input type="password" class="form-control form-control-sm" placeholder="Old password" name="OldPassword" required>
          <br>
          <label for=""><b>New password</b></label>
          <input type="password" class="form-control form-control-sm" placeholder="Password" name="password" required id="new_password">
          <br>
          <label for=""><b>Confirm password</b></label>
          <input type="password" class="form-control form-control-sm" placeholder="Confirm password" name="cpassword" required id="new_cpassword" onkeyup="new_validate_password()">
          <small id="new_wrong_pass_alert"></small>

      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-primary" name="password_admin" id="new_create"><i class="fa-solid fa-floppy-disk"></i> Change password</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END CHANGE PASSWORD*********************************************************************** -->

<script>
    function new_validate_password() {

      var pass = document.getElementById('new_password').value;
      var confirm_pass = document.getElementById('new_cpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('new_wrong_pass_alert').style.color = 'red';
        document.getElementById('new_wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('new_create').disabled = true;
        document.getElementById('new_create').style.opacity = (0.4);
      } else {
        document.getElementById('new_wrong_pass_alert').style.color = 'green';
        document.getElementById('new_wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('new_create').disabled = false;
        document.getElementById('new_create').style.opacity = (1);
      }
    }

</script>



<!-- LOGOUT -->
   <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
             <div class="modal-header alert-light">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Admin logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../logout.php" method="POST">
                <input type="hidden" class="form-control" value="<?php echo $row['user_Id']; ?>" name="user_Id">
                <?php if($row['gender'] === 'Male'):?>
                    <h6>Mr.   <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php else: ?>
                    <h6>Ma'am <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php endif; ?>
            </div>
            <div class="modal-footer alert-light">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
              <button type="submit" class="btn btn-primary" name="delete_user"><i class="fa-solid fa-circle-check"></i> Confirm</button>
            </div>
              </form>
          </div>
        </div>
      </div>