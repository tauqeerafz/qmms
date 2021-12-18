<?php include "includes/innerheader.php";
$user_id=$_REQUEST['user_id'];
$query="SELECT * FROM properties WHERE user_id='$user_id'";
$query=mysql_query($query);
$row=mysql_fetch_array($query,MYSQL_ASSOC);
$user_id=$row['user_id'];
$picture =json_decode(($row['pic']),true);
$no= count($picture);

?>

<div class="inner_contant">
  <h1>Full Size Picture</h1>
  <a href="propertypage.php" class="btn btn-success">Go Back</a>
  <div id="slider_area" class="col-lg-12">
    <article class="demo_block">
      <div class="sy-box">
        <div class="sy-slides-wrap">
          <div class="sy-slides-crop">
            <ul id="demo1" class="sy-list">
              <?php if($picture){ for ($i=0; $i<$no; $i++){?>
              <li class="sy-slide fade useCSS transition" style="transition: 800ms; -webkit-transition: 800ms; opacity: 0;"><a href="#slide1"><img src="uploads/<?php echo $picture[$i]; ?>"  alt=""></a></li>
              <?php } }
							else{?>
              <li class="sy-slide fade useCSS transition" style="transition: 800ms; -webkit-transition: 800ms; opacity: 0;"><a href="#slide1"><img src="uploads/<?php echo $row['pic']; ?>"  alt=""></a></li>
              <?php }?>
            </ul>
          </div>
          <ul class="sy-controls">
            <li class="sy-prev"><a href="#prev">Previous</a></li>
            <li class="sy-next"><a href="#next">Next</a></li>
          </ul>
          <div class="sy-caption-wrap">
            <div class="sy-caption" style="display: none;"></div>
          </div>
          <div class="sy-filler ready" style="padding-top: 28.8497217068646%;"></div>
        </div>
        <ul class="sy-pager">
          <li class=""><a href="#1">1</a></li>
          <li class="sy-active"><a href="#2">2</a></li>
          <li class=""><a href="#3">3</a></li>
        </ul>
      </div>
    </article>
  </div>
  <div class="well">
  	<p class="text-success lead"><?php  echo $row['area_range']." ".$row['property_type']." ".$row['category']; if ($row['no_bed']) echo "  with ". $row['no_bed'] ." Beds"; if ($row['no_bath']) echo " and ". $row['no_bath'] . "  Baths."; ?>
	</p>
    <p>Posted By :<?php  echo $row['app_name']?> <br />
    Email : <?php  echo $row['email']?> <br />
    Mobile # <?php  echo $row['mobile']?> <br />
    </p>
  
</div>
<?php include "includes/footer.php";?>
