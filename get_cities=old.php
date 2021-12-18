<!-- <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script> -->

<?php
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		require('connections/connection.php');

		//$select_user_query="select * from city order by city_id ASC ";	
		 $select_user_query = "SELECT * FROM `city` WHERE `country_id` = ".$id;
		$select_user_result = @mysql_query($select_user_query);
		echo "<select id=\"property_form_field\" type=\"text\" name=\"area\" class=\"form-control\">";
		echo "<option>City</option>";
		while( $user_row = @mysql_fetch_array($select_user_result,MYSQL_ASSOC) ) {
			echo "<option value=\"".$user_row['city_id']."\">". $user_row['city']."</option>"; 
		}
		echo "</select>";
	}
?>
