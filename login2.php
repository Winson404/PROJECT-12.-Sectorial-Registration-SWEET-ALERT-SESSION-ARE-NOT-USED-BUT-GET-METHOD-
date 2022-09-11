<?php 
  include 'header.php'; 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>

<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->
  
<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->

  <main id="main">

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <div class="section-title">
          <h2>LOGIN</h2>
              
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
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
              <div class="text-center mt-2"><button type="submit" class="btn btn-primary" name="login" style="width: 100%;">Login</button></div>
              <p id="link">Don't have an account? <a href="index.php">Click here!</a></p>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>