<?php include "includes/innerheader.php"; ?>     <div id="inner_container" class="col-lg-12">             <div class="inner_contant">                                               
 <?php 
 if(isset($_POST['submit'])){   
 $sender = $_POST["email"]; 
 $name = $_POST["name"];
 $Subject = $_POST['subject'];$to = '';  
	$EmailBody="<table  cellpadding=5 width=800>";
	$EmailBody=$EmailBody . "<tr height=30>";
	$EmailBody=$EmailBody . "<th colspan=4  align=left bgColor=#000000 style=color:#FFFFFF><b>Contact From :: ".$_POST ["contact_name"]."</th>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td colspan=4 ><b>--------------------------------------------Contact Information--------------------------------------------</b></td>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td width=200><b>Name*:</b></td><td width=230>".$_POST ["contact_name"]."</td>";
	$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td width=200><b>Email*:</b></td><td width=230>".$_POST ["contact_email"]."</td>";
	$EmailBody=$EmailBody . "</tr>";$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td width=200><b>subject*:</b></td><td width=230>".$_POST ["subject"]."</td>";
	$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td width=200><b>Message*:</b></td><td width=230>".$_POST ["message"]."</td>";
	$EmailBody=$EmailBody . "</tr>";
	$mail=mail($to, $Subject, $EmailBody, "From: <$sender>\nReply-To: $sender\nContent-Type: text/html; charset=UTF-8");
	if($mail) {		
		echo '<p style="text-align:center;color:#F00; font-weight:bold; font-size:16px;">Success</p>';	
	}	
	else {	
		echo'<p style="text-align:center;color:#F00; font-weight:bold; font-size:16px;">System Busy Please try again in few minutes</p>' ;		
	}
 }
 ?>                                                  
 <div id="inner_form_area" class="row col-lg-12">                    
 <h1>Contact Us</h1>                                                   

 <form role="form" method="POST" action="#">                                               
 <div class="row">                                                            
 <div class="form-group col-lg-6">                                               
 <label for="input2" id="">Name</label>                                               
 <input id="inner_form_field" type="text" name="contact_name" class="form-control"  placeholder="Your Name Here">  
 <label for="input2" id="">Email</label>                    <input id="inner_form_field" type="text" name="contact_email" class="form-control"  placeholder="Your Email Here">                           
 <label for="input2" id="">Mobile #</label>            
 <input id="inner_form_field" type="text" name="subject" class="form-control"  placeholder="Your Mobile number here">     
 </div>                                                        
 <div class="form-group col-lg-6">                                 
 <label for="input2" id="">Comments for Inquiry or Partnership </label>            
 <textarea id="inner_form_text_area" name="message" class="form-control" rows="6"  placeholder="Please type your further Details"></textarea>      
 
 
<input type="hidden" name="save" value="contact">                                     
<button id="submit_btn" type="submit" name="submit" class="btn btn-primary">Submit</button>      
                          </div>                    </div>             
						  <a href="skype:********?call"><img src="images/skype_icon.png"> </a>  
						  </form>                                                      </div>             
						  </div>                                       </div>                            
						  </div>                                     </div>                             
						  <?php  include "includes/footer.php"; ?>
						  