<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>
<select id="property_form_field" type="text" name="city_area" class="form-control">

	<option>City Area</option>

	<?php
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	
		require('connections/connection.php');

		//$select_user_query="select * from city_area order by cityarea_id ASC ";
		$select_user_query = "SELECT * FROM `city_area` WHERE `city_id` =".$id;
		$select_user_result = mysql_query($select_user_query);
		while($user_row=mysql_fetch_array($select_user_result,MYSQL_ASSOC)){
	?>
			<?php
				echo "<option value=\"".$user_row['cityarea_id']."\">".$user_row['city_area']."</option>";
			?>
	<?php	
		}
	}
	?>


</select>



