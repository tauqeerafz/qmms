<?php 
	function get_country_name($id){
	$query = "SELECT country FROM `country` WHERE `country_id` = ".$id;
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row['country'];
	}
	function get_city_name($id){
	$query = "SELECT city FROM `city` WHERE `city_id` = ".$id;
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row['city'];
	}
	function get_area_name($id){
	$query = "SELECT city_area FROM `city_area` WHERE `cityarea_id` = ".$id;
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row['city_area'];
	}
    ?>