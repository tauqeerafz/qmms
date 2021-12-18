
<?php include "includes/innerheader.php";?>   
<?php ob_start(); 
				header("Location:club.php");?>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>

   <div id="inner_container" class="col-lg-12">                             
   <div class="inner_contant">      
   <?php echo $page_long_description; ?>                               
   <h1 id="marrige">Please give the details to have full access of our deals.</h1> 
   <?php                     
	   if(isset($_POST['submit'])) {                           
			extract($_REQUEST);                                
			
			//Get current date and insert into table
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
			VALUES ('".date('y\-m\-d')."','$name','$cell','$email','$cell','$source1')";
			
			
			$qr=mysql_query($q) or die (mysql_error());
			
			if($qr) {       
			
				echo 'Your Application has been submitted Sucessfully';    
			}			
		} 
	?>
	<form role="form" method="POST" action="" enctype="multipart/form-data">        
		<div class="row">           
			                         
			<div class="form-group col-lg-6">            
			<label id="marrige" for="input1">Name of Memeber</label>         
			<input id="inner_form_field" type="text" name="name" class="form-control">                         
			</div>                                 
			
			<div class="form-group col-lg-6">            
			<label id="marrige" for="input1">Cell Number</label>         
			<input id="inner_form_field" type="text" name="cell" class="form-control">                         
			</div>                                 
			
			<div class="form-group col-lg-6">                        
			<label id="marrige" for="input3">Memeber Email</label>         
			<input id="inner_form_field" type="email" name="email" class="form-control">       
			</div>   
			<div class="form-group col-lg-6">  
			<label id="marrige" for="input2">Source</label>      
			<select id="inner_form_field" type="text" name="source1" class="form-control">                                
			<option>Please select...</option>              
			<option value="Visitor/Club">Visitor/Club </option>                          
            <option value="Marriage/Service">Marriage/Service</option>                          
            <option value="Property/Service">Property/Service</option>                          
            <option value="Energies/Service">Energies/Service</option>                          
            <option value="Marketing/Service">Marketing/Service</option>                          
            <option value="Exchange/Service">Exchange/Service</option>                          
            <option value="Recruitment/Service">Recruitment/Service</option>                          
            <option value="Software/Service">Software/Service</option>                          
            
			</select>                                
			</div>                               
			
			</div>
			<div class="form-group col-lg-6" style="float:right;">   
			<input type="hidden" name="save" value="contact">                  
			<button id="submit_btn3" type="submit" name="submit" class="btn btn-primary" >Submit</button>         
			 
			</div>


			</div>                                </form>                            
		</div>                     
		</div>                   
		</div>                     
		</div>                 
		<?php include "includes/footer.php"; ob_end();?>