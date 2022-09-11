<?php 
    include 'header.php'; 
    include 'login.php';
?>

<!-- ======= Appointment Section ======= -->
    <section class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registration</h2>
          <?php if(isset($_SESSION['success'])) { ?> 
              <h5 class="alert text-success" role="alert"><b><?php echo $_SESSION['success']; ?></b></h5> 
          <?php unset($_SESSION['success']); } ?>


          <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
              <h5 class="alert text-danger" role="alert"><b><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></b></h5>
          <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


          <?php  if(isset($_SESSION['exists'])) { ?>
              <h5 class="alert text-danger" role="alert"><b><?php echo $_SESSION['exists']; ?></b></h5>
          <?php unset($_SESSION['exists']); } ?>
        </div>

        <form action="register_code.php" method="post" class="bg-body pb-4" enctype="multipart/form-data">
          <div class="col-md-12 form-group mt-3">
              <label for=""><b>Application Type</b></label>
              <br> 
              <input type="radio" name="applicationtype[]" value="New" class="applicationtype"> New &nbsp;&nbsp;
              <input type="radio" name="applicationtype[]" value="Old" class="applicationtype"> Old &nbsp;&nbsp;
              <input type="radio" name="applicationtype[]" value="Renewal" class="applicationtype"> Renewal
            </div>
          <div class="row bg-body p-3">
            <div class="col-md-4 form-group">
              <input type="text" class="form-control" placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control" placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)">
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="email" class="form-control" placeholder="mail@email.com" name="email"required>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="number" class="form-control" placeholder="9123456789" name="contact"required>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="password" class="form-control" placeholder="Password" name="password" id="newpassword" required>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="password" class="form-control" placeholder="Confirm password" name="cpassword" id="confirmpassword" onkeyup="validate_password()" required>
              <span id="wrong_pass_alert"></span>
            </div>
            <div class="col-md-4 form-group mt-3">
              <label for=""><b>Sectorial registration</b></label>
              <br> 
              <input type="radio" name="sectorial_registration[]" id="solo" value="Solo Parent" class="applicationtype"> Solo Parent &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="pwd" value="PWD" class="applicationtype"> PWD &nbsp;&nbsp;
              <input type="radio" name="sectorial_registration[]" id="senior" value="Senior Citizens" class="applicationtype"> Senior Citizens
            </div>
            <style> 
                .hidden {
                  display: none;
                }
                .show {
                  display: block;
                }
            </style>      
            <div class="col-md-4 form-group mt-3">
              <label for="" class="hidden" id="cause_label"><b>Cause of being solo parent</b></label>
              <select name="causeofbeingsoloparent" class="form-select hidden" id="cause">
                <option selected value="">Select a reason here</option>
                <option value="Separated">Separated</option>
                <option value="Abandoned">Abandoned</option>
                <option value="Confined">Confined</option>
                <option value="Widow">Widow/Widower</option>
              </select>
              <input type="text" class="form-control hidden" placeholder="Type of Disabilities" name="typeofdisabilities" id="typeofdisabilities">
            </div>
            

            


            <div class="col-md-12 form-group mt-3">
              <textarea class="form-control" name="address" rows="1" placeholder="Address" required></textarea>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="date" class="form-control"  placeholder="Date of birth" name="dob" required>
            </div>
            <div class="col-md-2 form-group mt-3">
              <input type="number" class="form-control"  placeholder="Age" name="age" required>
            </div>
            <div class="col-md-2 form-group mt-3">
              <select name="gender" class="form-select" required>
                <option selected disabled>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-md-5 form-group mt-3">
              <input type="text" class="form-control"  placeholder="Place of birth" name="placeofbirth" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="civilstatus" class="form-select" required>
                <option selected disabled>Civil Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>
            
            <div class="col-md-4 form-group mt-3">
              <select name="educationalattainment" class="form-select" required>
                <option selected disabled>Educational Attainment</option>
                <option value="Elementary level">Elementary level</option>
                <option value="Elementatary Graduate">Elementatary Graduate</option>
                <option value="High School Level">High School Level</option>
                <option value="High School Graduate">High School Graduate</option>
                <option value="College Level">College Level</option>
                <option value="College Graduate">College Graduate</option>
                <option value="Technical Vocational">Technical Vocational</option>
                <option value="Masterate in Graduate School and Doctorate in Post Graduate Studies">Masterate in Graduate School and Doctorate in Post Graduate Studies</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="workstatus" class="form-select workstatus" required>
                <option selected disabled>Employment Status</option>
                <option value="Employed">Employed</option>
                <option value="Unemployed">Unemployed</option>
                <option value="Self-employed">Self-employed</option>
              </select>
            </div>
            <style> 
                .hidden {
                  display: none;
                }
                .show {
                  display: block;
                }
            </style>  
            <div class="col-md-3 form-group mt-3">
              <input type="text" class="form-control"  placeholder="Work name" name="workname" id="workname">
            </div>
            <div class="col-md-3 form-group mt-3">
              <select name="worktype" class="form-select" id="typeofwork">
                <option selected value="N/A">Type of Work</option>
                <option value="Permanent">Permanent</option>
                <option value="Contractual">Contractual</option>
                <option value="Emergency">Emergency</option>
                <option value="Casual">Casual</option>
                <option value="Seasonal">Seasonal</option>
                <option value="Housewife">Housewife</option>
                <option value="Business owner">Business owner</option>
                <option value="Job Order">Job Order</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="text" class="form-control"  placeholder="Monthly Salary" name="salary" id="salary">
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="text" class="form-control"  placeholder="Source of Income" name="source" id="source">
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" class="form-control"  placeholder="Religion" name="religion" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="tribe" class="form-select" required>
                <option selected disabled>Part of any tribe?</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="programservices" class="form-select" required>
                <option selected disabled>Program and Services benefited</option>
                <option value="Educational Assistance">Educational Assistance</option>
                <option value="ECCD">ECCD</option>
                <option value="Scholarship">Scholarship</option>
                <option value="4Ps">4Ps</option>
                <option value="Econonic Training">Econonic Training</option>
                <option value="Medical Assistance">Medical Assistance</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="number" class="form-control"  placeholder="Number of family members" name="numberofmembers" required>
            </div>
            <div class="col-md-5 form-group mt-3">
              <textarea name="properties" id="" cols="30" rows="1" class="form-control" placeholder="Assets/Properties" required></textarea>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="livingwith" class="form-select" required>
                <option selected disabled>Living with</option>
                <option value="Owned house">Owned house</option>
                <option value="Siblings">Siblings</option>
                <option value="Parents">Parents</option>
                <option value="Relative">Relative</option>
                <option value="Mother-in-Law">Mother-in-Law</option>
              </select>
            </div>
            <div class="col-md-12 form-group mt-3"> 
                <table class="table table-bordered"> 
                    <thead> 
                        <tr>
                          <th width="30%">Name</th>
                          <th width="20%">Date of Birth</th>
                          <th width="10%">Age</th>
                          <th width="15%">Gender</th>
                          <th width="25%">Educational Attainment</th>
                        </tr>
                    </thead>  
                    <tbody> 
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="first_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="first_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="first_child[]" >
                            </td>
                            <td>
                               <select name="first_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="first_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="second_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="second_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="second_child[]" >
                            </td>
                            <td>
                               <select name="second_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="second_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="third_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="third_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="third_child[]" >
                            </td>
                            <td>
                               <select name="third_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="third_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="fourth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="fourth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="fourth_child[]" >
                            </td>
                            <td>
                               <select name="fourth_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="fourth_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="fifth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="fifth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="fifth_child[]" >
                            </td>
                            <td>
                               <select name="fifth_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="fifth_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="sixth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="sixth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="sixth_child[]" >
                            </td>
                            <td>
                               <select name="sixth_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="sixth_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="seventh_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="seventh_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="seventh_child[]" >
                            </td>
                            <td>
                               <select name="seventh_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="seventh_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="eight_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="eight_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="eight_child[]" >
                            </td>
                            <td>
                               <select name="eight_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="eight_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="nineth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="nineth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="nineth_child[]" >
                            </td>
                            <td>
                               <select name="nineth_child[]" class="form-select" >
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="nineth_child[]" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="tenth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="tenth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="tenth_child[]">
                            </td>
                            <td>
                               <select name="tenth_child[]" class="form-select">
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="tenth_child[]">
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="eleventh_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="eleventh_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="eleventh_child[]">
                            </td>
                            <td>
                               <select name="eleventh_child[]" class="form-select">
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="eleventh_child[]">
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="text" class="form-control"  placeholder="Full name" name="twelveth_child[]" >
                            </td>
                            <td>
                              <input type="date" class="form-control"  placeholder="Date of Birth" name="twelveth_child[]" >
                            </td>
                            <td>
                              <input type="number" class="form-control"  placeholder="Age" name="twelveth_child[]">
                            </td>
                            <td>
                               <select name="twelveth_child[]" class="form-select">
                                  <option selected disabled>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </td>
                            <td>
                              <input type="text" class="form-control"  placeholder="Educational Attainment" name="twelveth_child[]">
                            </td>
                        </tr>

                    </tbody>  
                </table>
            </div>    
            <div class="col-md-12 form-group mt-3">
              <textarea name="skills" id="" cols="30" rows="1" class="form-control" placeholder="Skills" required></textarea>
            </div>
            <p class="mt-3">Already have an account? <a href="login2.php">Click here!</a></p>
            <!-- <p class="mt-3">Already have an account? <a href="" data-bs-toggle="modal" data-bs-target="#memberlogin">Click here!</a></p> -->
          </div>
          <div class="text-center"><button class="btn btn-primary" type="submit" name="create_household" id="register">Register</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


