<?php include "includes/innerheader.php";?>

    <div id="inner_container" class="col-lg-12">

                              <div class="inner_contant col-lg-12">

                                <h1 id="real_state_lable">Real Estate</h1>

                                <div class="row">
                                    
                                    <?php
                                if(isset($_POST['submit'])) {
                                     
                                        extract($_REQUEST);
                                            foreach($_FILES['uploaded_files']['name'] as $key=>$value)

{

if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) && $_FILES['uploaded_files']['error'][$key] == 0)

{

$filename = $_FILES['uploaded_files']['name'][$key];

if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'. $filename))

{
}

else

{

die ('There was a problem uploading the pictures.');

}

}

else

{

die ('There is a problem with the uploading system');

}

}

                                        $q="INSERT INTO `properties` (`app_status`, `category`, `property_type`, `price_range`, `area_range`, `house_no`, `no_bed`, `furnished`, `area`, `city_area`,`country`, `app_present_address`, `ptcl`, `office_address`, `app_name`, `email`, `mobile`, `comments`,`file`)VALUES
('$app_status','$category','$property_type','$price_range','$area_range', '$house_no', '$no_rooms', '$furnished', '$area', '$city_area', '$country','$present_address', '$ptcl', '$office_address', '$app_name', '$email', '$mobile', '$comments', '$filename')";
$qr=mysql_query($q) or die (mysql_error());
if($qr) {
    
    echo 'Your Application has been submitted Sucessfully';
    
    
}
                                        
                                        
                                        
                                    }
                                    
                                    ?>
                                    
                                    
                                    <form name="prodetails" method="post" action="" enctype="">
                                <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Applicant Status </label>

                                    <select id="property_form_field" type="text" name="app_status" class="form-control">

                                      <option>Please select...</option>

                                      <option value="Individual">Individual </option>

                                      <option value="company">company</option>

                                    </select>

                                  </div>

                                  <div id="dubble_fields" class="form-group col-lg-6">

                                    <div class="form-group col-lg-6">

                                     <label id="real_state_lable" for="input2">Category </label>

                                      <select id="property_form_field" type="text" name="category" class="form-control">

                                         <option>Please select...</option>

                                      <option value="All">All</option>

                                      <option value="Sale">Sale</option>

                                      <option value="Rent">Rent</option>

                                      </select>

                                    </div>

                                    <div class="form-group col-lg-6">

                                     <label id="real_state_lable" for="input2">Property Type </label>
  <select id="property_form_field" type="text" name="property_type" class="form-control">

                                      <option>Property Type</option>

                                      <option>Houses</option>

                                      <option>Apartments</option>

                                      <option>PG & Roommates</option>

                                      <option>Land & Plots</option>

                                      <option>Shops & Offices</option>

                                      <option>Guest Houses</option>
    </select>

                                    </div>

                                  </div>
     <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Price Range</label>

                                    <select id="property_form_field" type="text" name="price_range" class="form-control">

                                      <option>Price Range</option>
  <?php
					$select_user_query="select * from price_range order by price_id ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
                                      <option><?php echo $user_row['price_range']; ?></option>

                                    <?php
						
					}
    				?>
                                    </select>

                                  </div>

                                  <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Area Range</label>

                                    <select id="property_form_field" type="text" name="area_range" class="form-control">

                                      <option>Area Range</option>

                                     <?php
					$select_user_query="select * from area_range order by area_id ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
                                      <option><?php echo $user_row['area_range']; ?></option>

                                    <?php
						
					}
    				?>

                                    </select>

                                  </div>
      <div id="dubble_fields" class="form-group col-lg-6">

                                    <div class="form-group col-lg-6">

                                     <label id="real_state_lable" for="input2">House/Plot/Flat/Room # </label>

                                      <select id="property_form_field" type="text" name="house_no" class="form-control">

                                      <option>Please select...</option>
                                        <?php
                                        /* example 1 */

                                        $i = 1;
                                        while ($i <= 10) {?>
                                              <option><?php echo $i++;   ?></option>  
                                        <?php } ?>


                                     

                                      </select>

                                    </div>

                                    <div class="form-group col-lg-3">

                                     <label id="real_state_lable" for="input2">No. Of Room </label>
   <select id="property_form_field" type="text" name="no_rooms" class="form-control">

                                    <?php
                                        /* example 1 */

                                        $i = 1;
                                        while ($i <= 10) {?>
                                              <option><?php echo $i++;   ?></option>  
                                        <?php } ?>
     </select>

                                    </div>
   <div class="form-group col-lg-3">

                                     <label id="real_state_lable" for="input2">Furnished </label>
   <select id="property_form_field" type="text" name="furnished" class="form-control">

                                      <option>Yes</option>

                                      <option>No</option>

                                    </select>

                                    </div>
    </div>
                                        
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
                                      <option><?php echo $user_row['country']; ?></option>

                                    <?php	}
    				?>

                                    </select>

                                  </div>

                              <div id="dubble_fields" class="form-group col-lg-6">

                                <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">City</label>

                                      <select id="property_form_field" type="text" name="area" class="form-control">

                                        <option>City</option>

                                      <?php
					$select_user_query="select * from city order by city_id ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
                                      <option><?php echo $user_row['city']; ?></option>

                                    <?php
						
					}
    				?>

                                      </select>

                                    </div>

                                    <div class="form-group col-lg-6">

                                     <label id="real_state_lable" for="input2">City Area</label>

                                      <select id="property_form_field" type="text" name="city_area" class="form-control">

                                        <option>City Area</option>

                                    <?php
					$select_user_query="select * from city_area order by cityarea_id ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
                                      <option><?php echo $user_row['city_area']; ?></option>

                                    <?php	}
    				?>


                                      </select>

                                    </div>

                                  
                                  </div>

                                  
 
                                  

                                  <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Applicatn Present Address</label>

                                     <input id="inner_form_field" type="text" name="present_address" class="form-control" placeholder="Applicatn Present Address">

                                  </div>

                                 

                                  <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">PTCL #</label>

                                     <input id="inner_form_field" type="text" name="ptcl" class="form-control"  placeholder="PTCL #">

                                  </div>

                                  

                                  

                                    <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Office Address</label>

                                     <input id="inner_form_field" type="text" name="office_address" class="form-control"  placeholder="Office Address">

                                  </div>

                                  

                                  

                                   <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Applicant Name</label>

                                     <input id="inner_form_field" type="text" name="app_name" class="form-control"  placeholder="Applicant Name">

                                  </div>

                                  

                                  

                                     <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Email Address</label>

                                     <input id="inner_form_field" type="text" name="email" class="form-control"  placeholder="Email Address">

                                  </div>

                                  

                                  

                                    <div class="form-group col-lg-6">

                                    <label id="real_state_lable" for="input2">Mobile #</label>

                                     <input id="inner_form_field" type="text" name="mobile" class="form-control"  placeholder="Mobile #">

                                  </div>


                                  <div class="form-group col-lg-12">

                                                        <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Comment / detail"></textarea>
     <div class="form-group col-lg-6">

                                      <label id="marrige" for="input3">Add pics</label>
                                     <input type="file" name="uploaded_files[]" id="inner_form_field2" multiple="multiple" />
                                 

                                    </div>

                                                        <input type="hidden" name="save" value="contact">

                                                        <button id="submit_btn6" type="submit" name="submit" class="btn btn-primary">Submit</button>

                                                      </div>
                                    </form>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>                     

<?php include "includes/footer.php";?>