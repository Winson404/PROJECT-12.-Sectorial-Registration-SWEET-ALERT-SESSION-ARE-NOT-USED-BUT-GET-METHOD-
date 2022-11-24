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
                    <p>3. NAME: ____________________________________________________________________________________</p>
                    <p style="margin-left: 50px;margin-top: -20px;">(First name)           <span style="margin-left: 70px;">(Middle Name)</span>            <span style="margin-left: 70px;">(Last Name)</span> <span style="margin-left: 70px;">(Ext. Name)</span></p>
                  </div>

                   <div class="col-md-12">
                    <p>4. ADDRESS: ______________________________________________________________________________________</p>
                    <p style="margin-left: 25px;margin-top: -20px;">(House No. &  Street Name)  <span style="margin-left: 20px;">((Barangay/District)</span>            <span style="margin-left: 20px;">(Municipality/City)</span>     <span style="margin-left: 20px;">(Province)</span> <span style="margin-left: 20px;">(Region)</span></p>
                  </div>

                  <di class="col-md-12">
                    <p>5. Contact Number: ____________________________________</p>
                  </di>

                  <div class="col-md-7">
                    <p>6. DATE OF BIRTH: ________________________________</p>
                    <p style="margin-left: 150px;margin-top: -20px;">(Month)<span style="margin-left: 30px;">(Day)</span>            <span style="margin-left: 30px;">(Year)</span></p>
                  </div>

                  <div class="col-md-6">
                    <div class="d-flex">
                      <p>7. SEX: &nbsp;&nbsp;&nbsp;</p>
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp; Male &nbsp;</p> 
                      <p style="height: 20px; width: 20px;border: 1px solid black;"></p><p>&nbsp; Female &nbsp;</p> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex">
                      <p>8. Age: _________________________</p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <p>9. Place of Birth: ______________________________________________________________</p>
                  </div>

                  <div class="col-md-12">
                    <p>10. Marital Status: &nbsp;&nbsp;</p>
                    <div class="d-flex">
                      <p>Single &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Married &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Widow/Widower &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Separated &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Common-Law-Spouse &nbsp;</p> <p style="height: 20px; width: 20px;border: 1px solid black;"></p>
                    </div>
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
