<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/cspopup.css" />
<!--<script src="js/jspopup.js"></script>-->
<script>
$(document).ready(function() {
	
setTimeout(popup, 300);
function popup() {
$("#logindiv").css("display", "block");
}
$("#loginbtn #logindiv").click(function() {
$(this).parent().parent().hide();
$("#logindiv").css("display", "none");
});
});



</script>
</head>
<body>

<?php include "includes/innerheader.php";?>                    
	 <div id="inner_container" class="col-lg-12">                       
						<div class="inner_contant">                                        
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

<!-- Required Div Starts Here -->
<!--Login Form -->
<div id="logindiv">
<form class="form" action="club.php" method="post" id="login">
<!--<img src="images/croxx.png" class="img" id="cancel"/>-->
<h3>Please sign up to enter Club</h3>

		<input type='text' required  style=" background: url(images/name.png) top left no-repeat; background-size:30px;
		padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;" 
		name='name' id='name' value='' placeholder="Name" onBlur="if(value==''){value='Name'}" onFocus="if(value== 'Name'){value = ''}"  maxlength="50" /><br/>
		
		<input type='email' required  style=" background: url(images/email.png) top left no-repeat; background-size:30px;
		padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;" 
		name='email' id='email' value='' placeholder="Email" onBlur="if(value==''){value='Email'}" onFocus="if(value== 'Email'){value = ''}"  maxlength="50" /><br/>
		
		<input type='text' required style="background: url(images/phone.png) no-repeat; background-size:30px;
		padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;" 
		name='phone' id='Phone' value='' placeholder="Mobile No" onBlur="if(value==''){value='Phone'}" onFocus="if(value== 'Phone'){value = ''}"  maxlength="50" /><br/>

<input type="submit" name="enter" id="loginbtn" value="Enter"/>

</form>
</div>

</body>
</html>
