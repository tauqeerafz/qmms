<?php include "includes/innerheader.php";
	$query=mysql_query("Select * from `site_pages` where `page_id` =10");
	$get=mysql_fetch_array($query);
?>

<div id="inner_container" class="col-lg-12">
  <div class="inner_contant">
    <h1><?php echo $get['page_main_heading']; ?></h1>
    <div id="pic_area" class="col-lg-4 col-md-4"> <img src="images/page_images/<?php echo $get['page_image']; ?>" alt="CEO" class="img-responsive"/> </div>
    <div class="col-lg-8 col-md-8">
      <p> <?php echo $get['page_long_description']; ?> </p>
    </div>
  </div>
</div>
</div>
</div>
<?php include "includes/footer.php";?>
