<?php include "includes/innerheader.php";?>                           
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>



 <div id="inner_container" class="col-lg-12">                              <div class="inner_contant col-lg-12">                           
 <h1 id="property">Energies</h1>                                <div class="row"> <?php                     
 if(isset($_POST['submit'])) {                                                                           
 extract($_REQUEST);                       
$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
					VALUES ('".date('y\-m\-d')."','$applicant_name','$mob','$email','$mob','Energies/Service')";
					@mysql_query($q); 
 $q="INSERT INTO `enegies` (`app_status`, `service_cat`, `service_type`, `location_of`, `city`, `area`, `country`, `budget`, `price`, `ptcl`,`mob`,`present_address`,
 `applicant_name`, `email_add`, `comments`,`dateandtime`)VALUES('$app_status','$service_cat','$service_type','$location_of','$city','$area', '$country', '$budget', '$price',
 '$ptcl', '$mob','$present_address','$applicant_name', '$email', '$comments','".date('y\-m\-d')."')";$qr=mysql_query($q) or die (mysql_error());
 
if($qr) {

	ob_start(); 
    ob_end_flush();     
	    ?><div id="inner_container" class="col-lg-12">

<div class="inner_contant col-lg-12">

<h1  style="margin-left:210px;">Thank you so much for registering to our service.</h1>
<h3 style="margin-right:31px;">We will come back to you shortly via email.</h3>
<a href="index.php"><button  style="margin-right: 471px; margin-top: 81px;" id="submit_btn3" type="submit" name="submit" class="btn btn-primary">Go Back</button>    </a>     
			

                            </div>

                          </div>           <?php
	die('');						
	
}   }  ?>
 <form name="myform" method="POST" action="">                                <div class="form-group col-lg-6">                                    <label for="input2">Applicant Status </label>                                    <select id="property_form_field" type="text" name="app_status" class="form-control">                                      <option>Please select...</option>                                      <option value="Individual">Individual </option>                                      <option value="company">company</option>                                    </select>                                  </div>                                  <div class="form-group col-lg-6">                                    <label for="input2">Service Category  </label>                                    <select id="property_form_field" type="text" name="service_cat" class="form-control">                                      <option>Please select...</option>                                      <option value="LED">LED </option>                                      <option value="Generators">Generators</option>                                      <option value="UPS">UPS </option>                                      <option value="BIO-Fue">BIO-Fuel</option>                                      <option value="GAS">GAS</option>                                    </select>                                  </div>                                                          <div class="form-group col-lg-6">                                    <label for="input2">Service Type  </label>                                    <select id="property_form_field" type="text" name="service_type" class="form-control">                                      <option>Please select...</option>                                      <option value="sale">sale  </option>                                      <option value="purchase">purchase</option>                                      <option value="rent">rent</option>                                    </select>                                  </div>                                                                   <div class="form-group col-lg-6">                                     <label for="input2">Location of Services Required    </label>                                   <select id="property_form_field" type="text" name="location_of" class="form-control">                                      <option>Please select...</option>                                   <?php					$select_user_query="select * from location_of_service order by location_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['location_service']; ?></option>                                    <?php	}    				?>                                    </select>                                  </div>                                  <div id="dubble_fields" class="form-group col-lg-6">                                    <div class="clr"></div>  
 
 
 
 
 
<div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Country</label>
	
	<select class="form-control" name="country" type="text" id="property_form_field">

	<option>Please select...</option>

	<?php
	$select_user_query="select * from country order by country_id ASC ";

	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
	?>
	<?php 
	echo "<option value=\"".$user_row['country_id']."\">".$user_row['country']."</option>";
	?>

	<?php	}
	?>

	</select>


                                  </div>

                              <div id="dubble_fields" class="form-group col-lg-6">

                                <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">City</label>
									<span id="city_span">
									
									<select id="property_form_field" type="text" name="area" class="form-control">

                                      
                                        <option>City</option>
										
									</select>
									</span>
									
                                    </div>

                                    <div class="form-group col-lg-6">

                                     <label id="real_state_lable" for="input2">City Area</label>
									<span id="city_area_span">
                                      <select id="property_form_field" type="text" name="city_area" class="form-control">
                                        <option>City Area</option>
                                      </select>
									</span>
                                    </div>

                                  </div>
                                  </div>                                        


 <div id="dubble_fields" class="form-group col-lg-6">     
 <div class="clr"></div>                                 
 <div class="form-group col-lg-6">                                     <label for="input2">Price/Budget</label>                                     <select id="property_form_field" type="text" name="budget" class="form-control">                                      <option>Budget</option>                                   <?php					$select_user_query="select * from price_range order by price_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['price_range']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Price</label>                                      <select id="property_form_field" type="text" name="price" class="form-control">                                      <option>Price</option>                                                                   <?php					$select_user_query="select * from price_range order by price_id ASC ";										$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					{						?>                                      <option><?php echo $user_row['price_range']; ?></option>                                    <?php	}    				?>                                    </select>                                    </div>                                  </div>                                  <div id="dubble_fields" class="form-group col-lg-6">                                    <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">PTCL No.</label>                                     <input id="inner_form_field" type="text" name="ptcl" class="form-control">                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Mobile No.</label>                                     <input id="inner_form_field" type="text" name="mob" class="form-control">                                    </div>                                  </div>                                       <div class="form-group col-lg-6">                                    <label for="input2">Applicant Present Address</label>                                    <input id="inner_form_field" type="text" name="present_address" class="form-control"  placeholder="Applicant Present Address">                                  </div>                                  <div id="dubble_fields" class="form-group col-lg-6">                                    <div class="clr"></div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Applicant Name</label>                                     <input id="inner_form_field" type="text" name="applicant_name" class="form-control">                                    </div>                                    <div class="form-group col-lg-6">                                     <label for="input2">Email Address</label>                                     <input id="inner_form_field" type="text" name="email" class="form-control">                                    </div>                                  </div>                                  <div class="form-group col-lg-12">                                    <label for="input2">Comments for Order or Partnership</label>                                    <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Please type your further Details"></textarea>                                    <button id="submit_btn5" type="submit" name="submit" class="btn btn-primary">Submit</button>                                  </div>                                    </form>                                </div>                              </div>                            </div>                          </div>                        </div><?php include "includes/footer.php";?>