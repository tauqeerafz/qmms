<?php
include "../connections/connection.php";
include "../includes/getnames.php";
$id = $_GET['user_id'];
$query= mysql_query("SELECT * FROM properties WHERE user_id='$id'");

$row= mysql_fetch_array($query) or die(mysql_error());
$user_id=$row['user_id'];
		
if(isset($_POST['edit'])){
		$user_id=$_REQUEST['user_id'];
		extract($_REQUEST);
		
	 $update_query="update properties set 	 
	 `app_status`='$app_status', `category`='$category', `property_type`='$property_type', `price_range`='$price_range', `area_range`='$area_range', `house_no`='$house_no', `block`='$block', `no_bed`='$no_rooms', `no_bath`='$no_bath', `furnished`='$furnished', `city`='$city', `city_area`='$city_area',`country`='$country', `app_present_address`='$present_address', `ptcl`='$ptcl', `office_address`='$office_address', `app_name`='$app_name', `email`='$email', `mobile`='$mobile',`city`='$city', `city_area`='$city_area',`country`='$country', `comments`='$comments' where `user_id`='$user_id'";
	 /*echo"<pre>";
		print_r($update_query);
		die();
		echo"</pre>";*/
		$update_result=mysql_query($update_query);
		if($update_result)
		{
		header("Location: welcome.php?updateproperty=true");
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>User Panel</title>
<link href="../css/qmms.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Edit your Property</h2>
  <div class="well">
    <form name="edit_service" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
      <fieldset>
        <?php /*?><p>
                                    <label id="real_state_lable" for="input2">Applicant Status </label>

                                    <select id="property_form_field" required type="text" name="app_status" class="small-input">

                                      <option selected><?php echo $row['app_status']; ?></option>

                                      <option value="Individual">Individual </option>

                                      <option value="company">company</option>

                                    </select>

                                  </p><?php */?>
        <p>
          <label id="real_state_lable" for="input2">Category</label>
          <select id="property_form_field" required type="text" name="category" class="small-input">
            <option selected><?php echo $row['category']; ?></option>
            <option value="For Sale">For Sale</option>
            <option value="For Rent">For Rent</option>
            <option value="Want Buy">Want Buy</option>
          </select>
        </p>
        <p>
          <label id="real_state_lable" for="input2">Property Type </label>
          <select id="property_form_field" required type="text" name="property_type" class="small-input">
            <option selected><?php echo $row['property_type']; ?></option>
            <option>House</option>
            <option>Plaza</option>
            <option>Shop</option>
            <option>Flat</option>
            <option>Farm House</option>
            <option>Residntal Plot</option>
            <option>Commercal Plot</option>
            <option>Agri-Land</option>
            <option>Petrol Pump</option>
          </select>
        </p>
        <p>
          <label id="real_state_lable" for="input2">Price </label>
          <input id="property_form_field" type="number" name="price_range" class="small-input" value="<?php echo $row['price_range']; ?>"  pattern="\d+(\.\d{2})?" \>
        </p>
        <p>
          <label id="real_state_lable" for="input2">Area Range</label>
          <select id="property_form_field" type="text" name="area_range" class="small-input">
            <option selected><?php echo $row['area_range']; ?></option>
            <?php
					$select_user_query="select * from area_range order by area_id ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
            <option><?php echo $user_row['area_range']; ?></option>
            <?php
						
					}
    				?>
          </select>
        </p>
        <div id="dubble_fields" class="form-group col-lg-6">
        <p>
          <label id="real_state_lable" for="input2">House / Plot / Flat / Shop # </label>
          <input id="property_form_field" type="text" name="house_no" value="<?php echo $row['house_no']; ?>" class="small-input"/>
        </p>
        <p>
          <label id="real_state_lable" for="input2">Block # </label>
          <select id="property_form_field" type="text" name="block" class="small-input">
            <option selected><?php echo $row['block']; ?></option>
            <?php
					$select_user_query="select * from price_range order by price_range ASC ";
					
					$select_user_result=mysql_query($select_user_query);
					while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
					{
						?>
            <option><?php echo $user_row['price_range']; ?></option>
            <?php
						
					}
    				?>
          </select>
        </p>
        <label id="real_state_lable" for="input2">Bed Room </label>
        <select id="property_form_field" type="text" name="no_rooms" class="small-input">
          <option selected><?php echo $row['no_bed']; ?></option>
          <option>N/A</option>
          <?php
                                        /* example 1 */

                                        $i = 1;
                                        while ($i <= 10) {?>
          <option><?php echo $i++;   ?></option>
          <?php } ?>
        </select>
        </p>
        <label id="real_state_lable" for="input2">Bath </label>
        <select id="property_form_field" type="text" name="no_bath" class="small-input">
          <option selected><?php echo $row['no_bath']; ?></option>
          <option>N/A</option>
          <?php
                                        /* example 1 */

                                        $i = 1;
                                        while ($i <= 10) {?>
          <option><?php echo $i++;   ?></option>
          <?php } ?>
        </select>
        </p>
        <label id="real_state_lable" for="input2">Location </label>
        <select id="property_form_field" type="text" name="furnished" class="small-input">
          <option selected><?php echo $row['furnished']; ?></option>
          <option>N/A</option>
          <option>Prime Location</option>
          <option>Odd Location</option>
          <option>Corner</option>
          <option>Non-Corner</option>
          <option>Near Main Rd</option>
          <option>Near Mosque</option>
          <option>Facing Park </option>
          <option>Near Market</option>
          <option>Main Market</option>
          <option>Semi Comrcial</option>
          <option>Near Boundry</option>
        </select>
        </p>
        <?php /*?><p>
          <label id="real_state_lable" for="input2">Country</label>
          <select class="small-input" name="country" type="text" id="country">
            <option selected><?php echo get_country_name($row['country']); ?></option>
            <?php
	$select_user_query="select * from country order by country_id ASC ";

	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
	?>
            <?php 
	echo "<option value=\"".$user_row['country_id']."\">".$user_row['country']."</option>";
	?>
            <?php	}
	?>
          </select>
        </p><?php */?>
        <p>
          <label id="real_state_lable" for="input2">City</label>
          <select id="city"  type="text" name="city" class="small-input">
            <option selected><?php echo get_city_name($row['city']); ?></option>
            <?php
	$select_user_query="select * from city order by city_id ASC ";

	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
	?>
            <?php 
	echo "<option value=\"".$user_row['city_id']."\">".$user_row['city']."</option>";
	?>
            <?php	}
	?>
          </select>
        </p>
        <p>
          <label id="real_state_lable" for="input2">City Area</label>
          <select id="cityarea"  type="text" name="city_area" class="small-input">
            <option selected><?php echo get_area_name($row['city_area']); ?></option>
            <?php
	$select_user_query="select * from `city_area` order by cityarea_id ASC ";

	$select_user_result=mysql_query($select_user_query);
	while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC))
	{
	?>
            <?php 
	echo "<option value=\"".$user_row['cityarea_id']."\">".$user_row['city_area']."</option>";
	?>
            <?php	}
	?>
          </select>
        </p>
        <p>
        <h1 id="real_state_lable"><u>User Detail !</u></h1>
        <hr color="#333333">
        </p>
        <p>
          <label id="real_state_lable" for="input2">Applicant(Owner's Name)</label>
          <input id="inner_form_field" type="text" name="app_name" value="<?php echo $row['app_name']; ?>" class="small-input"  placeholder="Applicant Name">
        </p>
        <p>
          <label id="real_state_lable" for="input2">Applicatn Contact Address (Office/House)</label>
          <input id="inner_form_field" type="text" name="present_address" value="<?php echo $row['present_address']; ?>" class="small-input" placeholder="Applicatn Present Address">
        </p>
        <p>
          <label id="real_state_lable" for="input2">Email Address</label>
          <input id="inner_form_field" type="text" name="email" value="<?php echo $row['email'];  ?>" class="small-input"  placeholder="Email Address">
        </p>
        <p>
          <label id="real_state_lable" for="input2">Mobile #</label>
          <input required id="inner_form_field" type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="small-input"  placeholder="Mobile #">
        </p>
        <p>
          <label id="real_state_lable" for="input2">PTCL #</label>
          <input id="inner_form_field" type="text" name="ptcl" value="<?php echo $row['ptcl'];  ?>" class="small-input"  placeholder="PTCL #">
        </p>
        <p>
        	<label id="real_state_lable" for="input2">Comments</label><br />
          <textarea id="inner_form_text_area" name="comments" class="small-input" rows="6"   placeholder="Comment / detail"><?php echo $row['comments'];  ?></textarea>
        </p>
        <?php /*?><?php if($row['pic'] =='null' || '') {?>
        <p>
          <label>Status:</label>
          <select name="news_status" class="small-input">
            <option selected><?php echo $row['status']; ?></option>
            <option value="Active" <?php if($row['news_status']=='Active'){ echo "selected=\"selected\""; } ?>>Active</option>
            <option value="InActive"<?php if($row['news_status']=='InActive'){ echo "selected=\"selected\""; } ?>>InActive</option>
          </select>
        </p>
        <?php } ?><?php */?>
        <p>
          <input class="button" type="submit" value="Submit" name="edit" />
          <a href="welcome.php">
          <input class="button" type="button" name="Back" value="Back" />
          </a> </p>
      </fieldset>
      <div class="clear"></div>
      <!-- End .clear -->
    </form>
  </div>
</div>
</body>
<!-- Developed by Tauqeer Afzal 03344684725,03244684725 -->