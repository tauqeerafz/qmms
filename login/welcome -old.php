<?php
include "../includes/getnames.php";
include('lock.php');
if($_REQUEST['action']=='delete_m')
	{
		$user_id=$_REQUEST['user_id'];
		$select_query="select * from marriages where user_id='$user_id'";
		$select_result=mysql_query($select_query);
		$row=mysql_fetch_array($select_result);
		$filename=$row['service_img'];	
		$delete_query="delete from marriages where user_id='$user_id';";
		$delete_result=mysql_query($delete_query);
		if($delete_result)
		{
			@unlink("../".$filename);
			?>
			<div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                	Proposal Deleted !
                </div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                	Failed to Delete Proposal!
                </div>
			</div>
			<?php
		}
	}
if($_REQUEST['action']=='delete_p')
	{
		$user_id=$_REQUEST['user_id'];
		$select_query="select * from properties where user_id='$user_id'";
		$select_result=mysql_query($select_query);
		$row=mysql_fetch_array($select_result);
		$filename=$row['service_img'];	
		$delete_query="delete from properties where user_id='$user_id';";
		$delete_result=mysql_query($delete_query);
		if($delete_result)
		{
			@unlink("../".$filename);
			?>
			<div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                	Properties Deleted !
                </div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                	Failed to Delete Properties!
                </div>
			</div>
			<?php
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="">

<meta name="author" content="">

<title>User Panel</title>

<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/qmms.css" rel="stylesheet">

<link href="../css/dataTables.responsive.css" rel="stylesheet">
<link href="../css/dataTables.editor.min.css" rel="stylesheet">
<link href="../css/dataTables.tableTools.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.responsive.min.js"></script>
<script src="../js/dataTables.editor.min"></script>
<script src="../js/dataTables.tableTools.min.js"></script>

</head>

<body>

<!--<h1>Welcome <?php echo $login_session; ?></h1> 
<h2><a href="http://onlinewebapplication.com">onlinewebapplication.com</a></h2>

<h2><a href="logout.php">Sign Out</a></h2>-->
<div class="container">
  <h2>Welcome <?php echo $login_session; ?><a class="pull-right btn-default" href="logout.php">Logout</a></h2>
  
  <div class="panel panel-default">
    <div class="panel-body">
    	<div class="content-box-content">
            <div class="tab-content default-tab" id="tab1"> 
                <h1>Your Property Add's</h1>
                <table  class="table table-striped table-bordered table-hover display responsive nowrap"id="dataTables-example" >
                    <thead>
                        <tr  id="prop" role="row">    
                           <th width="29" align="center">Token</a></th>
                           <th width="120">Applicant Status</th>
                           <th width="120">Category</th>
                           <th width="120">Type</th>
                           <th width="120">Price Range</th>
                           <th width="120">Area Range</th>
                           <th width="120">House No</th>
                           <th width="120">Block</th>
                           <th width="120">No of Rooms</th>
                           <th width="120">No of Baths</th>
                           <th width="120">Location</th>
                           <th width="120">City</th>
                           <th width="120">City Area</th>
                           <th width="120"> Present Address</th>
                           <th width="120">PTCL #</th>
                           <th width="120">Office Address</th>
                           <th width="120">Applicant Name</th>
                           <th width="120">Email</th>
                           <th width="120">Phone #</th>
                           <th width="120">Comments</th>
                           <th width="120">Pics</th>
                           <th width="120">Status</th>
                           <th width="120">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query="select * from properties WHERE `mobile`='$user_check' ";
                        $count = 1;
                        $select_result=mysql_query($select_query);
                        while($row=mysql_fetch_array($select_result,MYSQL_ASSOC))
                        {
                        $picture =json_decode(($row['pic']),true);	?>
                            <tr>
                                <td align="center"><?php echo $row['user_id']; ?></td>
                                 <td><?php echo $row['app_status'];  ?></td>
                                 <td><?php echo $row['category']; ?></td>
                                 <td><?php echo $row['property_type']; ?></td>
                                 <td><?php echo number_format($row['price_range']); ?></td>
                                 <td><?php echo $row['area_range']; ?></td>
                                 <td><?php echo $row['house_no']; ?></td>
                                 <td><?php echo $row['block']; ?></td>
                                 <td><?php echo $row['no_bed']; ?></td>
                                 <td><?php echo $row['no_bath']; ?></td>
                                 <td><?php echo $row['furnished']; ?></td>
                                 <td><?php 
                                               if (is_numeric($row['city'])) {
                                                    echo get_city_name($row['city']);
                                                } else {
                                                     echo $row['city'];
                                                } ?></td>
                                               <td><?php
                                               if (is_numeric($row['city_area'])) {
                                                    echo get_area_name($row['city_area']);
                                                } else {
                                                     echo $row['city_area'];
                                                }
                                                  ?></td>              
                                 <td><?php echo $row['app_present_address']; ?></td>              
                                 <td><?php echo $row['ptcl']; ?></td>              
                                 <td><?php echo $row['office_address']; ?></td>
                                 <td><?php echo $row['app_name']; ?></td>
                                 <td><?php echo $row['email']; ?></td>  
                                 <td><?php echo $row['mobile']; ?></td>
                                 <td><?php echo $row['comments']; ?></td>            
                                 <td><a href="../full_image.php?user_id=<?php echo $row['user_id'] ?>"><img src="../uploads/<?php if($picture) echo $picture[0]; else echo $row['pic']; ?>" height="50" width="50"></a></td>            				 <td><?php echo $row['status']; ?></td>
                                 <td>
                 <a href="editProperties?user_id=<?php echo $row['user_id'] ?>" title="Edit"><img src="../images/pencil.png" alt="Edit" /></a>
                 <a href="<?php echo 'welcome?action=delete_p&user_id='.$row['user_id']; ?>" title="Delete" onClick="return confirm('Are you sure you want to delete ?');"><img src="../images/cross.png" alt="Delete" /></a>
                 
             </td>
                            </tr>
                            <?php
                            $count++;
                        }
                        ?>
                    </tbody>
                </table>
            </div> <!-- End #tab1 -->
            <div class="tab-content" id="tab2">
                <h1>Your Marriage Add's</h1>
                <table class="responsive table table-striped table-bordered table-hover" id="dataTables-example" >
                    <thead>
                        <tr>    
                           <th width="29" align="center">Token</a></th>
                           <th width="120">Profile Created for</th>
                           <th width="120">Gender</th>
                           <th width="120">Name of Candidate</th>
                           <th width="120">Marital Status</th>
                           <th width="120">Contact Number</th>
                           <th width="120">Religion</th>
                           <th width="120">Ethnic group</th>
                           <th width="120">Mother Tongue </th>
                           <th width="120">Complexion </th>
                           <th width="120">Height</th>
                           <th width="120">Age</th>
                           <th width="120">Education</th>
                           <th width="120">Profession</th>
                           <th width="120">Nature of Work</th>
                           <th width="120">Salary</th>
                           <th width="120">overseas</th>
                           <th width="120">partner Abroad </th>
                           <th width="120">Present Address  </th>
                           <th width="120">Country </th>
                           <th width="120">City </th>
                           <th width="120">Area </th>
                           <th width="120">Describe yourself </th>
                           <th width="120">Expecteations </th>
                           <th width="120">Payment Method</th>
                           <th width="120">Payment Amount</th>
                           <th width="120">Payment Date</th>
                           <th width="120">Posted Date/Time</th>
                           <th width="120">Guardian Name</th>
                           <th width="120">Guardian Mobile No</th>
                           <th width="120">Email Address</th>
                           <th width="120">Pics</th>
                           <th width="120">Status</th>
                           <th width="120">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query="select * from marriages WHERE `mobile`='$user_check'";
                        $count = 1;
                        $select_result=mysql_query($select_query);
                        while($row=mysql_fetch_array($select_result,MYSQL_ASSOC))
                        {
                            ?>
                            <tr>
                                               <td align="center"><?php echo $row['user_id']; ?></td>
                                               <td><?php echo $row['profile_for'];  ?></td>
                                               <td><?php echo $row['gender']; ?></td>
                                               <td><?php echo $row['name']; ?></td>
                                               <td><?php echo $row['marital_status']; ?></td>
                                               <td><?php echo $row['contact_no']; ?></td>
                                               <td><?php echo $row['religion']; ?></td>
                                               <td><?php echo $row['ethnic_group']; ?></td>
                                               <td><?php echo $row['mother_tounge']; ?></td>
                                               <td><?php echo $row['complexion']; ?></td>
                                               <td><?php echo $row['height']; ?></td>
                                               <td><?php echo $row['age']; ?></td>
                                               <td><?php echo $row['education']; ?></td>
                                               <td><?php echo $row['profession']; ?></td>
                                               <td><?php echo $row['nature_work']; ?></td>
                                               <td><?php echo number_format($row['salary']); ?></td>
                                               <td><?php echo $row['prefer_overseas']; ?></td>
                                               <td><?php echo $row['partner_abroad']; ?></td>
                                               <td><?php echo $row['present_addres']; ?></td>
                                               <td><?php 
                                               if (is_numeric($row['country'])) {
                                                    echo get_country_name($row['country']);
                                                } else {
                                                     echo $row['country'];
                                                } ?></td>
                                               <td><?php 
                                               if (is_numeric($row['city'])) {
                                                    echo get_city_name($row['city']);
                                                } else {
                                                     echo $row['city'];
                                                } ?></td>
                                               <td><?php
                                               if (is_numeric($row['area'])) {
                                                    echo get_area_name($row['area']);
                                                } else {
                                                     echo $row['area'];
                                                }
                                                  ?></td>
                                               <td><?php echo $row['describe_yourself']; ?></td>
                                               <td><?php echo $row['expecteations']; ?></td>
                                               <td><?php echo $row['paymentMethod']; ?></td>
                                               <td><?php echo $row['payment_amount']; ?></td>
                                               <td><?php echo $row['payment_date']; ?></td>
                                               <td><?php echo $row['dateandtime']; ?></td>
                                               <td><?php echo $row['gname']; ?></td>
                                               <td><?php echo $row['mobile']; ?></td>
                                               <td><?php echo $row['email']; ?></td>
                                               <td><img src="../uploads/<?php echo $row['pics']; ?>" height="50" width="50"></td>
                                          <td><?php echo $row['status']; ?></td>
            <td>
                 <a href="editMarriage?user_id=<?php echo $row['user_id'].'&token='.time(); ?>" title="Edit"><img src="../images/pencil.png" alt="Edit" /></a>
                 <a href="<?php echo 'welcome?action=delete_m&user_id='.$row['user_id']; ?>" title="Delete" onClick="return confirm('Are you sure you want to delete ?');"><img src="../images/cross.png" alt="Delete" /></a>
             </td>
                            </tr>
                            <?php
                            $count++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    	</div>   
    </div>
  </div>
</div>
</body>
</html>
