<?php include "includes/innerheader.php";?>                            <div id="inner_container" class="col-lg-12">                              <div class="inner_contant col-lg-12">                                <h1 id="property"> Marketing & Advertisement</h1>                                <div class="row">                                     <?php                                if(isset($_POST['submit'])) {                                                                             extract($_REQUEST);                                                 foreach($_FILES['uploaded_files']['name'] as $key=>$value){if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) && $_FILES['uploaded_files']['error'][$key] == 0){$filename = $_FILES['uploaded_files']['name'][$key];if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'. $filename)){}else{die ('There was a problem uploading the pictures.');}}else{die ('There is a problem with the uploading system');}}                                        $q="INSERT INTO `marketingform` (`app_status`, `service_cat`, `service_type`, `location_of`, `city`, `area`, `country`, `period_of`, `price`, `ptcl`, `mob`, `present_address`, `applicant_name`, `email_add`, `comments`,`file`)VALUES('$app_status','$service_cat','$service_type','$location_of','$city','$area', '$country', '$period_of', '$price', '$ptcl', '$mob', '$present_address', '$applicant_name', '$email', '$comments','$filename')";$qr=mysql_query($q) or die (mysql_error());if($qr) {        echo 'Your Application has been submitted Sucessfully';        }   }  ?>                                    <form name="myform" method="POST" action="">                                <div class="form-group col-lg-6">                                    <label for="input2">Applicant Status </label>                                    <select id="property_form_field" type="text" name="app_status" class="form-control">                                      <option>Please select...</option>                                      <option value="Individual">Individual </option>                                      <option value="company">company</option>                                    </select>                                  </div><div class="form-group col-lg-6">                                    <label for="input2">Service Category  </label>                                    <select id="property_form_field" type="text" name="service_cat" class="form-control">                                      <option>Please select...</option>                                      <option value="tfa_7373409404451">LED </option>                                      <option value="tfa_Son">Generators</option>                                      <option value="tfa_7373409404451">UPS </option>                                      <option value="tfa_Son">BIO-Fuel</option>                                      <option value="tfa_Son">GAS</option>                                    </select>                                  </div>   <div class="form-group col-lg-6">                                    <label for="input2">Service Type  </label>                                    <select id="property_form_field" type="text" name="service_type" class="form-control">                                      <option>Please select...</option>                                      <option value="sale">sale  </option>                                      <option value="purchase">purchase</option>                                      <option value="rent">rent</option>                                    </select>                                  </div>                                   <div class="form-group col-lg-6">     <label for="input2">Location of Services Required    </label>                                   <select id="property_form_field" type="text" name="location_of" class="form-control">                                      <option>Please select...</option><?php					$select_user_query="select * from location_of_service order by location_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['location_service']; ?></option>                                    <?php	}    				?>                                    </select> </div>  <div id="dubble_fields" class="form-group col-lg-6">         <div class="clr"></div><div class="form-group col-lg-6">                                    <label for="input2">Country</label>                                    <select id="property_form_field" type="text" name="country" class="form-control">                                      <option>Country</option><?php					$select_user_query="select * from country order by country_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['country']; ?></option>                                    <?php	}    				?>                                    </select>                                  </div>                                       <div class="form-group col-lg-6">                                     <label for="input2">City</label>                                     <select id="property_form_field" type="text" name="city" class="form-control">                                      <option>City</option>                                       <?php					$select_user_query="select * from city order by city_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['city']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div>                                  </div>                                                                                                                 <div class="form-group col-lg-6">                                     <label for="input2">City Area</label>                                      <select id="property_form_field" type="text" name="area" class="form-control">                                      <option>City Area</option>                                       <?php					$select_user_query="select * from city_area order by cityarea_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['city_area']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div> <div id="dubble_fields" class="form-group col-lg-6">    <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Period Of Service</label>                                     <select id="property_form_field" type="text" name="period_of" class="form-control">                                      <option>Please select...</option>                                  <?php					$select_user_query="select * from period_service order by period_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['period']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Price/Budget</label>                                      <select id="property_form_field" type="text" name="price" class="form-control">                                      <option>Please select...</option>                                                                    <?php					$select_user_query="select * from price_range order by price_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['price_range']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div>                                  </div>     <div id="dubble_fields" class="form-group col-lg-6">                                                                       <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">PTCL No.</label>                                     <input id="inner_form_field" type="text" name="ptcl" class="form-control">                                                                         </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Mobile No.</label>                                     <input id="inner_form_field" type="text" name="mob" class="form-control">                                                                         </div>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Applicant Present Address</label>                                    <input id="inner_form_field" type="text" name="present_address" class="form-control"  placeholder="Applicant Present Address">                                  </div>                                  <div id="dubble_fields" class="form-group col-lg-6">                                                                       <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Applicant Name</label>                                     <input id="inner_form_field" type="text" name="applicant_name" class="form-control">                                                                         </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Email Address</label>                                     <input id="inner_form_field" type="text" name="email" class="form-control">                                                                         </div>                                  </div>                                  <div class="form-group col-lg-12">                                    <label for="input2">Comments for Order or Partnership</label>                                    <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Please type your further Details"></textarea>                                     <div class="form-group col-lg-6">                                      <label id="marrige" for="input3">Add pics</label>                                     <input type="file" name="uploaded_files[]" id="inner_form_field2" multiple="multiple" />                                                                     </div>                                    <button id="submit_btn5" type="submit" name="submit" class="btn btn-primary">Submit</button>                                  </div>                                    </form></div>    </div>                            </div>                          </div>                        </div>                               <?php include "includes/footer.php";?>