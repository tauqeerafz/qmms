<?php
require('connections/connection.php');
$qry = 'SELECT * FROM `city_area` WHERE `city_id`='.$_POST['id'] .' order by `city_area` ASC ';
print_r($qry);
$sql = mysql_query($qry);?>
<?php
while($row = mysql_fetch_array($sql)){
?>
	<option value="<?php echo $row['cityarea_id']; ?>"><?php echo $row['city_area']; ?></option>
<?php } ?>