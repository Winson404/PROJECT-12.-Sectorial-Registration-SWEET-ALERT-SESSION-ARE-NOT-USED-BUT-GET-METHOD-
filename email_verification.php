<?php 
    include 'header.php'; 
    if(isset($_GET['h_ID']) && isset($_GET['email']) && isset($_GET['key']))

      $household_Id = $_GET['h_ID'];
      $email = $_GET['email'];
      $key = $_GET['key'];
?>
<style>
  .bg { background-color: #FED8B1; }
  .reg { background-color: #FED8B1; color: black; }
  .rows{ background-color: #FED8B1; }
  .ins{ background-color: #FDA172; border: 2px groove grey; color: black; }
</style>
    <section class="bg">
      <div class="container cos" data-aos="fade-up">
      <center>
        <form action="register_code2.php" method="post" class=" pb-4 rows " enctype="multipart/form-data">
          <div class="row  pb-3 ">
          <center>
            <div class="col-md-4 form-group mt-3">
              <input type="hidden" class="form-control ins" value="<?php echo $email; ?>" name="email" required >
              <input type="hidden" class="form-control ins" value="<?php echo $household_Id; ?>" name="household_Id" required >
              <input type="text" class="form-control ins" placeholder="Enter verication code " name="v_code" required >
            </div>
            </div>    
            <center>
            <p class="mt-2">Already have an account? <a href="login2.php">Click here!</a></p>
          </div>
          <div class="text-center"><button class="btn btn-primary" type="submit" name="verify_email" id="register">Verify email</button></div>
        </form>
      </div>
    </section>

<?php include 'footer.php'; ?>


<script src="sweetalert2.min.js"></script>

<?php 
    if(isset($_GET['sectorial_registrations'])) { 
      $sectorial_registration = $_GET['sectorial_registrations'];
      if($sectorial_registration == 'PWD,') {
?>
    <script>
      swal ({
        title: "<?php echo $_SESSION['message']; ?>",
        icon:  "<?php echo $_SESSION['status']; ?>",
        button: "Okay",
      }).then(function() {
          window.location = "Users/about_me4.php?household_Id=<?php echo $_SESSION['household_Id']; ?>";
      });
    </script>

<?php } elseif($sectorial_registration == 'Senior Citizens,') { ?>

    <script>
      swal ({
        title: "<?php echo $_SESSION['message']; ?>",
        icon:  "<?php echo $_SESSION['status']; ?>",
        button: "Okay",
      }).then(function() {
          window.location = "Users/about_me3.php?household_Id=<?php echo $_SESSION['household_Id']; ?>";
      });
    </script>

<?php } else { ?>

    <script>
      swal ({
        title: "<?php echo $_SESSION['message']; ?>",
        icon:  "<?php echo $_SESSION['status']; ?>",
        button: "Okay",
      }).then(function() {
          window.location = "Users/about_me2.php?household_Id=<?php echo $_SESSION['household_Id']; ?>";
      });
    </script>

<?php } unset($_SESSION['message']); unset($_SESSION['status']); } ?>
