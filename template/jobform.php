<?php include "includes/innerheader.php";?>                            <div id="inner_container" class="col-lg-12">                              <div class="inner_contant col-lg-12">                                <h1 id="property">Quick Recruitment & Training Services</h1>                                <div class="row"> <?php                                if(isset($_POST['submit'])) {                                                                             extract($_REQUEST);                                            foreach($_FILES['uploaded_files']['name'] as $key=>$value){if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) && $_FILES['uploaded_files']['error'][$key] == 0){$filename = $_FILES['uploaded_files']['name'][$key];if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'. $filename)){}else{die ('There was a problem uploading the pictures.');}}else{die ('There is a problem with the uploading system');}}                                          $q="INSERT INTO `jobform` (`app_status`, `cat`, `job_type`, `education`, `profession`, `department`, `gender`, `experience`, `job_level`, `salary_range`,`interested_in_overseas`,`country`, `city`, `area`, `applicant_name`,`email`,`mob`,`comments`,`file`)VALUES('$app_status','$cat' , '$type_job','$education','$profession','$department','$gender', '$experience', '$job_level', '$salary_range', '$interested_in_overseas','$country', '$city','$area','$applicant_name', '$email', '$mob','$comments','$filename')";$qr=mysql_query($q) or die (mysql_error());if($qr) {        echo 'Your Application has been submitted Sucessfully';        }   }  ?>                                    <form name="myform" method="POST" action="">                                <div class="form-group col-lg-6">                                    <label for="input2">Applicant Status </label>                                    <select id="property_form_field" type="text" name="app_status" class="form-control">                                      <option>Please select...</option>                                      <option value="Individual">Individual </option>                                      <option value="company">company</option>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Category</label>                                    <select id="property_form_field" type="text" name="cat" class="form-control">                                      <option>Please select...</option>                                      <option value="job seeker">Job seeker/Recruiter (employer) </option>                                      <option value="Trainers">Trainers/Training for employers</option>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Type of Job/Training </label>                                      <select id="property_form_field" type="text" name="type_job" class="form-control">                                        <option>Accounting</option>                                        <option>auditing</option>                                        <option>administrative</option>                                      </select>                                   </div>                            <div class="form-group col-lg-6">                                    <label for="input2">Education</label>                                      <select id="property_form_field" type="text" name="education" class="form-control">                                        <option>MBA</option>                                        <option>CA</option>                                        <option>FA</option>                                        <option>BA</option>                                        <option>BSC</option>                                        <option>FCS</option>                                        <option>B-COM</option>                                        <option>etc</option>                                      </select>                                  </div>                                      <div id="dubble_fields" class="form-group col-lg-6">                                    <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Profession</label>                                      <select id="property_form_field" type="text" name="profession" class="form-control">                                        <option>MBA</option>                                        <option>CA</option>                                        <option>FA</option>                                        <option>BA</option>                                        <option>BSC</option>                                        <option>FCS</option>                                        <option>B-COM</option>                                        <option>etc</option>                                      </select>                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Department</label>                                      <select id="property_form_field" type="text" name="department" class="form-control">                                        <option>Sale/operation</option>                                        <option>menufecturing</option>                                      </select>                                    </div>                                  </div>                                  <div id="dubble_fields" class="form-group col-lg-6">                                    <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Gender</label>                                      <select id="property_form_field" type="text" name="gender" class="form-control">                                        <option>Male</option>                                        <option>Female</option>                                      </select>                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Experience no of years</label>                                      <select id="property_form_field" type="text" name="experience" class="form-control">                                        <option>1</option>                                        <option>2</option>                                        <option>3</option>                                        <option>4</option>                                        <option>5</option>                                        <option>5</option>                                        <option>etc</option>                                      </select>                                    </div>                                  </div>                                  <div class="form-group col-lg-6">                                   <label for="input2">job level</label>                                      <select id="property_form_field" type="text" name="job_level" class="form-control">                                        <option>Junior</option>                                        <option>Senior</option>                                        <option>expert</option>                                        <option>other</option>                                      </select>                                  </div>                                  <div class="form-group col-lg-6">                                   <label for="input2">salary range</label>                                      <select id="property_form_field" type="text" name="salary_range" class="form-control">                                        <?php					$select_user_query="select * from price_range order by price_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['price_range']; ?></option>                                    <?php	}    				?>                                        <option>other</option>                                      </select>                                  </div>                                 <div class="form-group col-lg-6">                                   <label for="input2">Interested in overseas jobs</label>                                      <select id="property_form_field" type="text" name="interested_in_overseas" class="form-control">                                        <option>Yes</option>                                        <option>No</option> <option>etc</option>                                      </select>                                  </div>                                   <div class="form-group col-lg-6">                                    <label for="input2">Country</label>                                    <select id="property_form_field" type="text" name="country" class="form-control">                                      <option>Country</option>                                     <?php					$select_user_query="select * from country order by country_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['country']; ?></option>                                    <?php	}    				?>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">City</label>                                    <select id="property_form_field" type="text" name="city" class="form-control">                                      <option>City</option>                                                                           <?php					$select_user_query="select * from city order by city_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['city']; ?></option>                                    <?php	}    				?>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">City Area</label>                                    <select id="property_form_field" type="text" name="area" class="form-control">                                      <option>City Area</option>                                      <?php					$select_user_query="select * from city_area order by cityarea_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['city_area']; ?></option>                                    <?php	}    				?>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Applicant name </label>                                    <input id="inner_form_field" type="text" name="applicant_name" class="form-control"  placeholder="Applicant name">                                  </div>                                    <div class="form-group col-lg-6">                                    <label for="input2">E mail Address  </label>                                    <input id="inner_form_field" type="text" name="email" class="form-control"  placeholder="E mail Address ">                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Mobile #  </label>                                    <input id="inner_form_field" type="text" name="mob" class="form-control"  placeholder="Mobile # ">                                  </div>                                   <div class="form-group col-lg-6">                                      <label for="input3">UP load cv </label>                                     <input type="file" name="uploaded_files[]" id="inner_form_field2" multiple="multiple" />                                    </div>                                  <div class="form-group col-lg-12">                                                        <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Comment / detail"></textarea>                                                        <input type="hidden" name="save" value="contact">                                                        <button id="submit_btn5" type="submit" name="submit" class="btn btn-primary">Submit</button>                                                      </div>                                                                 </div>                              </div>                            </div>                          </div>                        </div>                     <?php include "includes/footer.php";?>