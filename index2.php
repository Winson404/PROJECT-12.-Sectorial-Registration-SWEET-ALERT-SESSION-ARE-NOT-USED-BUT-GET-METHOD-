<title>Registration | Sectorial Registration</title>
<?php 
    include 'header.php'; 
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
        <div class="title">
          <h2 class="reg mt-2">Registration</h2>
        </div>
        <form action="register_code2.php" method="post" class=" pb-4 rows " enctype="multipart/form-data">
          <div class="row  pb-3 ">
          <center>
            <div class="col-md-7 form-group mt-3">
              <input type="text" class="form-control ins" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-7 form-group mt-3">
              <input type="text" class="form-control ins" placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-7 form-group mt-3">
              <input type="text" class="form-control ins" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-7 form-group mt-3">
              <input type="email" class="form-control ins" placeholder="mail@email.com" name="email"required>
            </div>
            <div class="col-md-7 form-group mt-3">
              <input type="number" class="form-control ins" placeholder="09123456789" name="contact"required>
            </div>
            <div class="col-md-7 form-group mt-3">
              <input type="password" class="form-control ins" placeholder="Password" name="password" id="newpassword" required>
            </div>
            <div class="col-md-7 form-group mt-3">
            <input type="password" class="form-control ins" placeholder="Confirm password" name="cpassword" id="confirmpassword" onkeyup="validate_password()" required>
              <span id="wrong_pass_alert"></span>
            </div>
            <div class="col-md-4 form-group mt-3">
              <label for=""><b>Sectorial registration</b></label>
              <br> 
              <input type="radio" name="sectorial_registration[]" id="solo" value="Solo Parent" class="applicationtype"> Solo Parent &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="pwd" value="PWD" class="applicationtype"> PWD &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="senior" value="Senior Citizens" class="applicationtype"> Senior Citizens
            </div>
            <label for=""><b>Application Type</b></label>
              <br> 
              <input type="radio" name="applicationtype[]" value="New" class="applicationtypes"> New &nbsp;&nbsp;
              <input type="radio" name="applicationtype[]" value="Renewal" class="applicationtypes"> Renewal
            </div>
            </div>    
            <center>
            <p class="mt-2">Already have an account? <a href="login2.php">Click here!</a></p>
          </div>
          <div class="text-center"><button class="btn btn-primary" type="submit" name="create_household" id="register">Register</button></div>
        </form>
      </div>
    </section>

<?php 
  include 'footer.php'; 
  include 'sweetalert_messages.php'; 
?>

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