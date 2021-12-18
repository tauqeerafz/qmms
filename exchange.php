<?php include "includes/innerheader.php";?>                            
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>



<div id="inner_container" class="col-lg-12">                              
	<div class="inner_contant col-lg-12">
    	<h1 id="marrige">Advertise your FCY Exchange Company with Quick Man</h1>
        <hr />
		<?php echo $page_long_description; ?>  <?php                       
         if(isset($_POST['submit'])) {                                                                           
				 extract($_REQUEST);   
		$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
							VALUES ('".date('y\-m\-d')."','$applicant_name','$mob','$email','$mob','Exchange/Service')";
							@mysql_query($q);		 
				 $q="INSERT INTO `exchange` (`app_status`, `service_cat`, `currency_hand`, `currency_req`, `city`, `area`, `country`, `ptcl`, `mob`, `present_address`, `applicnt_name`, 
				 `email`, `comments`,`dateandtime`)VALUES('$app_status','$service_cat','$currency_hand','$currency_req','$city','$area', '$country', '$ptcl', '$mob', '$present_address', 
				 '$applicant_name', '$email', '$comments','".date('y\-m\-d')."')";$qr=mysql_query($q) or die (mysql_error());
				 
		if($qr) {
		
			ob_start(); 
			ob_end_flush();     
	    ?>
        <div id="inner_container" class="col-lg-12">

<div class="inner_contant col-lg-12">

<h1  style="margin-left:210px;">Thank you so much for registering to our service.</h1>
<h3 style="margin-right:31px;">We will come back to you shortly via email.</h3>
<a href="index.php"><button  style="margin-right: 471px; margin-top: 81px;" id="submit_btn3" type="submit" name="submit" class="btn btn-primary">Go Back</button>    </a>     
			

                            </div>

                          </div>           <?php
	die('');						
	
}   }  ?>
<form name="myform" method="POST" action=""> 

<div id="dubble_fields" class="form-group col-lg-6">
	   <label id="exchange" for="input2">Company Name</label>    
       <input id="inner_form_field" type="text" name="applicant_name" class="form-control"  placeholder="Company Name">                   
</div>

<div id="dubble_fields" class="form-group col-lg-6">
                 
        <label id="exchange" for="input2">Company Address</label>         
        <input id="inner_form_field" type="text" name="present_address" class="form-control"  placeholder="Company Address">                             

</div>                                                                                                      
<div class="clr"></div>

<div id="dubble_fields" class="form-group col-lg-6">
       
        <label id="exchange" for="input2">Email Address</label>                                  
        <input id="inner_form_field" type="text" name="email" class="form-control"  placeholder="Email Address">    

</div>

<div id="dubble_fields" class="form-group col-lg-6">  
    <div class="form-group col-lg-6">                                    
        <label id="exchange" for="input2">PTCL No.</label>
        <input id="inner_form_field" type="text" name="ptcl" class="form-control"  placeholder="">  
	</div>
                              
	<div class="form-group col-lg-6">              
        <label id="exchange" for="input2">Mobile No.</label>      
        <input id="inner_form_field" type="text" name="mob" class="form-control"  placeholder="">                             
    </div>         
</div> 
<input type="hidden" id="country" value="165" name="country" />
<div id="dubble_fields" class="form-group col-lg-6">
	<label id="real_state_lable" for="input2">City</label>				
		<select id="city"  type="text" name="city" class="form-control">
			<option>Please select...</option>
			<?php
					$qry = 'SELECT * FROM `city`';
					print_r($qry);
					$sql = mysql_query($qry);
					while($row = mysql_fetch_array($sql)){
			?>
        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city']; ?></option>
    		<?php } ?>
	    	
	    </select>
 </div>
<div id="dubble_fields" class="form-group col-lg-6">
	<label id="real_state_lable" for="input2">City Area</label>				
		<select id="cityarea"  type="text" name="area" class="form-control">
	    	<option>Please select...</option>
	    </select>
 </div> 
<div class="clr"></div>                                                 
<div id="dubble_fields" class="form-group col-lg-12">    
   <div class="form-group col-lg-12">
   		<label id="real_state_lable" for="input2">Comments</label>
       <textarea id="inner_form_text_area" name="comments" class="form-control" rows="6"  placeholder="Comment / detail"></textarea>       <input type="hidden" name="save" value="contact">
       <button id="submit_btn7" type="submit" name="submit" class="btn btn-primary">Submit</button>   
   </div>
</div> 
</form>
</div>      
</div>  
<?php include "includes/footer.php";?>