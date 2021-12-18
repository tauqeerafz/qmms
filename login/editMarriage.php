<?php
include "../connections/connection.php";
include "../includes/getnames.php";
$user_id = $_GET['user_id'];
$query="SELECT * FROM `marriages` WHERE user_id='$user_id'";
$query=mysql_query($query);
$row=mysql_fetch_array($query,MYSQL_ASSOC);
$user_id=$row['user_id'];
if(isset($_POST['edit'])){
	
		$user_id=$_REQUEST['user_id'];
		extract($_REQUEST);
				
	 $update_query="update marriages set 
	 `profile_for`='$profile_for' ,`gender`='$gender',`name`='$name',`marital_status`='$material_status', `contact_no`='$contact_num',`gname`='$gname',`mobile`='$mobile',`email`='$email', `religion`='$religion', `ethnic_group`='$ethnic_group', `mother_tounge`='$mother_tounge', 
			`complexion`='$complexion', `height`='$height', `age`='$age', `education`='$education', `profession`='$profession', `nature_work`='$nature_of_work', `salary`='$salary', `prefer_overseas`='$overseas', `partner_abroad`='$partner_abroad', `present_addres`='$present_address',`houseowned`='$house_size',`status`='$news_status',`city`='$city',`country`='$country',`area`='$city_area',`describe_yourself`='$description',`expecteations`='$expecteations'
 where `user_id`='$user_id'";
	 $update_result=mysql_query($update_query);
		if($update_result)
		{
			header("Location: welcome.php?updateperposal=true");
		}
		
	}
	
