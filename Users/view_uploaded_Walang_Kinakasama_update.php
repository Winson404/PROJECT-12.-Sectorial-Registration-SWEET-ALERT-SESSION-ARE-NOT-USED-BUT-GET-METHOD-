<!-- ****************************************************DELETE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="update<?php echo $household_Id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header alert-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Salaysay Na Ikaw Ay Walang Kinakasama Sa Kasalukuyan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" value="<?php echo $household_Id; ?>" name="household_Id">
          
          <div class="form-group col-lg-12 mb-4">
              <div class="form-group" id="updatepreview">
              </div>
          </div>

          <div class="form-group col-lg-12 mb-4">
            <label for="fileToUpload">Image</label>
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required onchange="updategetImagePreview(event)">
          </div>


      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success" name="walang_kinakasama">Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END DELETE*********************************************************************** -->