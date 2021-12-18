<!DOCTYPE html>

<html>
<head>
<?php include "includes/innerheader.php";?>
    <script src="js/jquery.min.js" type="text/javascript"></script> 
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script> 
    <script src="js/new.js" type="text/javascript"></script> 
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
	if (input.files && input.files[3]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test3').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[3]);
       }
    }
//price
function format1(n, currency) {
    return currency + " " + n.toFixed(2).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}

function format2(n, currency) {
    return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}

var numbers = document.getElementById(price);

document.write("<p>Format #1:</p>");
for (var i = 0; i < numbers.length; i++) {
    document.write(format1(numbers[i], "£") + "<br />");
}

document.write("<p>Format #2:</p>");
for (var i = 0; i < numbers.length; i++) {
    document.write(format2(numbers[i], "$") + "<br />");
}
</script>
    </head>
    <body>
    <div id="inner_container" class="col-lg-12">
      <div class="inner_contant"> <?php echo $page_long_description; ?>
        <h1 id="marrige">Pakistan No.1 Matrimonial Services  (Please Fill Free Form)</h1>
        <span style="color:#00F; font-family:'Arial Black', Gadget, sans-serif; font-size:18px;">Proposals are Subject to Approval (Min-Qualification FA/FSC = is Required)</span>
        <?php                     
	   if(isset($_POST['submit'])) {                       
			extract($_REQUEST);                              
			foreach($_FILES['uploaded_files']['name'] as $key=>$value){
				if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) && $_FILES['uploaded_files']['error'][$key] == 0){
					$filename = $_FILES['uploaded_files']['name'][$key];
					if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'. $filename)){
					}
					else
					{
						die ('There was a problem uploading the pictures.');
					}
				}
				
			}
		
