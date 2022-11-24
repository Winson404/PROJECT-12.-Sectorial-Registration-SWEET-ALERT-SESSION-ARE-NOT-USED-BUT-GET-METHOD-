<title>Profile</title>
<?php include 'navbar.php'; ?>

<?php  
    if(isset($_GET['household_Id']))
      $household_Id = $_GET['household_Id'];

    $fetch = mysqli_query($conn, "SELECT * FROM household_head WHERE household_Id='$household_Id'");
    $row_fetch = mysqli_fetch_array($fetch);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-5">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Information</h3>
              </div>
           

              <div id="printElement">
                <div class="row p-3">
                 
                  <div class="col-md-12 mb-3">
                    
                    <h5 class="text-center" style="margin: 0px;">OFFICE OF THE SENIOR CITIZENS AFFAIRS</h5>
                    <p class="text-center" style="margin: 0px;">Municipality of Sablayan, Occidental Mindoro</p>
                  </div>

                  <div class="col-md-12">
                    <h4 class="text-center" style="text-decoration: underline;">REGISTRATION FORM</h4>
                  </div>

                   <div class="col-md-12 mt-5">
                    <p>NAME: ______________________________________________________________________________________</p>
                    <p style="margin-left: 50px;margin-top: -20px;">(Surname)           <span style="margin-left: 150px;">(First Name)</span>            <span style="margin-left: 150px;">(Middle Name)</span></p>
                  </div>

                  <div class="col-md-12">
                    <p>BIRTHDATE: ________________________ SEX: ___________ STATUS: _________________ AGE: _______</p>
                    <p>EDUCATIONAL ATTAINMENT: ______________________________________________________________</p>
                    <p>OCCUPATION: __________________________________________________________________________</p>
                    <p>PRESENT HEALTH CONDITION: ____________________________________________________________</p>
                    <div class="d-flex">
                      <p>GSIS PENSIONER &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SSS PENSIONER &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PVAO &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTHERS: ________________________</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p>LIVING ARRANGEMENT:&nbsp;</p>
                      <p>LIVING ALONE &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LIVING WITH RELATIVES&nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO. OF YEARS:_________</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="d-flex">
                      <p>SECTOR:&nbsp;&nbsp;&nbsp;&nbsp;</p>
                      <p>IP’S &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BEDRIDDEN&nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PWD&nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTHERS:_________________________________</p>
                    </div>
                </div>


                <div class="col-md-12">
                    <p>ADDRESS: ______________________________________________________________________________________</p>
                    <p style="margin-left: 50px;margin-top: -20px;">(ZONE/PUROK)           <span style="margin-left: 60px;">(BARANGAY)</span>            <span style="margin-left: 60px;">(MUNICIPALITY)</span>     <span style="margin-left: 60px;">(PROVINCE)</span></p>
                  </div>
                  

                  <div class="col-md-12 mt-4"> 
                      <p class="text-center"><b>FAMLIY COMPOSITION</b></p>
                      <p class="text-center"   style="margin-top: -20px;">Beneficiary</p>


                      <table class="table table-bordered">
                          <thead>
                            <th>NAME</th>
                            <th>RELATIONSHIP</th>
                            <th>AGE</th>
                            <th>CIVIL STATUS</th>
                            <th>ADDRESS</th>
                            <th>CONTACT NO.</th>
                            <th>OCCUPATION</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                      </table>
                    </div>


                    <div class="col-md-12">
                        <p>Name of Association: ____________________________________________________________________</p>
                        <p>Address of Association: __________________________________________________________________</p>
                        <p>Name of Membership: _________________________________Position:__________________________</p>
                        <p>Officer, Date Elected: ____________________________________________________________________</p>
                    </div>

                    <div class="col-md-12 mt-5 mb-2">
                      <p>I CERTIFY that the above information are true and correct to the best of my knowledge and belief.</p>
                    </div>




                
              </div>

              <div class="row">
                      <div class="col-md-6">
                        <p class="text-center"><b>LOLITA G. MELENDRES</b></p>
                        <p class="text-center" style="margin-top: -20px;">OSCA Head</p>
                      </div>
                      <div class="col-md-6">
                        <p>__________________________________________</p>
                        <p class="text-center" style="margin-top: -20px;">Signature / Thumb mark of member</p>
                      </div>
                    </div>


                    <div class="col-md-12 mt-3">
                      <p>INTERVIEWED BY: ___________________________________ DATE REGISTERED:______________________</p>
                    </div>

            </div>
            <button class="btn btn-primary" type="button" name="solo_update_household" id="printButton">Print</button>
            </div>
            <!-- /.card -->
         </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 <script src="print.js"> </script>

  <?php include 'footer.php'; ?>
 
</body>
</html>


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
