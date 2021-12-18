<?php include "connections/connection.php";
if($WebsiteStatus=="YES")
{
	 include "includes/error_header.php";?>
<div class="main_contener">
      <div class="welcom_area" style="width: 600px; margin:0 0 0 88px">
       <h1 style="margin:0 0 0 80px; font-size:63px;">Website Is Down For Maintenance</h1>
      </div>
</div>
<?php } else header("Location: index.php");?>
</div>