?>
<body>
	<div class="container">
      <h2>Edit your Property</h2>
      <div class="well">
        <form name="edit_marriage" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                        <fieldset>
                        <p>
                        <label id="marrige" for="input2">Profile Created for</label>              
                            <select id="small-input" type="text" name="profile_for" class="text-input small-input">                
                                <option selected><?php echo $row['profile_for']; ?></option>                                    
                                <option value="Self">Self</option>                                   
                                <option value="Son">Son</option>                                     
                                <option value="Daughter">Daughter</option>                           
                                <option value="Sister">Sister</option>                               
                                <option value="Brother">Brother</option>                             
                                <option value="Relative">Relative</option>                           
                                <option value="Friend">Friend</option>                               
                            </select>  
                         </p>
                         <p><label id="marrige" for="input2">Gender</label>      
                        <select id="small-input" type="text" name="gender" class="text-input small-input">             
                            <option selected><?php echo $row['gender']; ?></option><option>Male</option>                                  
                            <option>Female</option>                                
                        </select></p> 
                    <p><label id="marrige" for="input1">Name of Candidate</label>         
                    <input id="small-input" type="text" name="name" value="<?php echo $row['name']; ?>" class="text-input small-input"> 
                    
                    <p><label id="marrige" for="input3">Contact Number in International Format</label>         
                    <input id="small-input" type="phone" name="contact_num" value="<?php echo $row['contact_no']; ?>" class="text-input small-input"> 
                    
                    <p><label id="marrige" for="input2">Marital Status</label>     
                    <select id="small-input" type="text" name="material_status" class="text-input small-input">              
                    <option selected><?php echo $row['marital_status']; ?></option><option>Un-Married</option>                                  
                    <option>Divorcee</option>                                
                    <option>Widowed</option>                          
                    <option>Separated</option>                             
                    <option>Men looking for second marriage </option>             
                    </select></p> 
                    <p><label id="marrige" for="input2">Religion</label>      
                    <select id="small-input" type="text" name="religion" class="text-input small-input">                                
                    <option selected><?php echo $row['religion']; ?></option><option>M-sunni</option>
                    <option>M-Shia</option> 
                    <option>AHLHadis</option>
                    <option>Ahmedi</option>
                    <option>Christian</option> 
                    <option>Others</option>             			
                    </select></p>   
                    
                    <p><label id="marrige" for="input2">Ethnic group, Roots of father and Mother </label>         
                    <select id="small-input" type="text" name="ethnic_group" class="text-input small-input">        
                    <option selected><?php echo $row['ethnic_group']; ?></option><option>Punjabi</option>  
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
                    </select></p>                 
                    
                    <p><label id="marrige" for="input2">Mother Tongue </label>       
                    <select id="small-input" type="text" name="mother_tounge" class="text-input small-input">                  
                    <option selected><?php echo $row['mother_tounge']; ?></option><option>Urdu</option>                                 
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
                    </select></p>
                    
                    <p><label id="marrige" for="input2">Complexion </label>         
                    <select id="property_form_field" type="text" name="complexion" class="text-input small-input">
                    <option selected><?php echo $row['complexion']; ?></option><?php					$select_user_query="select * from complexion order by complex_id ASC ";									
                    $select_user_result=mysql_query($select_user_query);					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))	
                    {						?>                                      <option><?php echo $user_row['complexion']; ?></option>             
                    <?php	}    				?>                                      </select> 
                    
                    <p><label id="marrige" for="input2">Height (Feet and Inches) </label>   
                    <select id="property_form_field" type="text" name="height" class="text-input small-input">                               
                    <option selected><?php echo $row['height']; ?></option><?php				
                    $select_user_query="select * from height order by height_id ASC ";										
                    $select_user_result=mysql_query($select_user_query);					
                    while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))		
                    {						
                    ?>  <option><?php echo $user_row['height']; ?></option>  
                    <?php	}    				?>                            
                    </select></p>
                     
                     <p><label id="marrige" for="input3">Age in Years</label>       
                    <select id="property_form_field" type="text" name="age" class="text-input small-input">     
                    <option selected><?php echo $row['age']; ?></option><?php					$select_user_query="select * from age order by age_id ASC ";		
                    $select_user_result=mysql_query($select_user_query);		
                    while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))		
                    {						?>                              
                    <option><?php echo $user_row['age']; ?></option>          
                    <?php	}    				?>       
                    </select></p>
                                     
                    <p><label id="marrige" for="input2">Education</label>     
                    <select id="small-input" type="text" name="education" class="text-input small-input">  
                    <option selected><?php echo $row['education']; ?></option>
                    <option>CA</option>                                   
                    <option>M.PHIL/PHD</option>                                   
                    <option>MA/MSC</option>                                 
                    <option>Matric</option>                                   
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
                    </p>                                
                    <p>        
                    <label id="marrige" for="input2">Profession</label>    
                    <select id="small-input" type="text" name="profession" class="text-input small-input">    
                    <option selected><?php echo $row['profession']; ?></option><option>Doctor</option>                            
                    <option>Teacher Lawyer</option>                        
                    <option>Engineer</option>                                  
                    <option>Software programmer</option>  
                    <option>Businessman , or Businesswoman</option>                                      		            <option>Computer Operator</option>                                 
                    <option>Govt. Servant </option>                        
                    <option>Professor</option>                             
                    <option>Student</option>                               
                    <option>Unemployed</option>                            
                    <option>Other Services </option>                     
                    </select>                                   
                    </p>                                  
                    <p>       
                    <label id="marrige" for="input3">Nature of Work / Job (current position / description)</label>    
                    <input id="small-input" type="phone" name="nature_of_work" value="<?php echo $row['nature_work']; ?>" class="text-input small-input">             
                    </p>                                  
                    <p>                         
                    <label id="marrige" for="input3">Salary / Income Per Month </label>                               
                    <input id="small-input" type="number" name="salary" value="<?php echo $row['salary']; ?>" class="text-input small-input" pattern="\d+(\.\d{2})?">                     
                    </p>                                                                
                    <p>                                     
                    <label id="marrige" for="input2">Do you prefer overseas proposal ?</label>       
                    <select id="small-input" type="text" name="overseas" class="text-input small-input">      
                    <option selected><?php echo $row['prefer_overseas']; ?></option>
                    <option>Yes </option>                                      
                    <option>No</option>                                      </select>                                    </p>                                  <p>                                      <label id="marrige" for="input2">Will  you take your partner Abroad </label>                                      <select id="small-input" type="text" name="partner_abroad" class="text-input small-input">                                      <option selected><?php echo $row['partner_abroad']; ?></option><option>Yes </option>                                      <option>No</option>                                      </select>                                    </p>                                                                    </p>                                                                        <p>                                      <label id="marrige" for="input3">Present Address in Pakistan </label>                              
                    <input id="small-input" type="phone" name="present_address" value="<?php echo $row['present_addres']; ?>" class="text-input small-input">                                    </p>
                                           <p><label id="real_state_lable" for="input2">Country</label>
            
            <select class="small-input" name="country" type="text" id="country">
        
            <option selected><?php echo get_country_name($row['country']); ?></option>
        
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
        
        </p>
        
        <p><label id="real_state_lable" for="input2">City</label>				
                <select id="city"  type="text" name="city" class="small-input">
                    <option selected><?php echo get_city_name($row['city']); ?></option>
                    <?php
            $select_user_query="select * from city order by city_id ASC ";
        
            $select_user_result=mysql_query($select_user_query);
            while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
            {
            ?>
            <?php 
            echo "<option value=\"".$user_row['city_id']."\">".$user_row['city']."</option>";
            ?>
        
            <?php	}
            ?>
                </select>
         </p>
        <p><label id="real_state_lable" for="input2">City Area</label>				
                <select id="cityarea"  type="text" name="city_area" class="small-input">
                    <option selected><?php echo get_area_name($row['area']); ?></option>
                    <?php
            $select_user_query="select * from `city_area` order by cityarea_id ASC ";
        
            $select_user_result=mysql_query($select_user_query);
            while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
            {
            ?>
            <?php 
            echo "<option value=\"".$user_row['cityarea_id']."\">".$user_row['city_area']."</option>";
            ?>
        
            <?php	}
            ?>
                </select>
         </p>
                    <p>                                     
            <label id="marrige" for="input3">House Size (Owned)</label>   
            <select id="small-input" type="text" name="house_size" class="text-input small-input">      
                <option selected><?php echo $row['houseowned']; ?></option><option value="2 to 5-Marla"> 2 to 5-Marla </option>                                      
                <option value="10 Marla"> 10 Marla</option>                                      
                <option value="1 kanal"> 1 Kanal</option>                                      
                <option value="2 kanal">2 Kanal </option>                                      
                <option value="3 kanal"> 3 Kanal</option>                                      
                <option value="4 Kanal">4 Kanal </option>                                      
                <option value="8 Kanal and above /Form House ">8 Kanal and above /Form House  </option>                                                                            
            </select>
        </p>
                    
        <p>       
                    <label id="marrige" for="input3">Guardian Name</label>    
                    <input id="small-input" type="phone" name="gname" value="<?php echo $row['gname']; ?>" class="text-input small-input">             
                    </p>			
                    <p>       
                    <label id="marrige" for="input3">Mobile No</label>    
                    <input id="small-input" type="tel" name="mobile" value="<?php echo $row['mobile']; ?>" class="text-input small-input">             
                    </p>
                    <p>       
                    <label id="marrige" for="input3">E-Mail Address</label>    
                    <input id="small-input" type="email" name="email" value="<?php echo $row['email']; ?>" class="text-input small-input">             
                    </p>
                    <p>
                    <label id="marrige" for="input4">Describe yourself/Your family about how many brother and sisters and how many are married  in few words</label>                                      <textarea id="inner_form_area" name="description" class="text-input small-input" rows="6"><?php echo $row['describe_yourself']; ?>                                      
                    </textarea>                                    
                    </p>                                                                                                          
                    <p>
                    <label id="marrige" for="input4">What are your expecteations from the partner and his/her family?</label>                                      <textarea id="inner_form_area" name="expecteations" class="text-input small-input" rows="6">                       <?php echo $row['expecteations']; ?>               
                    </textarea>                                    
                    </p>
                            <p>
                            <label>Status:</label>              
                            <select name="news_status" class="small-input">
                                <option value="Active" <?php if($row['news_status']=='Active'){ echo "selected=\"selected\""; } ?>>Active</option>
                                <option value="InActive"<?php if($row['news_status']=='InActive'){ echo "selected=\"selected\""; } ?>>InActive</option>
                            </select> 
                        </p> 
                        <p>
                            <input class="button" type="submit" value="Update" name="edit" />
                            <a href="admin.php?mod=manageMarriage"><input class="button" type="button" name="Back" value="Back" /></a>
                        </p>
                        </fieldset>               
                        <div class="clear"></div><!-- End .clear -->
                    </form>
      </div>
	</div>
	
</body>         
      
<!-- Developed by Tauqeer Afzal 03344684725,03244684725 -->