<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
  <main id="main">

  <?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/PHPMailer/src/Exception.php';
    require 'vendor/PHPMailer/src/PHPMailer.php';
    require 'vendor/PHPMailer/src/SMTP.php';

    if(isset($_POST['sendcode'])) {

    $email = $_POST['email'];
    $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE email='$email'");
    if(mysqli_num_rows($fetch) > 0) {

      $row  = mysqli_fetch_array($fetch);
      $household_Id = $row['household_Id'];
      $key  = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

      $check_code = mysqli_query($conn, "SELECT v_code FROM household_head WHERE household_Id='$household_Id'");
      if($check_code == NULL) {

        $insert_code = mysqli_query($conn, "UPDATE household_head SET v_code='$key' WHERE household_Id='$household_Id'");
        if($insert_code) {

          $get_code = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
          $row2 = mysqli_fetch_array($get_code);
          $code = $row2['v_code'];

          $subject = 'Verification code';
          $message = '<p>Good day sir/maam '.$email.', your verification code is <b>'.$code.'</b>. Please do not share this code to other people. Thank you!</p>
          <p>You can change your password by just clicking it <a href="http://localhost/PROJECT%2012.%20Sectorial%20Registration%20(SWEET%20ALERT%20,%20SESSION%20ARE%20NOT%20USED,%20BUT%20GET%20METHOD)/changepassword2.php?h_ID='.$household_Id.'&&email='.$email.'&&key='.$code.'">here!gfdgdfg</a></p> 
          <p><b>NOTE:</b> This is a system generated email. Please do not reply.</p> ';

          $mail = new PHPMailer(true);                            
          try {
              $mail->isSMTP();                                     
              $mail->Host = 'smtp.gmail.com';                      
              $mail->SMTPAuth = true;                             
              $mail->Username = 'mswdo7963@gmail.com';     
              $mail->Password = 'onxiszflbdgrabiz';              
              $mail->SMTPOptions = array(
                  'ssl' => array(
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
                  )
              );                         
              $mail->SMTPSecure = 'ssl';                           
              $mail->Port = 465;                                   

              $mail->setFrom('mswdo7963@gmail.com');
              
              $mail->addAddress($email);              
              $mail->addReplyTo('mswdo7963@gmail.com');
              
              $mail->isHTML(true);                                  
              $mail->Subject = $subject;
              $mail->Body    = $message;

              $mail->send();
?>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center login">
              <img src="images/user.png" alt="" width="60">
            </div>
            <h4 class="text-center mt-1">Enter security code</h4>
          <div class="row justify-content-center">
            <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
              <p class="text-center">Please check your email for a message with your code. Your code is 6 numbers long.</p>
              <form action="changepassword.php" method="post" >
                <div class="row d-flex justify-content-center">
                      <div class="mb-3 mt-2">
                        <input type="hidden" class="form-control" value="<?php echo $household_Id; ?>" name="household_Id">
                        <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
                        <input type="text" class="form-control text-center" name="code" placeholder="Enter code">
                      </div>
                </div>
                <div class="text-center mt-2 mb-3">
                  <p>We sent your code to: <b><?php echo $email; ?></b></p>
                  <button type="submit" class="btn btn-primary" name="verify_code" style="width: 100%;">Continue</button>
                </div>
                <a href="sendcode2.php?email=<?php echo $email; ?>" style="margin-top: 10px;">Didn't get a code?</a>  
                <p id="link" class="mt-2"><a href="login2.php">Back to login page</a></p>
              </form>
            </div>
          </div>
        </div>
      </section>

<?php } catch (Exception $e) { ?>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center login">
              <img src="images/user.png" alt="" width="60">
            </div>
          <h4 class="text-center mt-1">EMAIL NOT SENT</h4>
          <div class="row justify-content-center">
            <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
              <p class="text-center">Sorry, something went wrong while sending an email to <b><?php echo $email; ?></p>
                <p id="link" class="mt-2"><a href="login2.php">Back to login page</a></p>
            </div>
          </div>
        </div>
      </section>

<?php } } // CLOSING TAG - IF INSERT CODE IS TRUE
   else { ?>

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

<?php } } // CLOSING TAG IF CODE IS NULL
  else {  // ELSE STATEMENT IF VERIFICATION CODE IS NOT NULL

        $update_code = mysqli_query($conn, "UPDATE household_head SET v_code='$key' WHERE household_Id='$household_Id'");
        if($update_code) {

          $get_code = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
          $row2 = mysqli_fetch_array($get_code);
          $code = $row2['v_code'];

          $subject = 'Verification code';
          $message = '<p>Good day sir/maam '.$email.', your verification code is <b>'.$code.'</b>. Please do not share this code to other people. Thank you!</p>
          <p>You can change your password by just clicking it <a href="http://localhost/PROJECT%2012.%20Sectorial%20Registration%20(SWEET%20ALERT%20,%20SESSION%20ARE%20NOT%20USED,%20BUT%20GET%20METHOD)/changepassword2.php?h_ID='.$household_Id.'&&email='.$email.'&&key='.$code.'">here!</a></p> 
          <p><b>NOTE:</b> This is a system generated email. Please do not reply.</p> ';

          $mail = new PHPMailer(true);                            
          try {
              //Server settings
              $mail->isSMTP();                                     
              $mail->Host = 'smtp.gmail.com';                      
              $mail->SMTPAuth = true;                             
              $mail->Username = 'mswdo7963@gmail.com';     
              $mail->Password = 'onxiszflbdgrabiz';              
              $mail->SMTPOptions = array(
                  'ssl' => array(
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
                  )
              );                         
              $mail->SMTPSecure = 'ssl';                           
              $mail->Port = 465;                                   

              //Send Email
              $mail->setFrom('mswdo7963@gmail.com');
              
              //Recipients
              $mail->addAddress($email);              
              $mail->addReplyTo('mswdo7963@gmail.com');
              
              //Content
              $mail->isHTML(true);                                  
              $mail->Subject = $subject;
              $mail->Body    = $message;

              $mail->send();
?>

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="d-flex justify-content-center login">
                  <img src="images/user.png" alt="" width="60">
                </div>
              <h4 class="text-center mt-1">Enter security code</h4>
              <div class="row justify-content-center">
                <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
                  <p class="text-center">Please check your email for a message with your code. Your code is 6 numbers long.</p>
                  <form action="changepassword.php" method="post" >
                    <div class="row d-flex justify-content-center">
                          <div class="mb-3 mt-2">
                            <input type="hidden" class="form-control" value="<?php echo $household_Id; ?>" name="household_Id">
                            <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
                            <input type="text" class="form-control text-center" name="code" placeholder="Enter code">
                          </div>
                    </div>
                    <div class="text-center mt-2 mb-3">
                      <p>We sent your code to: <b><?php echo $email; ?></b></p>
                      <button type="submit" class="btn btn-primary" name="verify_code" style="width: 100%;">Continue</button>
                    </div>
                    <a href="sendcode2.php?email=<?php echo $email; ?>" style="margin-top: 10px;">Didn't get a code?</a>  
                    <p id="link" class="mt-2"><a href="login2.php">Back to login page</a></p>
                  </form>
                </div>
              </div>
            </div>
      </section>

<?php } catch (Exception $e) { ?>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center login">
              <img src="images/user.png" alt="" width="60">
            </div>
          <h4 class="text-center mt-1">EMAIL NOT SENT</h4>
          <div class="row justify-content-center">
            <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
              <p class="text-center">Sorry, something went wrong while sending an email to <b><?php echo $email; ?></p>
                <p id="link" class="mt-2"><a href="login2.php">Back to login page</a></p>
            </div>
          </div>
        </div>
      </section>

<?php } } // CLOSING TAG - IF UPDATE CODE IS TRUE
    else { ?>

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

<?php } } // CLOSING IF ELSE STATEMENT IF VERIFICATION CODE IS NOT NULL
      } // CLOSING IF STATEMENT IF EMAIL IS GREATER THAN 0 (2nd if statement)
      else { ?>  

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center login">
              <img src="images/user.png" alt="" width="60">
            </div>
          <div class="section-title">
            <h2>404 Not Found</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
              <p class="text-center">Sorry, your email <b><?php echo $email; ?></b>, does not exist in our database.</p>
                <p id="link" class="mt-2"><a href="forgotpassword.php">Back</a></p>
            </div>
          </div>
        </div>
      </section>

 <?php } } // CLOSING FIRST IF STATEMENT
    else { ?>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center login">
              <img src="images/user.png" alt="" width="60">
            </div>
          <div class="section-title">
            <h2>500 ERROR</h2>
          </div>
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
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>