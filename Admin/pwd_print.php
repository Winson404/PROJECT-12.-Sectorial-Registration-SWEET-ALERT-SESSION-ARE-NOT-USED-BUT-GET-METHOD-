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
                    
                    <h5 class="text-center" style="margin: 0px;">Republic of the Philippines</h5>
                    <p class="text-center" style="margin: 0px;">Municipality of Sablayan, Occidental Mindoro</p>
                  </div>

                  <div class="col-md-12 text-center">
                    <h5 class="text-center" style="text-decoration: underline;">PERSONS WITH DISABILITY (PWD GENERAL INTAKE SHEET</h5>
                    <small class="text-center">(Please answer appropriately and legibly)</small>
                  </div>

                  <div class="col-md-12 mt-5">
                    <p>Identifying information</p>
                  </div>

                  <div class="col-md-6">
                    <p>1. PWD Number: _________________________</p>
                  </div>
                  <div class="col-md-6">
                    <p>2. Date Issued: _____________________________</p>
                    
                  </div>

                   <div class="col-md-12">
                    <p>3. NAME: <?php echo $row_fetch['firstname']; ?> <?php echo $row_fetch['middlename']; ?> <?php echo $row_fetch['lastname']; ?></p>
                  </div>

                   <div class="col-md-12">
                    <p>4. ADDRESS: <?php echo $row_fetch['address']; ?></p>
                   
                  </div>

                  <di class="col-md-12">
                    <p>5. Contact Number:<?php echo $row_fetch['contact_number']; ?></p>
                  </di>

                  <div class="col-md-7">
                    <p>6. DATE OF BIRTH: <?php echo $row_fetch['dob']; ?></p>
                  </div>

                  <div class="col-md-6">
                    <div class="d-flex">
                      <p>7. SEX: &nbsp;&nbsp;&nbsp;</p><?php echo $row_fetch['gender']; ?> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex">
                      <p>8. Age: <?php echo $row_fetch['age']; ?></p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>9. Place of Birth: <?php echo $row_fetch['place_of_birth']; ?></p>
                  </div>

                  <div class="col-md-12">
                    <p>10. Marital Status: &nbsp;&nbsp; <?php echo $row_fetch['status']; ?></p>
                   
                  </div>


                  <div class="col-md-12">
                    <p>11. IDENTIFICATION REFERENCE (Check all applicable):</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;SSS &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;GSIS &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;PWD &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;PhilHealth Member &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;PhilHealth Dependent &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Pag-IBIG &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>12. EDUCATIONAL ATTAINMENT:</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Elementary Level &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Elementary Graduate &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;High School Level &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;High School Graduate &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Vocational &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;College Level &nbsp;&nbsp;&nbsp;</p>
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;College Graduate &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Post Graduate &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>
                   <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;SPED &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;ALS &nbsp;&nbsp;&nbsp;</p>
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Distance Education &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;CBR/TAWAG &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>
                     <div class="col-md-12 mt-5 ">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;No grade completed &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Day Care /Child Development Center &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>

                 <div class="col-md-12">
                    <p>13.EMPLOYMENT STATUS</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Employed &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Unemployed &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>14.TYPE OF EMPLOYER</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Private &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Government &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>15.TYPE OF EMPLOYMENT</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Permanent &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Contractual &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Casual &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Self Employed &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Seasonal &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Emergency &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Job Order &nbsp;&nbsp;&nbsp;</p>                   
                    </div>
                  </div>

                <div class="col-md-12">
                      <p>16. OCCUPATION: Please Specify ____________________________________&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>


                <div class="col-md-12">
                    <p>17. MONTHLY INCOME: (In Philippine Peso)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;10,000 & above &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;9,000-9,999 &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;8,000-8,999 &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;7,000-7,999 &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;6,000-6,999 &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;5,000-5,999 &nbsp;&nbsp;&nbsp;</p>
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;4,000-4,999 &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;3,000-3,999 &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>
                   <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;2,000-2,999   &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;1,000-1,999 &nbsp;&nbsp;&nbsp;</p>
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;999 & below &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;None &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>


                  <div class="col-md-12">
                    <p>18. SOURCE OF INCOME : (Check all applicable)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Own earnings, salaries/wages &nbsp;&nbsp;&nbsp;</p> 
                      
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Pension: Source of Pension specify _________ amount ___________ &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Spouse Salary &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Dependent on children/relatives/parents &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>

                   <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Business &nbsp;&nbsp;&nbsp;</p> 
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others (Please specify________________ &nbsp;&nbsp;&nbsp;</p>
                      </div>
                  </div>


                  <div class="col-md-12">
                    <p>19. RELIGION:</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Roman Catholic  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Aglipay  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Iglesia Ni Cristo  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Protestant   &nbsp;&nbsp;&nbsp;</p> 
                      
                    </div>
                  </div>

                   <div class="col-md-12">
                      <div class="d-flex">
                        <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Islam  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others (Please specify)________________  &nbsp;&nbsp;&nbsp;</p> 
                      </div>
                  </div>



                  <div class="col-md-12">
                    <p>20. SOLO PARENT</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Yes  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;No  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                   

            </div>
          </div>


            <button class="btn btn-primary" type="button" name="solo_update_household" id="printButton">Print Page 1 of 3</button>
            <a href="pwd_print2.php?household_Id=<?php echo $row_fetch['household_Id']; ?>">Go to next page</a>
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
