<!DOCTYPE html>

<html>
<head>

<script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
	   if (input.files && input.files[1]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test1').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[1]);
       }
	       if (input.files && input.files[2]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test2').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[2]);
       }
    }
</script>
<?php include "includes/innerheader.php";?>       

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>
</head>
<body>
                     <div id="inner_container" class="col-lg-12">                              
					 <div class="inner_contant col-lg-12">                                
					 <h1 id="property"> Marketing & Advertisement</h1>                                
					 <div class="row">                                     
					 
					 
					 
					 
<?php                                if(isset($_POST['submit'])) {                                                                             extract($_REQUEST);                                                
					 foreach($_FILES['uploaded_files']['name'] as $key=>$value){if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) && $_FILES['uploaded_files']['error'][$key] == 0){$filename = $_FILES['uploaded_files']['name'][$key];if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'. $filename)){}else{die ('There was a problem uploading the pictures.');}}else{die ('There is a problem with the uploading system');}}                            
					
						$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
					VALUES ('".date('y\-m\-d')."','$applicant_name','$mob','$email','$mob','Marketing/Service')";
					@mysql_query($q);

					$q="INSERT INTO `marketingform` (`app_status`, `service_cat`, `service_type`, `location_of`, `city`, `area`, `country`, `period_of`, `price`, `ptcl`, `mob`, `present_address`, `applicant_name`, `email_add`, `comments`,`file`,`dateandtime`)VALUES
					 ('$app_status','$service_cat','$service_type','$location_of','$city','$area', '$country', '$period_of', '$price', '$ptcl', '$mob', '$present_address', 
					 '$applicant_name', '$email', '$comments','$filename','".date('y\-m\-d')."')";
					 $qr=mysql_query($q) or die (mysql_error());
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




					 <form name="myform" method="POST" action="">                                
					 <div class="form-group col-lg-6">                                    
					 <label for="input2">Applicant Status </label>                                    
					 <select id="property_form_field" type="text" name="app_status" class="form-control">                                      
					 <option>Please select...</option>                                      
					 <option value="Individual">Individual </option>                                      
					 <option value="company">company</option>                                    
					 </select>                                  
					 </div>
					 <div class="form-group col-lg-6">                                    
					 <label for="input2">Service Category  </label>                                  
					<select id="property_form_field" type="text" name="service_cat" class="form-control">                            
						<option>Please select...</option>                                           
						<option value="TV - Cable Advertisement">TV - Cable Advertisement</option> 
						<option value="Mobile SMS Advertisement">Mobile SMS Advertisement</option>                               
						<option value="Social Media-Internet Ads">Social Media-Internet Ads</option> 
						<option value="FM Radio Ads">FM Radio Ads</option>                               
						<option value="Bill Boards">Bill Boards</option> 
						<option value="Banners printing & Fixture">Banners Printing & Fixture</option>                        		                        <option value="Visiting Cards">Visiting Cards</option> 
						<option value="Tele-Marketting">Tele-Marketting</option>
                        <option value="Mobile SMS Ads">Campaigns</option>                               
						<option value="Others">Others</option>                               
											 
					</select> 
					 </div>   
					 <div class="form-group col-lg-6">                       
					 <label for="input2">Service Type  </label>                      
					<select id="property_form_field" type="text" name="service_type" class="form-control">             
						<option>Please select...</option>                                    
						<option value="sale">Sale  </option>  
						<option value="purchase">Purchase  </option>  
						<option value="booking">Booking  </option> 
						<option value="offers">Offers  </option>  					
					</select> 

					 </div>                                  
					 <div class="form-group col-lg-6">    
					 <label for="input2">Location of Services Required   </label>                           
					<input id = "property_form_field" type="text" name="location_of" class="form-control" />
					 </div> 

					 <div id="dubble_fields" class="form-group col-lg-6">  
					 <div class="clr"></div>
					 
					 
					 
	<div class="form-group col-lg-6">

   <label id="real_state_lable" for="input2">Country</label>
	
	<select class="form-control" name="country" type="text" id="country">

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

<div class="form-group col-lg-6">
	<label id="real_state_lable" for="input2">City</label>				
		<select id="city"  type="text" name="city" class="form-control">
	    	<option>Please select...</option>
	    </select>
 </div>
 <div class="form-group col-lg-6">
	<label id="real_state_lable" for="input2">City Area</label>				
		<select id="cityarea"  type="text" name="area" class="form-control">
	    	<option>Please select...</option>
	    </select>
 </div>
                                  
                                  </div>					 
					 
					 <div id="dubble_fields" class="form-group col-lg-6">   
					 <div class="clr"></div>  


					 
					 <div class="form-group col-lg-6">                          
					 <label for="input2">Period Of Service</label>                              
					 <select id="property_form_field" type="text" name="period_of" class="form-control">        
					 <option>Please select...</option>                                
					 <?php					$select_user_query="select * from period_service order by period_id ASC ";					
					 $select_user_result=mysql_query($select_user_query);					
					 while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))		
					 {						?>                                      
					 <option><?php echo $user_row['period']; ?></option>                                    
					 <?php	}    				?>                                   
					 </select>                                    
					 </div>                                    
					 <div class="form-group col-lg-6">                                     
					 <label for="input2">Price/Budget</label>                                      
					 <select id="property_form_field" type="text" name="price" class="form-control">                                      
					 <option>Please select...</option>                                                                    
					 <?php					
					 $select_user_query="select * from price_range order by price_id ASC ";										
					 $select_user_result=mysql_query($select_user_query);					
					 while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))					
					 {						?>                                      
					 <option><?php echo $user_row['price_range']; ?></option>                                    
					 <?php	}    				?>                                    
					 </select>                                    
					 </div>                                  
					 </div>     
					 <div id="dubble_fields" class="form-group col-lg-6">                                                                       
					 <div class="clr"></div>                                    
					 <div class="form-group col-lg-6">                                     
					 <label for="input2">PTCL No.</label>                                     
					 <input id="inner_form_field" type="text" name="ptcl" class="form-control">                                                                         
					 </div>                                    <div class="form-group col-lg-6">                                     
					 <label for="input2">Mobile No.</label>                                     
					 <input id="inner_form_field" type="text" name="mob" class="form-control">                                                                         
					 </div>                                  </div>                                 
					 <div class="form-group col-lg-6">                                   

					 <label for="input2">Applicant Present Address</label>                                    
					 <input id="inner_form_field" type="text" name="present_address" class="form-control"  placeholder="Applicant Present Address">                                  
					 </div>                                  
					 <div id="dubble_fields" class="form-group col-lg-6">                                                                       
					 <div class="clr"></div>                                    
					 <div class="form-group col-lg-6">                                     
					 <label for="input2">Applicant Name</label>                                     
					 <input id="inner_form_field" type="text" name="applicant_name" class="form-control">                                                                         
					 </div>                                   
					<div class="form-group col-lg-6">                                     
					 <label for="input2">Email Address</label>                                     
					 <input id="inner_form_field" type="text" name="email" class="form-control">                                                                         
					 </div>                                  </div>                                  
					 <div class="form-group col-lg-12">                                    
					 <label for="input2">Comments for Order or Partnership</label>                                    
					 <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Please type your further Details">
					 </textarea>                   
					 				
					 </div>                                   
					 <button id="submit_btn5" type="submit" name="submit" class="btn btn-primary">Submit</button>     
					 </div> 
					 
					 </form>
					 </div> 
					 </div>            
					 </div>                
					 </div>                      
					 </div>                              
					 <?php include "includes/footer.php";?>
					 
</body>
</html>