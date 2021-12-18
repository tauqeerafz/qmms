<?php
include('../connections/connection.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['mobile'];
	$password=$_POST['password'];

//Get current date and insert into table

$sql="SELECT memeber_id FROM `quick_man` WHERE memeber_id='$mob'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0)
{ echo "Your account has been already Registred. Go to Lodin Panel or Contact QMMS Helpline";}
else{			
			$q="INSERT INTO `quick_man`( `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`) 
				VALUES ('".date('y\-m\-d')."','$name','$mob','$email','$password','Registration')";
				@mysql_query($q) or die(mysql_error());
if($q)
{ echo 'Your Account has been Registred Successfully.Your User ID is '.$mob.' Go to Login Panel.';
	} else {
	echo "Account not Registred. Contact QMMS Helpline"; }				
}
die();
?>