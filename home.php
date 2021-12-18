<?php include "includes/header.php"; ?>
<div class="main_contant"> 
  <script src="js/jquery.min.js" type="text/javascript"></script> 
  <script src="js/my.js" type="text/javascript"></script>
  <div class="container">
  	<div class="row">
  		   <div id="slider_area" class="col-lg-12">
            <section class="demo_wrapper"  style="height: 381px;>
			<article class="demo_block">								
			<ul id="demo1">
				<li><a href="#slide1"><img src="images/slider1.jpg" alt=""></a></li>
				<li><a href="#slide2"><img src="images/slider2.jpg"  alt=""></a></li>
				<li><a href="#slide3"><img src="images/slider3.jpg" alt=""></a></li>
				<li><a href="#slide4"><img src="images/slider4.jpg" alt=""></a></li>
			</ul>
			</article>
		</section>		
  </div>   
  	</div>
  	<br>
    <div class="row">
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <div class="index_post"><a href="propertypage.php"> <img class="img-responsive img-home-portfolio" src="images/property.jpg">
          <h1 id="markting">Houses/
            Plaza/F Houses</h1>
          </a> </div>
      </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href="online_properties.php">
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/plots.jpg">
          <h1 id="software">All kinds Plots/ Land</h1>
        </div>
        </a> </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href="login/login.php">
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/login.jpg">
          <h1 id="software">Login For Dealers</h1>
        </div>
        </a> </div>
      <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href=''>
        <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/maps.jpg">
          <h1 id="advertise">Maps</h1>
        </div>
        </a> </div>
    </div>
  </div>
  <div class="section-colored text-center">
    <div class="container">
 		<hr style="width: 100%; height: 25px; background: #a917e8;">
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

  <!--mouse over effect's--> 
      <script type="text/javascript">
      $(document).ready(function() {      
   $('.carousel').carousel('pause');
});

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