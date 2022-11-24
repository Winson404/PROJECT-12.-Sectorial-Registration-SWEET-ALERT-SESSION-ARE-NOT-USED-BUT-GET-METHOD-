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
                 

                   <div class="col-md-12">
                    <p>21. IDINGENOUS PEOPLE GROUP : Please specify ______________________________</p>
                  </div>
                  

                  <div class="col-md-12">
                    <p>22. TYPE OF DISABILITY:</p>
                    <div class="d-flex">
                     <p>&nbsp;(1)______  Communication Disability (please specify____________________  &nbsp;&nbsp;&nbsp;</p> 
                     <p>&nbsp;(2)______ Intellectual Disability (please specify _______________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex">
                     <p>&nbsp;(3)______ Visual Disability (please specify _____________________&nbsp;&nbsp;&nbsp;</p> 
                     <p>&nbsp;(4)______Learning Disability (please specifiy_____________________ &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex">
                     <p>&nbsp;(5)______Orthopedic Disability (please specify_________________ &nbsp;&nbsp;&nbsp;</p> 
                     <p>&nbsp;(6)______Mental/ Psychosocial Disability (Please specify______________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                     <p>&nbsp;(7)______Disability due to Chronic Illness (Please specifify____________________ &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>23. CAUSES OF DISABILITY : </p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Congenital/inborn  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Illness  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Injury  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>24. PROGRAM AND SERVICES RECEIVED? (Check all applicable) </p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Assistive Devices  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Scholarship  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Day Care Service/ECCD  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Pantawid Pamilya Pilipino Program  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Social Pension  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Supplemental Feeding  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Livelihood Assistance  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp; Philhealth  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Subsidized Rice  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Medical Assistance  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Housing  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>Skills/Livelihood Training &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Microcredit  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others (Please specify)____________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>



                   <div class="col-md-12">
                    <p><b>25. FAMILY COMPOSITION</b></p>
                  </div>

                  <div class="col-md-12"> 
                      <p class="text-center"><b>FAMILY COMPOSITION:</b></p>

                      <table class="table table-bordered">
                          <thead>
                            <th>NAME</th>
                            <th>RELATIONSHIP</th>
                            <th>AGE</th>
                            <th>CIVIL STATUS</th>
                            <th>OCCUPATION</th>
                            <th>INCOME</th>
                          </thead>
                          <tbody>
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                            
                            <tr>
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
                            </tr>
                            <tr>
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
                            </tr>
                          </tbody>
                      </table>
                    </div>



                  <div class="col-md-12">
                    <p>26. ASSETS & PROPERTIES:  (Check all applicable)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;House  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lot  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;House & Lot  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Fishponds/Resorts  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Commercial Building  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Farmland   &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>27. LIVING/RESIDING WITH: (Check all applicable)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Alone  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Spouse  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Parents  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Children  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Friends  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Common Law Spouse  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Grand Parents  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;In Laws  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Relatives  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>



                  <div class="col-md-12">
                    <p>28. AREAS OF SPECIALIZATION/SKILLS: (Check all applicable)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Farming  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Teaching  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Fishing  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Dental  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Counseling  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Evangelization  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Cooking  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Vocational (Please specify)_________________________ &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Arts  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Engineering  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Organizing &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>29.INVOLVEMENT IN COMMUNITY ACTIVITIES: (Check all applicable)</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Medical Service  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Community Service  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Community Beautification  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Community/Organizational Leader  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Neighborhood Support Services  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Religious &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Counseling/referral  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Friendly visit  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Member of association  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Affiliation &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                
                 

</div>


            </div>
            <button class="btn btn-primary" type="button" name="solo_update_household" id="printButton">Print Page 2 of 3</button>
            <a href="pwd_print3.php?household_Id=<?php echo $row_fetch['household_Id']; ?>">Go to next page</a>
            <a href="pwd_print.php?household_Id=<?php echo $row_fetch['household_Id']; ?>">Go to previous page</a>
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
