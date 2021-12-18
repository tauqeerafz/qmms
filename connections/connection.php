<?php 
@session_start();

error_reporting(E_ERROR | E_PARSE); 


$hostname_connect= "localhost";
$database_connect= "qmms";
$username_connect= "root";
$password_connect= "";


$connect_solning = mysql_connect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 
@mysql_select_db($database_connect) or die (mysql_error()); 
 
    $ResultGC=mysql_query("select * from admin_users where admin_id='1'") or die (mysql_error());
	$WebsiteStatus=mysql_result($ResultGC,0,"site_status");
	$GlobalEmail=mysql_result($ResultGC,0,"admin_email");
	$facebook=mysql_result($ResultGC,0,"facebook_link");
	
	$linkedin=mysql_result($ResultGC,0,"linkedin_link");
	$twitter=mysql_result($ResultGC,0,"twitter_link");
	$rss=mysql_result($ResultGC,0,"rss_link");
	$google=mysql_result($ResultGC,0,"google_link");
	$vimeo=mysql_result($ResultGC,0,"vimeo_link");
	$telephone=mysql_result($ResultGC,0,"telephone");
	$telephone1=mysql_result($ResultGC,0,"telephone1");
	$account_info=mysql_result($ResultGC,0,"account_info");
	$fax=mysql_result($ResultGC,0,"fax");
	$address=mysql_result($ResultGC,0,"address");
	$work_for_us=mysql_result($ResultGC,0,"work_for_us");
	
	
	
	function showBrief($str, $length) {
  //$str = strip_tags($str);
  $str = explode(" ", $str);
  return implode(" " , array_slice($str, 0, $length));
}
function showBrief1($str, $length) {
  $str = strip_tags($str);
  $str = explode(" ", $str);
  return implode(" " , array_slice($str, 0, $length));
}
function substrwords($text,$maxchar,$end=''){
if(strlen($text)>$maxchar){
  $words=explode(" ",$text);
  $output = '';
  $i=0;
  while(1){
	$length = (strlen($output)+strlen($words[$i]));
	if($length>$maxchar){
	 break;
	}else{
	 $output = $output." ".$words[$i];
	 ++$i;
	};
  };
  $output.=$end;
}else{
  $output = $text;
}
return $output;
}
include 'includes/function.php';
?>