<?php include 'footer.php'; ?>







<script src="sweetalert2.min.js"></script>

<?php if(isset($_SESSION['message'])) { ?>

    <script>
      swal ({
        title: "<?php echo $_SESSION['message']; ?>",
        icon:  "<?php echo $_SESSION['status']; ?>",
        button: "Okay",
      }).then(function() {
          window.location = "Users/about_me.php?household_Id=<?php echo $_SESSION['household_Id']; ?>";
      });
      
    </script>

<?php unset($_SESSION['message']); unset($_SESSION['status']); } ?>










<script>
    $('.applicationtype').change(function(){
    var applicationtype = $(this).val();
    if(applicationtype =="Solo Parent") {

            $('#cause').removeClass("hidden");
            $('#cause').addClass("show");

            $('#cause_label').removeClass("hidden");
            $('#cause_label').addClass("show");
            
            document.getElementById("cause").required = true;

            $('#typeofdisabilities').removeClass("show");
            $('#typeofdisabilities').addClass("hidden");
            
            document.getElementById("pwd").checked = false;
            document.getElementById("senior").checked = false;



    }else if(applicationtype =="PWD"){
          
            $('#cause').removeClass("show");
            $('#cause').addClass("hidden"); 


            $('#cause_label').removeClass("show");
            $('#cause_label').addClass("hidden");


            $('#typeofdisabilities').removeClass("hidden");
            $('#typeofdisabilities').addClass("show");
            $("#typeofdisabilities").attr('required', '');

            document.getElementById("solo").checked = false;
            document.getElementById("senior").checked = false;
            
    } else {

            $('#cause').removeClass("show");
            $('#cause').addClass("hidden"); 

            $('#cause_label').removeClass("show");
            $('#cause_label').addClass("hidden");

            $('#typeofdisabilities').removeClass("show");
            $('#typeofdisabilities').addClass("hidden");

            document.getElementById("solo").checked = false;
            document.getElementById("pwd").checked = false;
            
    }
            //console.log(responseID);
            });
