<?php   
include'connections/connection.php';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$Phone = $_POST['cell'];
			
			//Get current date and insert into table
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
			VALUES ('".date('y\-m\-d')."','$name','$Phone','$email','$Phone','Visitor/Club')";
			
			
			$qr=mysql_query($q) or die (mysql_error());
			
			echo"<pre>";
			print_r($q);
			dia();
			echo"</pre>";
			if($qr) {       
			
			}			
	
	?>