<?php
header("Content-type: text/html; charset='windows-1250'");
include "connections/connection.php";

if($WebsiteStatus=="NO")
{
$page_id1=$_REQUEST['page_id'];
if($page_id1=='' or $page_id1==' ')
{
$page_id1='1';
}
$page_query="select *from site_pages where page_id='$page_id1'";
$page_result=mysql_query($page_query);
$page_row=mysql_fetch_array($page_result);

$page_id=$page_row['page_id'];
$page_name=$page_row['page_name'];
$page_main_heading=$page_row['page_main_heading'];
$meta_title=$page_row['meta_title'];
$meta_keywords=$page_row['meta_keywords'];
$meta_description=$page_row['meta_description'];
$page_short_description=stripslashes($page_row['page_short_description']);
$page_long_description=stripslashes($page_row['page_long_description']);
$page_parent_id=$page_row['page_parent_id'];
$page_status=$page_row['page_status'];
$page_seo=$page_row['page_seo'];
$page_template=$page_row['page_template'];
$page_image=$page_row['page_image'];
$banner_image=$page_row['banner_image'];
$page_tag_line=$page_row['page_tag_line'];

}else
{
header("Location: error.php");
}
?>
<?php include ''.$page_template.'.php';?>
