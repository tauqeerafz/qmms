<?php include "includes/header.php"; ?>
<div class="main_contant"> 
  <script src="js/jquery.min.js" type="text/javascript"></script> 
  <script src="js/my.js" type="text/javascript"></script>
  <div class="container">
    <div class="row">
      <div id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"><a href="propertypage.php">
          <h1 id="real_estate">Property Market</h1>
          <img class="img-responsive img-home-portfolio" src="images/image1.jpg"> </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"> <a href="marriagehome.php">
          <h1 id="marrige">Marriage Services</h1>
          <img class="img-responsive img-home-portfolio" src="images/image2.jpg"> </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"> <a href="travel.php">
          <h1 id="advertise">Quick Travel Agents</h1>
          <img class="img-responsive img-home-portfolio" src="images/travel.jpg"> </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"><a href="online_exchange.php">
          <h1 id="services">Quick Exchange</h1>
          </a> <a href="exchange.php"> <img class="img-responsive img-home-portfolio" src="images/image4.jpg"> </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"><a href="marketingform.php"> <img class="img-responsive img-home-portfolio" src="images/image3.jpg"></a> <a href="online_marketting.php">
          <h1 id="markting">Quick <br />
            Marketing</h1>
          </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href="http://www.Jovago.com/hotels">
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/hotel.jpg">
          <h1 id="software">Quick <br />Hotel Booking</h1>
        </div>
        </a> </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href="newspaper1.php">
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/qadrian.jpg">
          <h1 id="software">Quick Man<br />
            News </h1>
        </div>
        </a> </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href='clubpage.php'>
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/club.jpg">
          <h1 id="advertise">Quick
            
            Man's <br>
            Club</h1>
        </div>
        </a> </div>
    </div>
  </div>
  <div class="section-colored text-center">
    <div class="container">
      <div class="row">
        <div  id="index_posts" class="col-lg-12">
          <h6 id="homeh6">
            <marquee direction="left" scrolldelay="1" scrollamount="4" >
            <span style="background:#7A84FE; color:#FFF;">Click On Club & Check Your Registered Mobile Sims on all Networks </span> | <span class="prophd">Advertise Free Property Get Online Direct Deals Both Buyers/Sellers </span> | <span class="marghd"> Pakistan No.1 online Quick Marriage Services for Educated Class</span>
            </marquee>
          </h6>
        </div>
      </div>
      <!--mouse over effect's--> 
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
      <script type="text/javascript">
      $(function() {
        var moveLeft = 20;
        var moveDown = 12;
        
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
		  $(this).find('.show_agent_info').css('down', e.pageY + 5).css('display', 'block');
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
      <div class="row">
        <?php
	$select_user_query="SELECT * FROM `adds` WHERE `status`='Active' AND `email` !='Newspaper' order by `adds_id` ASC  ";
	$count = 1;
	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
?>
        <div id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
          <div class="index_post agent"> <a href="<?php echo $agent_permalink; ?>"> <img class="img-responsive ads" src="images/page_images/<?php echo $user_row['add_name']?>"> </a>
            <div class="show_agent_info">
              <div class="agentbox"> <span class="pop_up1" style="display:block; font-weight:bolder; font-size:17px;">
                <label > <img src="images/phone.png" style="width: 13px;"/></label>
                <?php echo $user_row['contact'];?> </br>
                <label> <img src="images/email.png" style="width: 13px;"/></label>
                <?php echo $user_row['email'];?> </span> </div>
            </div>
            <!-- .agent_info --> 
          </div>
          <!-- .agent --> 
        </div>
        <?php
		$count++;
	}
?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php 

include "includes/footer.php";
//require_once('contactform-code.php');


?>
