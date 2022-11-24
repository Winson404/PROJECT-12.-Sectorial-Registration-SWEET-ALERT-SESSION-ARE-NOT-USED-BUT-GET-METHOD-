<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
  <main id="main">

<?php 
    if(isset($_POST['search'])) {
    $email = $_POST['email'];
    $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email'");
    if(mysqli_num_rows($fetch) > 0) {
    $row = mysqli_fetch_array($fetch);
?>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <h4 class="text-center mt-1">RESET PASSWORD</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center"><b>Send code via email?</b></p>
            <form action="verifycode.php" method="post" >
              <div class="row d-flex justify-content-center">
                    <p class="text-center mb-4"><?php echo ' '.$row['email'].' '; ?></p>
                    <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
              </div>
              <div class="text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary" name="sendcode" style="width: 100%;">Continue</button>
              </div>
              <a href="forgotpassword.php" style="margin-top: 10px;">Not you?</a>  
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
        <h4 class="text-center mt-1">404 NOT FOUND</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center"><b>Sorry, this account does not exist.</b></p>
            <form action="sendcode.php" method="post" >
              <div class="row d-flex justify-content-center">
                  <div class="input-group mb-3">
                  <img src="images/hack-khaby.gif" alt="" style="width: 100px;  display: block;margin-left: auto;margin-right: auto;margin-bottom: -12px;">
                </div> 
              </div>
              <div class="text-center mt-2 mb-3">
                 <a href="forgotpassword.php" class="btn btn-primary" style="margin-top: 10px;">Back</a>  
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php } } else { ?>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
        <h4 class="text-center mt-1">404 NOT FOUND</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <p class="text-center"><b>Sorry, this account does not exist.</b></p>
            <form action="sendcode.php" method="post" >
              <div class="row d-flex justify-content-center">
                   <div class="input-group mb-3">
                  <img src="images/hack-khaby.gif" alt="" style="width: 100px;  display: block;margin-left: auto;margin-right: auto;margin-bottom: -12px;">
                </div>
              </div>
              <div class="text-center mt-2 mb-3">
                 <a href="forgotpassword.php" class="btn btn-primary" style="margin-top: 10px;">Back</a>  
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php } ?>

  </main>

<?php include 'footer.php'; ?>
