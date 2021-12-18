<?php
function pageName($page_id)
{
$page_query="select *from site_pages where page_id='$page_id'";
$page_execute=mysql_query($page_query);
$page_result=mysql_fetch_array($page_execute);
{
?>
    <?php echo stripslashes($page_result['page_name']); ?>    
<?php
	}

}

/////////////////////////

