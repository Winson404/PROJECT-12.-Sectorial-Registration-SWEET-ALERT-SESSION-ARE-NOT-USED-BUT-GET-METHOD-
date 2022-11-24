<title>Login | Sectorial Registration</title>
<?php include 'header.php';
  // TO SHOW ERROR MESSAGES DURING LOGIN ERROR
  if(isset($_SESSION['message']) && isset($_SESSION['status'])) {
      $_SESSION['message'] = "Password is incorrect.";
      $_SESSION['text'] = "Please try again";
      $_SESSION['status'] = "error";
      include 'sweetalert_messages.php';
  } // END TO SHOW ERROR MESSAGES DURING LOGIN ERROR
 ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
  <main id="main">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="d-flex justify-content-center login">
          <img src="images/user.png" alt="" width="60">
        </div>
        <h4 class="text-center mt-1">LOGIN</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
<?php 
      if(isset($_POST['changepassword'])) {
        $household_Id = $_POST['household_Id'];
        $cpassword = md5($_POST['cpassword']);
        $update = mysqli_query($conn, "UPDATE household_head SET password='$cpassword' WHERE household_Id='$household_Id'");

        if($update) {
            $_SESSION['message'] = "Password has been changed. Please login to your account.";
            $_SESSION['text'] = "Successfully changed";
            $_SESSION['status'] = "success";
            include 'sweetalert_messages.php';
            echo '<script>window.history.go(+1); </script>';
?>

            <form action="login_code.php" method="post" >
              <div class="row d-flex justify-content-center">
                <div class="mb-3 mt-2">
                  <input type="email" class="form-control text-center" name="email" placeholder="Email@mail.com">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control text-center mb-1" name="password" id="password" placeholder="Password">
                  <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
              </div>
              <div class="text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary" name="login" style="width: 100%;">Login</button>
              </div>
                <a href="forgotpassword.php" style="margin-top: 10px;">Forgot password?</a>  
                <p id="link" class="mt-2">Don't have an account? <a href="index2.php">Click here!</a></p>
            </form>

<?php } else { 

            $_SESSION['message'] = "Something went wrong while changing your password.";
            $_SESSION['text'] = "Please try again";
            $_SESSION['status'] = "error";
            include 'sweetalert_messages.php';
            echo '<script>window.history.go(-1); </script>';

} } else { ?> 

          <form action="login_code.php" method="post" >
            <div class="row d-flex justify-content-center">
              <div class="mb-3 mt-2">
                <input type="email" class="form-control text-center" name="email" placeholder="Email@mail.com" required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control text-center mb-1" name="password" id="password" placeholder="Password" required>
                <input type="checkbox" onclick="myFunction()"> Show Password
              </div>
            </div>
            <div class="text-center mt-2 mb-3">
              <button type="submit" class="btn btn-primary" name="login" style="width: 100%;">Login</button>
            </div>
              <a href="forgotpassword.php" style="margin-top: 10px;">Forgot password?</a>  
              <p id="link" class="mt-2">Don't have an account? <a href="index2.php">Click here!</a></p>
          </form>

<?php } ?>

          </div>
        </div>
      </div>
    </section>
  </main>

<?php 
    include 'footer.php'; 
    include 'sweetalert_messages.php'; 
?>

<script>
  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>