<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
  <main id="main">
<?php 
  if(isset($_POST['verify_code'])) {
  $household_Id = $_POST['household_Id'];
  $email   = $_POST['email'];
  $code    = $_POST['code'];
  $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email' AND v_code='$code' AND household_Id='$household_Id'");

    if(mysqli_num_rows($fetch) > 0) {
    $row = mysqli_fetch_array($fetch);
?>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <h4 class="text-center mt-1">CREATE NEW PASSWORD</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center">Please create new password</p>
            <form action="login2.php" method="post" >
              <input type="hidden" class="form-control" name="household_Id" value="<?php echo $household_Id; ?>">
              <div class="row d-flex justify-content-center">
                    <div class="mb-3 mt-2">
                      <input type="password" class="form-control" name="password" placeholder="Enter new password" id="mynewpassword">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="cpassword" placeholder="Confirm new password" id="cpassword" onkeyup="validate_password()">
                      <input type="checkbox" onclick="myFunction()"> Show Password
                      <br>
                      <small id="wrong_pass_alert"></small>
                    </div>
              </div>
              <div class="text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary" name="changepassword" style="width: 100%;" id="changepassword">Change password</button>
              </div>
              <p id="link" class="mt-2"><a href="login2.php">Back to login</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php } else { ?>

   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <h4 class="text-center mt-1">500 ERROR</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center">Sorry, unexpected error. Please try again later.</p>
              <p id="link" class="mt-2"><a href="forgotpassword.php">Back</a></p>
          </div>
        </div>
      </div>
    </section>

<?php } } else {?>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <h4 class="text-center mt-1">500 ERROR</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center">Sorry, unexpected error. Please try again later.</p>
              <p id="link" class="mt-2"><a href="forgotpassword.php">Back</a></p>
          </div>
        </div>
      </div>
    </section>

<?php } ?>

  </main>



<?php include 'footer.php'; ?>
<script src="sweetalert2.min.js"></script>

<?php if(isset($_SESSION['message'])) { ?>
    <script>
      swal ({
        title: "<?php echo $_SESSION['message']; ?>",
        icon:  "<?php echo $_SESSION['status']; ?>",
        button: "Okay",
      });
    </script>
<?php unset($_SESSION['message']); unset($_SESSION['status']); } ?>

<script>
  function myFunction() {
    var x = document.getElementById("mynewpassword");
    var y = document.getElementById("cpassword");
    if (x.type === "password" || y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
 }

 // VALIDATE - MATCHED OR NOT MATCHED PASSWORDS
function validate_password() {
    var pass = document.getElementById('mynewpassword').value;
    var confirm_pass = document.getElementById('cpassword').value;
    if(pass == "") {
      confirm_pass.disabled = true;
    } else if (pass != confirm_pass) {
      document.getElementById('wrong_pass_alert').style.color = 'red';
      document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
      document.getElementById('changepassword').disabled = true;
      document.getElementById('changepassword').style.opacity = (0.4);
    } else {
      document.getElementById('wrong_pass_alert').style.color = 'green';
      document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
      document.getElementById('changepassword').disabled = false;
      document.getElementById('changepassword').style.opacity = (1);
    }
}
</script>