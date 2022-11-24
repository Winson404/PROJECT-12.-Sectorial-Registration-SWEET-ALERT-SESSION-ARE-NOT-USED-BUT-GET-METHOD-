<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
  <main id="main" class="mb-5">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-center login">
            <img src="images/user.png" alt="" width="60">
          </div>
          <h4 class="text-center mt-1">FIND YOUR ACCOUNT</h4>
        <div class="row justify-content-center">
          <div class="col-lg-4 rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <form action="sendcode.php" method="post" >
              <div class="row d-flex justify-content-center">
                    <div class="mb-3 mt-2">
                      <input type="email" class="form-control text-center" name="email" placeholder="Email@mail.com">
                    </div>
              </div>
              <div class="text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary" name="search" style="width: 100%;">Search</button>
              </div>
              <p id="link" class="mt-2"><a href="login2.php">Back to login</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
