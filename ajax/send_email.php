<?php
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mob=$_REQUEST['phone'];

//Get current date and insert into table
			
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
				VALUES ('".date('y\-m\-d')."','$name','$mob','$email','$mob','Club/Service')";
				@mysql_query($q);
?>