//send e-mail
 $sender = "qmmspk@gmail.com";// 
 $Subject = "Welcome To Quick Man Marriage Services";//$_POST['subject'];
 $to = $_POST["email"];//'tauqeerafz@gmail.com';  
	$EmailBody="<table  cellpadding=5 width=800>";
	$EmailBody=$EmailBody . "<tr height=30>";
	$EmailBody=$EmailBody . "<th  align=center bgColor=#000000 style=color:#FFFFFF><b>Welcome To Quick Man Marriage Services </th>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td></td>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td><b>Dear MR/Mam , AOA</b>
	<p>Thanks for choosing Quick Marriage Service Which is Pakistan No.1 Website  and this Service designed to help especially Educated class.<br>Please Follow Steps.</p>
	<p>1) You have already Filled Up the Form</p>
	<p>2) Pay Registration Fee Rs.3000/-Deposit in our MCB Bank DHA T Block Branch Lahore A/c 0753695181004375 (Quick Man Multi Services) Online through Cash or by ATM/Internet Banking/Credit Card funds Transfer.</p>
	<p>3) Call at 042-37816077-9 and inform about your payment  for cross verification.</p>
	<p>4) You receive a call from our office for verification of detail.</p>
	<p>5) Choose Proposal ID Numbers that suits you & your family for visit and get their contact Numbers from our office against these IDs.</p>
	<p>Yes ! We charge but claim to save your money and your precious time so Lets Register Yourself immediately.</p>
	<p>For Any Further Query Please call us at Our Help Line PTCL No. 042-37186077-9. or email at info@qmmspk.com</p>
	<p>God Bless You and Your Families .</p></td>";
	$EmailBody=$EmailBody . "</tr>";
	$mail=mail($to, $Subject, $EmailBody, "From: <$sender>\nReply-To: $sender\nContent-Type: text/html; charset=UTF-8");



			//Get current date and insert into table
			
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
				VALUES ('".date('y\-m\-d')."','$name','$contact_num','$email','$contact_num','Marriage/Service')";
				@mysql_query($q);
				
			$q="INSERT INTO `marriages` (`profile_for`, `gender`, `name`, `marital_status`, `contact_no`,`gname`,`mobile`,`email`, `religion`, `ethnic_group`, `mother_tounge`, 
			`complexion`, `height`, `age`, `education`, `profession`, `nature_work`, `salary`, `prefer_overseas`, `partner_abroad`, `present_addres`,`country`, `city`, `area`, `describe_yourself`,`expecteations`,`pics`,`dateandtime`,`paymentMethod`,`houseowned`,`status`)
			VALUES
	('$profile_for','$gender','$name','$material_status','$contact_num','$gname','$mobile','$email','$religion', '$ethnic_group', '$mother_tounge', '$complexion', '$height', '$age', '$education', '$profession', '$nature_of_work', '$salary','$overseas','$partner_abroad','$present_address','$country','$city','$area','$description','$expecteations','$filename','".date('y\-m\-d')."','$pm','$house_size','InActive')";

			 $qr=mysql_query($q) or die (mysql_error()); 
			if($qr) {

	ob_start(); 
    ob_end_flush();     
	    ?>
        <div id="inner_container" class="col-lg-12">
          <div class="inner_contant col-lg-12">
            <h1  style="color:#090; text-align:center">Your Token No is
              <?php $lastid=mysql_insert_id();  echo $lastid;?>
              .</h1>
            <img class="img-responsive img-home-portfolio" src="images/thanks.jpg"> 
            <!--<h3>We will come back to you shortly via email.</h3>--> 
            <a href="index.php">
            <button  style="margin-right: 350px;" id="submit_btn3" type="submit" name="submit" class="btn btn-primary">Go Back</button>
            </a> </div>
        </div>
        <?php
	die('');						
	
}   

}  ?>
        <form role="form" method="POST" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Profile Created for</label>
              <select id="inner_form_field" type="text" name="profile_for" class="form-control">
                <option>Please select...</option>
                <option value="Self">Self</option>
                <option value="Son">Son</option>
                <option value="Daughter">Daughter</option>
                <option value="Sister">Sister</option>
                <option value="Brother">Brother</option>
                <option value="Relative">Relative</option>
                <option value="Friend">Friend</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Gender</label>
              <select id="inner_form_field" type="text" name="gender" class="form-control">
                <option>Please select...</option>
                <option>M-a-l-e</option>
                <option>Female</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input1">Name of Candidate</label>
              <input id="inner_form_field" type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Marital Status</label>
              <select id="inner_form_field" type="text" name="material_status" class="form-control">
                <option>Please select...</option>
                <option>Un-Married</option>
                <option>Divorcee</option>
                <option>Widowed</option>
                <option>Separated</option>
                <option>Man's 2nd Marriage</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Contact Number in International Format</label>
              <input id="inner_form_field" type="phone" name="contact_num" class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Religion</label>
              <select id="inner_form_field" type="text" name="religion" class="form-control">
                <option>Please select...</option>
                <option>M-sunni</option>
                <option>M-Shia</option>
                <option>AHLHadis</option>
                <option>Ahmedi</option>
                <option>Christian</option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Ethnic group, Roots of father and Mother </label>
              <select id="inner_form_field" type="text" name="ethnic_group" class="form-control">
                <option>Please select...</option>
                <option>Punjabi</option>
                <option>Sindhi</option>
                <option>syeds</option>
                <option>Saraiki</option>
                <option>Kashmiri</option>
                <option>Arain</option>
                <option>Jatt</option>
                <option>Rajput</option>
                <option>Butt</option>
                <option>Gujjar</option>
                <option>Rana</option>
                <option>Bhatti</option>
                <option>Malik</option>
                <option>Malik-Teli</option>
                <option>Sheikh</option>
                <option>Pathan-Pushto</option>
                <option>Puthan-Punjabi</option>
                <option>kakEZAI</option>
                <option>Muhajar</option>
                <option>Memmon</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Mother Tongue </label>
              <select id="inner_form_field" type="text" name="mother_tounge" class="form-control">
                <option>Please select...</option>
                <option>Urdu</option>
                <option>Punjabi</option>
                <option>Sindhi</option>
                <option>Pashto</option>
                <option>Balochi</option>
                <option>Seraiki </option>
                <option>Hindko</option>
                <option>Memoni </option>
                <option>Hindi </option>
                <option>English</option>
                <option>Arabic </option>
              </select>
            </div>
            <div id="dubble_fields" class="form-group col-lg-6">
              <div class="form-group col-lg-6">
                <label id="marrige" for="input2">Complexion </label>
                <select id="property_form_field" type="text" name="complexion" class="form-control">
                  <option>Please select...</option>
                  <?php					$select_user_query="select * from complexion order by complex_id ASC ";									
			$select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))	
			{						?>
                  <option><?php echo $user_row['complexion']; ?></option>
                  <?php	}    				?>
                </select>
              </div>
              <div class="form-group col-lg-6">
                <label id="marrige" for="input2">Height (Feet and Inches) </label>
                <select id="property_form_field" type="text" name="height" class="form-control">
                  <option>Please select...</option>
                  <?php				
			$select_user_query="select * from height order by height_id ASC ";										
			$select_user_result=mysql_query($select_user_query);					
			while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))		
			{						
			?>
                  <option><?php echo $user_row['height']; ?></option>
                  <?php	}    				?>
                </select>
              </div>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Age in Years</label>
              <select id="property_form_field" type="text" name="age" class="form-control">
                <option>Please select...</option>
                <?php					$select_user_query="select * from age order by age_id ASC ";		
			$select_user_result=mysql_query($select_user_query);		
			while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))		
			{						?>
                <option><?php echo $user_row['age']; ?></option>
                <?php	}    				?>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Education</label>
              <select id="inner_form_field" type="text" name="education" class="form-control">
                <option>Please select...</option>
                <option>CA</option>
                <option>M.PHIL/PHD</option>
                <option>MA/MSC</option>
                <option>MBA/MPA</option>
                <option>BA/BSC</option>
                <option>B.COM</option>
                <option>FA/FSC</option>
                <option>LLB/LLM</option>
                <option>MBBS</option>
                <option>BDS</option>
                <option>D.Pharma</option>
                <option>Veterinary Dr</option>
                <option>Architect</option>
                <option>c/Engineer</option>
                <option>M/Engineer</option>
                <option>E/Engineer</option>
                <option>Diploma Holder</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Profession</label>
              <select id="inner_form_field" type="text" name="profession" class="form-control">
                <option>Please select...</option>
                <option>Army</option>
                <option>Agriculturist</option>
                <option>Airline Job</option>
                <option>Architects</option>
                <option>Banking</option>
                <option>Businessman</option>
                <option>Businesswoman</option>
                <option>College University</option>
                <option>Consultant</option>
                <option>Govt Clerical</option>
                <option>Govt Officer</option>
                <option>Hospitals</option>
                <option>Hotel & Restaurant</option>
                <option>House Lady</option>
                <option>Import & Export</option>
                <option>Laboratories</option>
                <option>Lawers</option>
                <option>Judge</option>
                <option>Librarian</option>
                <option>Media Press TV</option>
                <option>Motorway Police</option>
                <option>Multinational Company</option>
                <option>Nursing</option>
                <option>Realestate Business</option>
                <option>Oil & Gas</option>
                <option>Other Services</option>
                <option>Pakistan Railways</option>
                <option>Private Company Job</option>
                <option>Police</option>
                <option>Pharmacist</option>
                <option>Student</option>
                <option>School</option>
                <option>Teaching</option>
                <option>PTCL</option>
                <option>Tourism Company</option>
                <option>Transportation</option>
                <option>Unemployed</option>
                <option>Wapda</option>
                <option>World Bank</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Nature of Work / Job (current position / description)</label>
              <input id="inner_form_field" type="phone" name="nature_of_work" class="form-control" maxlength="50">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Salary / Income Per Month </label>
              <input id="inner_form_field" type="number" name="salary" class="form-control" pattern="\d+(\.\d{2})?">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Do you prefer overseas proposal ?</label>
              <select id="inner_form_field" type="text" name="overseas" class="form-control">
                <option>Please select...</option>
                <option>Yes </option>
                <option>No</option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input2">Will  you take your partner Abroad </label>
              <select id="inner_form_field" type="text" name="partner_abroad" class="form-control">
                <option>Please select...</option>
                <option>Yes </option>
                <option>No</option>
              </select>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Present Address in Pakistan </label>
              <input id="inner_form_field" type="phone" name="present_address" class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">House Size (Owned)</label>
              <select id="inner_form_field" type="text" name="house_size" class="form-control">
                <option>Please select...</option>
                <option value="2 to 5-Marla"> 2 to 5-Marla </option>
                <option value="10 Marla"> 10 Marla</option>
                <option value="1 kanal"> 1 Kanal</option>
                <option value="2 kanal">2 Kanal </option>
                <option value="3 kanal"> 3 Kanal</option>
                <option value="4 Kanal">4 Kanal </option>
                <option value="8 Kanal and above /Form House ">8 Kanal and above /Form House </option>
              </select>
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Guardian Name</label>
              <input id="inner_form_field" type="phone" name="gname" class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">Mobile No</label>
              <input id="inner_form_field" type="tel" required name="mobile" class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label id="marrige" for="input3">E-Mail Address</label>
              <input id="inner_form_field" type="email" name="email" class="form-control">
            </div>
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
            <div class="form-group col-lg-12">
              <label id="marrige" for="input4">Describe yourself/Your family about how many brother and sisters and how many are married  in few words</label>
              <textarea id="inner_form_area" name="description" class="form-control" rows="6">                                      
			</textarea>
            </div>
            <div class="form-group col-lg-12">
              <label id="marrige" for="input4">What are your expecteations from the partner and his/her family?</label>
              <textarea id="inner_form_area" name="expecteations" class="form-control" rows="6">                                      
			</textarea>
            </div>
            
            <!--<div id="marrige_payment_schedule_area" class="col-lg-12">                                                                      
			<h1 id="marrige">Payment schedule</h1>                                                       
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Our pakages</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Registration fee</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Finalfee</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="width: 266px;">Select Package</div>

			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Platinum pakage </div>      
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">10,000</div>         
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">50,000</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="width: 266px;"><input type="radio" value="Platinum pakage" name="pm"/></div>
			
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Executive pakage</div>     
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">5000 </div>         
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">30,000</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="width: 266px;"><input type="radio" value="Executive pakage" name="pm"/></div>
			
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Overseas pakage</div>        
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">$ 100</div>        
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">$ 500</div>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="width: 266px;"><input type="radio" value="Overseas pakage" name="pm"/></div>
			
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Disabled persons</div>         
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">3000 </div>        
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">NiL</div><p>
			<div id="payment_area" class="col-lg-4 col-md-4 col-sm-4 col-xs-4"style="width: 266px;"><input type="radio" value="Disabled persons" name="pm"/></div>
			
			<strong>Note.</strong>
			Please deposit registration fee to our bank alfalah account . 12456765885 online DHA branch lahore. Or Pay through cross chq in favour of "Quickman Multi Services  " and despatch at our office address .....    </p>  
			</div>-->
            <div class="form-group col-lg-6" style="width:900px;">
              <label id="marrige" for="input3">Add pics</label>
              <input type="file" name="uploaded_files[]" onchange="readURL(this)" id="inner_form_field2" multiple />
              <img style="width:200px; height:120px" id="test" src="images/sample_image.png" /> 
              <!---<img style="width:200px; height:120px" id="test1" src="images/sample_image.png" />					
					<img style="width:200px; height:120px" id="test2" src="images/sample_image.png" />					
					<img style="width:200px; height:120px" id="test3" src="images/sample_image.png" />	--> 
            </div>
            <button id="submit_btn3" type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php";?>
</body>
</html>