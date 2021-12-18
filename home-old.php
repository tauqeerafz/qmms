<?php include "includes/header.php"; ?>
<div class="main_contant">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/my.js" type="text/javascript"></script>
<div class="container">
<div class="row">

  <div id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<div class="index_post"><a href="prodetails.php"> 
    <h1 id="real_estate">Quickman Real Estate<br />
    <li>Apply Form</li></h1></a>
    <img class="img-responsive img-home-portfolio" src="images/image1.jpg">
	<a href="online_properties.php"><h3>Find Online Properties</h3></a>
	</div>

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

    
   	<div class="index_post">
    	<a href="marriage.php">
   		<h1 id="marrige">Marriage Services <br />
        <li>Apply Form</li></h1></a> 
        <img class="img-responsive img-home-portfolio" src="images/image2.jpg">
		<a href="online_proposals.php"><h3>Find Online Proposals</h3></a>
	</div>
 

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	
    	<div class="index_post"><a href="marketingform.php">
        <h1 id="markting">Quick Marketing<br />
        <li>Apply Form</li></h1></a> 
        <img class="img-responsive img-home-portfolio" src="images/image3.jpg">
        <a href="marketingform.php"><h3>Find Online</h3></a>
		</div>
   

  </div>

	<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<div class="index_post"><a href="exchange.php"> 
    <h1 id="services">Quick Exchange<br />
    <li>Apply Form</li></h1></a>
    <img class="img-responsive img-home-portfolio" src="images/image4.jpg">
	<a href="marketingform.php"><h3>Find Online</h3></a>
	  

	</div>

  </div>
  
  <div class="clr"></div>
  
  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="energiesform.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image5.jpg">

	  <h1 id="advertise">Quick Alternative<br>

		Energies </h1>

	</div></a>

  </div>
  
  



  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="jobform.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image6.jpg">

	  <h1 id="traning">Quick Recruitment &

		Training Services </h1>

	</div></a>

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="software.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image7.jpg">

	  <h1 id="software">Quick Software-Web

		Developers </h1>

	</div></a>

  </div>
<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href='clubpage.php'><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/club.jpg">

	  <h1 id="advertise">Quick

		Man's <br>Club</h1>

	</div></a>


  </div>


</div>

</div>

<div class="section-colored text-center">

<div class="container">

  <div class="row">

	<div  id="index_posts" class="col-lg-12">
	<h6 id="homeh6"><marquee direction="left" scrolldelay="1" scrollamount="4" ><span style="background:#7A84FE; color:#FFF;">Click On Club & Check Your Registered Mobile Sims on all Networks  </span> |  <span class="prophd">Advertise Free Property Get Online Direct Deals Both Buyers/Sellers </span> | <span class="marghd"> Pakistan No.1 online Quick Marriage Services for Educated Class</span></marquee></h6>
	</div>
<!--mouse over effect's-->

    <meta charset="utf-8" />
    <style type="text/css">
     
.agent { width:200px; height:200px; float:left; padding:10px; margin:20px;  box-shadow:0 0 3px #e0dbca;background: none repeat scroll 0 0 #fff; }	   
.agent .show_agent_info { 
		display: none;
        position: absolute;
        width: 200px;
        padding: 10px;
        background: #CCC;
        color: #000000;
        /*border: 1px solid #333333;*/
		border-radius:5px;
        font-size: 90%; 
		list-style:none;
}
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(function() {
        var moveLeft = 20;
        var moveDown = 10;
        
        $('a#trigger').hover(function(e) {
          $('div#pop-up').show();
          //.css('top', e.pageY + moveDown)
          //.css('left', e.pageX + moveLeft)
          //.appendTo('body');
        }, function() {
          $('div#pop-up').hide();
        });
        
        $('a#trigger').mousemove(function(e) {
          $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        
      
	  
	$('.agent').mousemove(function(e) { 
		  $(this).find('.show_agent_info').css('top', e.pageY + 5).css('display', 'block');
		});
		
		$(".agent").hover(
		   function() {
		      $(this).find('.show_agent_info').show();
		   },
		   function() {
		      $(this).find('.show_agent_info').hide();
		   }
		);
		
	});	
    </script>

     
      <!-- HIDDEN / POP-UP DIV -->
      
                                                
<?php
	$select_user_query="SELECT * FROM `adds` WHERE `status`='Active' order by `adds_id` ASC  ";
	$count = 1;
	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
?>

<div class="agent">
	<a href="<?php echo $agent_permalink; ?>">
    	<img class="img-responsive img-home-portfolio" src="images/page_images/<?php echo $user_row['add_name']?>">
    </a>
    <div class="show_agent_info">           	
            <div class="agentbox">
                <span class="pop_up1" style="display:block; font-weight:bolder; font-size:17px;">
					<label > <img src="images/phone.png" style="width: 13px;"/></label> <?php echo $user_row['contact'];?>
					</br>
					<label> <img src="images/email.png" style="width: 13px;"/></label> <?php echo $user_row['email'];?>
				</span>
            </div>
    </div><!-- .agent_info -->
</div><!-- .agent -->
       
      	
			<!--
           <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
		
		<div class="index_post1"> 
            <div  class="pop_up" style=" height: 55px; ">
				<span class="pop_up1" style="display:block; font-weight:bolder; font-size:17px;">
					<label > <img src="images/phone.png" style="width: 13px;"/></label> <?php echo $user_row['contact'];?>
					</br>
					<label> <img src="images/email.png" style="width: 13px;"/></label> <?php echo $user_row['email'];?>
				</span>
			</div>

				<a href="#" id="trigger"><img class="img-responsive img-home-portfolio" src="images/page_images/<?php echo $user_row['add_name']?>"></a>
			 
       <div id="pop-up" class="pop">
        <h3>Pop-up div Successfully Displayed</h3>
        <p><label > <img src="images/phone.png" style="width: 13px;"/></label> <?php echo $user_row['contact'];?>
        </br>
					<label> <img src="images/email.png" style="width: 13px;"/></label> <?php echo $user_row['email'];?>
          This div only appears when the trigger link is hovered over. Otherwise
          it is hidden from view.<?php echo $user_row['add_name']?>
        </p>
      </div>
    
		</div>
        
        
        
	</div>
      -->
<?php
		$count++;
	}
?>
					  </div>

					   

					</div>

				  </div>

				</div>

				</div>

                                       

<?php 

include "includes/footer.php";
//require_once('contactform-code.php');


?>