<?php
require('connections/connection.php');
$qry = 'SELECT * FROM `city` WHERE `country_id`='.$_POST['id'];
print_r($qry);
$sql = mysql_query($qry);
while($row = mysql_fetch_array($sql)){
?>
	<option value="<?php echo $row['city_id']; ?>"><?php echo $row['city']; ?></option>
<?php } ?>