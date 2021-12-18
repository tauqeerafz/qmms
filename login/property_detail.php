<?php
include "../includes/getnames.php";
include'../includes/library.php';
include('lock.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>new design </title>
<style>

</style>
</head>

<body>
 <div class="container">
 <?php
                        $select_query="select * from properties WHERE `mobile`='$user_check' ";
                        $count = 1;
                        $select_result=mysql_query($select_query);
                        while($row=mysql_fetch_array($select_result,MYSQL_ASSOC))
                        {
                        $picture =json_decode(($row['pic']),true);	?>
 <div class="panel panel-default">
    <div class="panel-body">
	<div class="row">
         	<div class="col-lg-6">
            
			<p class="text-primary lead"><?php echo $row['area_range']." ".$row['property_type']." with ".$row['no_bed']." Bed and " . 
			$row['no_bath']. " Baths. "; ?>  </p>
            <p class="text-info">House No.<?php echo $row['house_no']." Block ".$row['block']." " .$row['furnished'];?></p>
			<p class="text-info"><?php echo get_area_name($row['city_area']).",".get_city_name($row['city']); ?>
            </p>
            <p class="text-info"><?php echo "Ad no ". $row['user_id']." Posted on ".date("Y-m-d",$row['dateandtime']); ?>
            </p>
			<small class="text-muted"><?php echo $row['property_type'].">>" .$row['category']; ?></small> 
            </div>
            <div class="col-lg-2">
            	<h4 class="text-warning text-right">Rs: <?php echo number_format($row['price_range']); ?></h4>
                <small class="text-muted pull-right"><?php $date=$row['dateandtime']; echo date_format('$date', 'Y-m-d H:i:s');  ?></small>
            </div>
            <div class="col-lg-4"><img src="../uploads/<?php if($picture) echo $picture[0]; else echo $row['pic']; ?>" height="200" width="200"></div>
         </div>                   
	</div>
 </div>
 <?php
                            $count++;
                        }
                        ?>
 </div>
</body>
</html>