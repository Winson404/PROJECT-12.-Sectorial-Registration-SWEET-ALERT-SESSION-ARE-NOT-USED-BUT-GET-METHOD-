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
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="household_Id">
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
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="household_Id">
          <label for="">Phone Number</label>
          <input type="number" class="form-control" value="<?php echo $r_f['contact_number']; ?>" name="phone">
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
          <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="household_Id">
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