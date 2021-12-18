<?php include "includes/header.php";?>
     <div class="main_contant">

<div class="container">

<div class="row">

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="prodetails.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image1.jpg">

	  <h1 id="real_estate">Proprities & Real

		Estate Consultants </h1>

	</div></a>

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

   <a href="marriage.php"> <div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image2.jpg">

	  <h1 id="marrige">Marriage<br>

		Consultants </h1>

	</div></a>

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="marketingform.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image3.jpg">

	  <h1 id="markting">Quick Marketing and

		Advertising </h1>

	</div></a>

  </div>

  <div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

	<a href="exchange.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image4.jpg">

	  <h1 id="services">Quick Exchange<br> Services</h1>

	</div></a>

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

	<a href="club.php"><div class="index_post"> <img class="img-responsive img-home-portfolio" src="images/image8.jpg">

	  <h1 id="advertise">Quick<br>

		Man Club</h1>

	</div></a>

  </div>

</div>

</div>

<div class="section-colored text-center">

<div class="container">

  <div class="row">

	<div  id="index_posts" class="col-lg-12">

	  <h6>Quick Classified Ads</h6>

	</div>

                                                
<?php
	$select_user_query="SELECT * FROM `adds` WHERE `status`='Active' order by `adds_id` ASC  ";
	$count = 1;
	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
?>
	<div  id="index_posts" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
	  <div class="index_post"><a href="<?php echo $user_row['link']?>" target="_blank"> <img class="img-responsive img-home-portfolio" src="images/page_images/<?php echo $user_row['add_name']?>"></a>

	

		</div>
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

                                       

<?php include "includes/footer.php";?>