</script>


<script>
    $('.workstatus').change(function(){
    var workstatus = $(this).val();
    if(workstatus =="Employed" || workstatus =="Self-employed") {

            $('#workname').removeClass("hidden");
            $('#workname').addClass("show"); 

            $('#typeofwork').removeClass("hidden");
            $('#typeofwork').addClass("show");

            $('#salary').removeClass("hidden");
            $('#salary').addClass("show");

            $('#source').removeClass("hidden");
            $('#source').addClass("show");

            document.getElementById('workname').value = "";
            $("#workname").prop('readonly', false);

            document.getElementById('salary').value = "";
            $("#salary").prop('readonly', false);

            document.getElementById('source').value = "";
            $("#source").prop('readonly', false);

            $("#typeofwork").prop('readonly', false);
            $('#typeofwork').attr("style", "pointer-events: cursor;");

    } else {

            $('#workname').removeClass("hidden");
            $('#workname').addClass("show");

            document.getElementById('workname').value = "N/A";
            $("#workname").prop('readonly', true);

            $('#typeofwork').removeClass("hidden");
            $('#typeofwork').addClass("show");
            $('#typeofwork').attr("style", "pointer-events: none; background-color: lightgrey");

            $('#salary').removeClass("hidden");
            $('#salary').addClass("show");

            document.getElementById('salary').value = "N/A";
            $("#salary").prop('readonly', true);

            $('#source').removeClass("hidden");
            $('#source').addClass("show");
            document.getElementById('source').value = "N/A";
            $("#source").prop('readonly', true);

            
    }
            //console.log(responseID);
            });
</script>

 
<script>
   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    var text=document.createElement('p');
    text.innerHTML='Image preview';
    text.style['position']="relative";
    text.style['margin-left']="215px";
    text.style['margin-top']="10px";
    text.style['font-weight']="bold";
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
    imagediv.appendChild(text);
  }

</script>

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