<?php include "includes/innerheader.php";

if(isset($_POST['enter']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['phone'];

//Get current date and insert into table
			
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
				VALUES ('".date('y\-m\-d')."','$name','$mob','$email','$mob','Club/Service')";
				@mysql_query($q) or die(mysql_error());
}
?>                    
	 <div id="inner_container" class="col-lg-12">                       
						<div class="contant">                                        
						<h1> QMMS Club </h1>        
						<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">     
							<a href="sim_check.php">
								<div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/sims.jpg">    
								<h1 >Check SIM's</h1>                                               
								</div>
							</a>            
						</div>                
						
						<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">        
							<a href="car_check.php"> 
								<div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/cars.jpg">     
								<h1 id="#">Check Vehicles</h1>                              
								</div>
							</a>                                             
						</div>                                        

						<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">                      
							<a href="noticeboard">
							<div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image8.jpg">     
							<h1 id="#">Public Message</h1>                                             
							</div></a>                                              
						</div>                                              
					
						<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">      
							<a href="noticeboard">
							<div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image8.jpg">     
							<h1 id="#">Visiter / Members Activities</h1>                                               
							</div></a>                                
						</div>                         
                     
						<div class="clr"></div>                                                                                              
					 
						<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">                                              
							<a href="noticeboard">
							<div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image8.jpg">    
							<h1 id="#">Updates</h1>                                                
							</div></a>                                         
						</div>


						
					</div>                
                                      



									  
		 <?php include "includes/footer.php";?>
