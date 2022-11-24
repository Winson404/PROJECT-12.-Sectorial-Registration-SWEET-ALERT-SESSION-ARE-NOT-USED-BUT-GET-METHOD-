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
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Information</h3>
              </div>
           

              <div id="printElement">
                <div class="row">
                  <div class="col-md-3">
                    <img src="../images/sab.png" alt="" width="60" style="margin-top: 12px;">
                    <img src="../images/download.png" alt="" width="90" style="margin-top: 12px;">

                  </div>
                  <div class="col-md-9 mb-3">
                    <p style="margin: 0px;">Republic of the Philippines</p>
                    <p style="margin: 0px;">Province of Occidental Mindoro</p>
                    <h6 style="margin: 0px;">LOCAL GOVERNMENT UNIT OF SABLAYAN</h6>
                    <h6 style="margin: 0px;">MUNICIPAL SOCIAL WELFARE &amp; DEVELOPMENT OFFICE</h6>
                  </div>

                  <div class="col-md-12">
                    <h4 class="text-center">SOLO PARENT</h4>
                  </div>
                </div>


                <div class="row">
                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;">
                      <p><b>Complete address:</b> <?php echo $row_fetch['address']; ?></p>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;">
                      <p><b>Buong pangalan:</b> <?php echo ' '.$row_fetch['firstname'].' '.$row_fetch['middlename'].' '.$row_fetch['lastname'].' '; ?></p>
                    </div>

                    <div class="col-md-4"   style="border: 1px solid grey;padding: 5px;">
                      <p><b>Birthday:</b> <?php echo $row_fetch['dob']; ?></p>
                    </div>
                    <div class="col-md-4"   style="border: 1px solid grey;padding: 5px;">
                      <p><b>Kasarian:</b> <?php echo $row_fetch['gender']; ?></p>
                    </div>
                    <div class="col-md-4"   style="border: 1px solid grey;padding: 5px;">
                      <p><b>Place of Birth:</b> <?php echo $row_fetch['place_of_birth']; ?></p>
                    </div>

                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Numero ng Telepono:</b> <?php echo $row_fetch['contact_number']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Katayuang Sibil:</b> <?php echo $row_fetch['status']; ?></p>
                    </div>

                     <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Dahilan ng Pagiging Solo Parent:</b> <?php echo $row_fetch['causeofbeingsoloparent']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Antas ng Edukasyon:</b> <?php echo $row_fetch['educational_attainment']; ?></p>
                    </div>

                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Estado ng Trabaho:</b> <?php echo $row_fetch['employment_status']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Okupasyon/Trabaho:</b> <?php echo $row_fetch['work_name']; ?></p>
                    </div>

                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Uri ng Pinagtatrabahuhan:</b> <?php echo $row_fetch['work_name']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Uri ng Trabaho:</b> <?php echo $row_fetch['type_of_work']; ?></p>
                    </div>

                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Buwanang Kita:</b> <?php echo $row_fetch['salary']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Pinagkukunan ng Pangkabuhayan:</b> <?php echo $row_fetch['source_of_income']; ?></p>
                    </div>

                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Relihiyon:</b> <?php echo $row_fetch['religion']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Kabilang sa Tribung Katutubo?</b> <?php echo $row_fetch['part_of_tribe']; ?></p>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;">
                       <p><b>Programa at Serbisyong natanggap/benepisyaryo:</b> <?php echo $row_fetch['program_services']; ?></p>
                    </div>


                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Bilang ng Pamilya sa tahanan:</b> <?php echo $row_fetch['num_fam_members']; ?></p>
                    </div>
                    <div class="col-md-6" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Mga Pag-aari (Assets and Properties):</b> <?php echo $row_fetch['assets']; ?></p>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Talaan ng mga Anak na wala pang 18 taong gulang:</b></p>


                      <table class="table table-bordered">
                          <thead>
                            <th>Pangalan</th>
                            <th>Petsa ng Kapanganakan</th>
                            <th>Edad</th>
                            <th>Kasarian</th>
                            <th>Edukasyon</th>
                          </thead>
                          <tbody>
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                          </tbody>
                      </table>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Kakayahan (Skills):</b> <?php echo $row_fetch['skills']; ?></p>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Problemang kalimitang kinakaharap:</b></p>
                    </div>

                    <div class="col-md-12" style="border: 1px solid grey;padding: 5px;"> 
                      <p><b>Agaran (specific) na Pangangailangan.</b></p>
                    </div>


                    <div class="col-md-12 mt-5"> 
                      <p><b>Reference Number:</b> _______________________________</p>
                    </div>



                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="col-sm-12 mt-4 mb-5">
                      <p style="text-decoration: overline;"><b>Pangalan at Lagda</b></p>
                    </div>
                    <div class="col-sm-12">
                      <p style="text-decoration: underline;">Pinatutunayan:</p>
                    </div>

                    <div class="col-md-12">
                      <p>___________________________________</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="../images/picture.png" alt="" width="200" style="margin-left: 50px;margin-top: 20px;">
                  </div>
                </div>

                
              </div>

              <button class="btn btn-primary" type="button" name="solo_update_household" id="printButton">Print</button></div>
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
