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
                        <p>30. PROBLEMS/NEEDS COMMONLY ENCOUNTERED: (Check all applicable)</p>
                    </div>



                    <div class="col-md-12">
                    <p>31. Economic</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lack of income/resources  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Loss of income/resources  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Skills/Capability Training  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Livelihood opportunities  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Not employed  &nbsp;&nbsp;&nbsp;</p> 
                       
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                       <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>32. Social/Emotional</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Feeling of neglect & rejection  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Feeling of helplessness & worthlessness  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Feeling of loneliness & isolation  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Feeling of Descrimanation  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Inadequate leisure/recreational activities &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;PWD  Friendly Environment  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                   <div class="col-md-12">
                    <p>33. Health</p>
                    <p>With Maintenance:</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Yes  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;No  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;If yes, please specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                   <div class="col-md-12">
                    <p>Concerns/Issues:</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Accessibility to Health Services  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;High cost medicines  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lack /No health insurance/s inadequate health services &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lack of hospitals/medical facilities  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lack of medical professionals &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Lack/No access to sanitation  &nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>



                  <div class="col-md-12">
                    <p>34. Housing</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Overcrowding in the family home  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;No permanent housing  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Longing for independent living/quiet atmosphere  &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Light materials (cogon, nipa, anahaw)  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;salvaged/makeshift materials  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;strong materials (galvanized iron, aluminum, tiles, concrete, brick, stone) &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;One room affair  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Informal settlers &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Cost rent &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                   <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>35. Toilet Facility</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Water sealed, used exclusively by household  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Close pit, used exclusively by household &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Open pit, used exclusively by household &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>36. Electricity </p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Yes  &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;No &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                   <div class="col-md-12">
                    <p>37. Main Source of Water</p>
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Own use, faucet, community water system &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Shared, faucet, communicty water system &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Own use, tubes/piped well &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Rainfall &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Shared, tubed/piped well &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Spring, river, stream,etc &nbsp;&nbsp;&nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Peddler &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>

                   <div class="col-md-12">
                    <p>38. Community Service</p>
                    <div class="d-flex">
                      <p>&nbsp;Desire to participate: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                      <p>&nbsp;Skills/resources to share: ___________________________________________  &nbsp;&nbsp;&nbsp;</p>  
                    </div>
                  </div>

                 <div class="col-md-12">
                    <div class="d-flex">
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp;Others, specify: ___________________________________________  &nbsp;&nbsp;&nbsp;</p> 
                    </div>
                  </div>


                  <div class="col-md-12">
                    <p>39. Identify Others Specific Needs: _________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
                    
                  </div>
              </div>



              <div class="row">
                      <div class="col-md-6">
                        <p><b>40. Declaration:</b></p>
                        <p>__________________________________________</p>
                        <p class="text-center" style="margin-top: -20px;">Printed Name and Signature or Thumbmark of Persons with Disability (PWD) / Respondent</p>
                        <p class="mt-3">Date: ________________________</p>
                      </div>
                      <div class="col-md-6">
                        <p><b>41. Certification:</b></p>
                        <p>__________________________________________</p>
                        <p class="text-center" style="margin-top: -20px;">Printed Name and Signature of Interviewer</p>
                        <p class="mt-3">Date: ________________________</p>
                      </div>
                    </div>



            </div>
            <button class="btn btn-primary" type="button" name="solo_update_household" id="printButton">Print</button>
            <a href="pwd_print2.php?household_Id=<?php echo $row_fetch['household_Id']; ?>">Go to previous page</a>
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
