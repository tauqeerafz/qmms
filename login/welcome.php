<?php
include "../includes/getnames.php";
include('lock.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>User Panel</title>
    <?php include'../includes/library.php';?>
	</head>

	<body>
    <div class="container">
      <div class="preloader" style="display:none;"> <img src="../img/loading.gif"> </div>
      <div class="alert" id="message_div" style="display:none"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Note!</strong>
        <div class="message"></div>
      </div>
      <?php
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$change_password=addslashes($_POST['change_password']);
	$new_password=addslashes($_POST['new_password']);
	$verify_password=addslashes($_POST['verify_password']);
if($verify_password != $new_password){?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Password not Mached Try Again. </div>
      <?php } else {
//Get current date and insert into table

$sql="SELECT memeber_id FROM `quick_man` WHERE memeber_id='$userid' AND password='$change_password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0)
{ $q="UPDATE `quick_man` SET password = '$new_password' WHERE memeber_id='$userid' AND password='$change_password'";
	@mysql_query($q) or die(mysql_error());
	{?>
      <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong>Password have been changed Successfully. </div>
      <?php } }
	else{ ?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Change Password. </div>
      <?php }
} }
if($_GET['updateproperty'])
		{
			?>
      <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Property Updated . </div>
      <?php
		}
		else if(!updateproperty)
		{
			?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Update Property. </div>
      <?php
		}
if($_GET['updateperposal'])
		{
			?>
      <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Perposal Updated . </div>
      <?php
		}
		else if(!updateperposal)
		{
			?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Update Perposal. </div>
      <?php
		}
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
      <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Proposal Deleted  . </div>
      <?php
		}
		else
		{
			?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Delete Proposal </div>
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
      <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Property Deleted . </div>
      <?php
		}
		else
		{
			?>
      <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Delete Property. </div>
      <?php
		}
	}


if($_POST['user_edit_submit'])
	{
		$user_id=$_SESSION['login_user'];
                extract($_REQUEST);
		$update_user_query="update `quick_man` set dateandtime='".date('y\-m\-d')."', memeberName='$user_name', memeber_id='$user_id', memeber_email='$user_email',password='$user_password' where memeber_id='$user_id'";
		$update_user_result=mysql_query($update_user_query);
		if($update_user_result)
		{
			?>
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> User Updated !. </div>
			<?php	
		}
		else
		{
			?>
            <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> Failed to Update User ! . </div><?php
		}
	}

if(isset($_POST['edit_check']))
	{
		$user_id=$_SESSION['login_user'];
        extract($_REQUEST);
        $sql="SELECT * FROM `quick_man` WHERE memeber_id='$user_id'";
		$result=mysql_query($sql);
		$row = mysql_fetch_array($result);
		$active_limit = $row['active_adds'];
		$update_value = $_POST['edit_check'];
		$posted_add = count($_POST['edit_check']);
		if($posted_add > $active_limit){
			?>
            <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Limit Exceeded !</strong>Reduce the No of Active Adds. </div><?php
		}
		else{
		$in_id = "('" . implode( "','", $update_value ) . "');" ;
		$all_result = mysql_query("UPDATE `properties` SET `active_add` =  1 WHERE `user_id` IN $in_id");
		?>
        <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Avtive List Updated !. </div>
		<?php
		}
		//print_r($active_limit);
		//print_r(count($_POST['edit_check']);
		//die();        
	}
	?>
   <div class="panel panel-default">
        <div class="panel-body">   <div class="row">
        <div class="col-lg-6">
          <h2>Welcome <?php echo $login_session; ?></h2>
        </div>
        <div class="col-lg-6">
          <h2 class="right"><a class="btn-lg btn-warning" href="logout.php">Logout</a></h2>
        </div>
      </div>
      
          <div class="row">
            <div class="col-lg-6"><h2> <a href="../property_form.php" class="btn-lg btn-success" role="button">Post Property Add</a></h2> </div>
          <!--  <div class="col-lg-6"><h2 class="right"><a href="../marriage.php" class="btn-lg btn-danger" role="button">Apply for Marriage</a></h2> </div>-->
          </div>
        </div>
      </div>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">
            <h4 class="panel-title">Change Password</h4>
            </a> </div>
          <div id="collapse0" class="panel-collapse collapse">
            <div class="panel-body">
              <form class="form-horizontal" role="form"  id="change_Pass" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="userid">User ID:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="userid" name="userid" placeholder="Enter User-ID (Mobile no)">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Last Password:</label>
                  <div class="col-sm-10">
                    <input class="form-control" required  type="password" id="change_password" name="change_password" placeholder="Last Remember Password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">New Password:</label>
                  <div class="col-sm-10">
                    <input type="password" required  id="new_password" name="new_password" class="form-control" placeholder="Enter New password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Re-Enter Password:</label>
                  <div class="col-sm-10">
                    <input type="password" required  id="verify_password" name="verify_password" class="form-control" placeholder="Confirm password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Remember me </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--user profile-->
        <div class="panel panel-default">
          <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            <h4 class="panel-title">Change Profile</h4>
            </a> </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
            <?php
			$user_id=$_SESSION['login_user'];
			$user_query="SELECT * FROM `quick_man` WHERE `memeber_id` ='$user_id'";
			$user_result=mysql_query($user_query);
			$user_row=mysql_fetch_array($user_result,MYSQL_ASSOC);
			?>
              <form class="form-horizontal" name="user_edit" role="form"  id="change_Pass" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="userid">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" name="user_name" placeholder="Enter your Name" value="<?php echo stripslashes($user_row['memeberName']); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Member ID:</label>
                  <div class="col-sm-10">
                    <input class="form-control" required  type="text" name="user_id"  value="<?php echo stripslashes($user_row['memeber_id']); ?>" placeholder="Enter User-ID (Mobile no)" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email:</label>
                  <div class="col-sm-10">
                    <input type="text" required  name="user_email" class="form-control" value="<?php echo stripslashes($user_row['memeber_email']); ?>" placeholder="Enter Your Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" required  name="user_password" class="form-control" placeholder="Password" value="<?php echo stripslashes($user_row['password']); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="user_edit_submit" value="user_edit_submit" class="btn btn-success pull-right">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--end here-->
        <div class="panel panel-default">
          <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <h4 class="panel-title">Your Property Add's</h4>
            </a> </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="table-responsive">
              <form action="" method="post" id="selected-form">
                <table class="table table-striped table-bordered table-hover" id="example" >
                  <thead>
                    <tr class="bg-primary">
                      <th align="center">Filters</th>
                      <th>All</th>
                      <!--<th>Applicant Status</th>
                      <th>Category</th>-->
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <!--<th>City</th>
                      -->
                      <!--<th>Present Address</th>
                      <th>PTCL #</th>-->
                      <!--<th>Office Address</th>-->
                     <!-- <th>Applicant Name</th>
                      <th>Email</th>
                      <th>Phone #</th>-->
                      <th>Comments</th> 
                      <th>Owner/Dealer Name</th>
                      <th>Owner/Dealer Mobile</th>
                      <th>Secret Comments</th> 
                      <th>Pics</th>
                      <th>Active</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    <tr>
                      <th align="center">Ad No</a></th>
                      <th>City Area</th>
                      <!--<th>Applicant Status</th>
                      <th>Category</th>-->
                      <th>Type</th>
                      <th>Price Range</th>
                      <th>Area Range</th>
                      <th>House No</th>
                      <th>Block</th>
                      <th>No of Rooms</th>
                      <th>No of Baths</th>
                      <th>Location</th>
                      <!--<th>City</th>
                      -->
                      <!--<th>Present Address</th>
                      <th>PTCL #</th>-->
                      <!--<th>Office Address</th>-->
                     <!-- <th>Applicant Name</th>
                      <th>Email</th>
                      <th>Phone #</th>-->
                      <th>Comments</th>
                      <th>Owner/Dealer Name</th>
                      <th>Owner/Dealer Mobile</th>
                      <th>Secret Comments</th> 
                      <th>Pics</th>
                      <th>
                      	<div class="form-group">
                            <label class="switch switch-primary" data-toggle="tooltip" title="Select All">
                                <input type="checkbox" class="check_all">
                                <span></span>
                            </label>
                     	 </div>
                      </th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $select_query="select * from properties WHERE `mobile`='$user_check' order by user_id desc ";
                        $count = 1;
                        $select_result=mysql_query($select_query);
                        while($row=mysql_fetch_array($select_result,MYSQL_ASSOC))
                        {
                        $picture =json_decode(($row['pic']),true);	?>
                    <tr>
                      <td align="center"><?php echo $row['user_id']; ?></td>
                      <td><?php
                                               if (is_numeric($row['city_area'])) {
                                                    echo get_area_name($row['city_area']);
                                                } else {
                                                     echo $row['city_area'];
                                                }
                                                  ?></td>
                      <?php /*?><td><?php echo $row['app_status'];  ?></td>
                      <td><?php echo $row['category']; ?></td><?php */?>
                      <td><?php echo $row['property_type']; ?></td>
                      <td><?php echo number_format($row['price_range']); ?></td>
                      <td><?php echo $row['area_range']; ?></td>
                      <td><?php echo $row['house_no']; ?></td>
                      <td><?php echo $row['block']; ?></td>
                      <td><?php echo $row['no_bed']; ?></td>
                      <td><?php echo $row['no_bath']; ?></td>
                      <td><?php echo $row['furnished']; ?></td>
                      <td><?php echo $row['comments']; ?></td>
                      <td><?php echo $row['dealer_name']; ?></td>            
                      <td><?php echo $row['dealer_mobile']; ?></td>            
                      <td><?php echo $row['sec_comments']; ?></td> 
                    <?php /*?> <!-- <td><?php 
                                               if (is_numeric($row['city'])) {
                                                    echo get_city_name($row['city']);
                                                } else {
                                                     echo $row['city'];
                                                } ?></td>
                      --
                      <!--<td><?php echo $row['app_present_address']; ?></td>
                      <td><?php echo $row['ptcl']; ?></td>
                      <td><?php echo $row['office_address']; ?></td>
                      <td><?php echo $row['app_name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>-->
                      <td><a data-toggle="modal" data-target="#myModal" href="#"?id=<?php echo $row['id']?>>Detail</a>
                      <!--Trigger the modal with a button Modal -->
       					 <div id="myModal" class=" modal fade" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Property Detail</h4>
              </div>
              <div class="modal-body">
                <p><?php echo $row['comments']; ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div>
                      </td><?php */?>
                      <td><a href="../full_image.php?user_id=<?php echo $row['user_id'] ?>"> <img src="../uploads/<?php if($picture) echo $picture[0]; else echo $row['pic']; ?>" height="50" width="50"></a></td>
                      <td>
                      	<div class="form-group">
	                        <label class="switch switch-primary" data-toggle="tooltip" title="Select">
	                            <input type="checkbox" class="edit_check" value="<?php echo $row['user_id'] ?>" name="edit_check[]">
	                            <span></span>
	                        </label>
                      </td>
                      <td><a href="editProperties.php?user_id=<?php echo $row['user_id'] ?>" title="Edit"><img src="../images/pencil.png" alt="Edit" /></a></td>
                      <td><a href="<?php echo 'welcome.php?action=delete_p&user_id='.$row['user_id']; ?>" title="Delete" onClick="return confirm('Are you sure you want to delete ?');"><img src="../images/cross.png" alt="Delete" /></a></td>
                    </tr>  <?php
                            $count++;
                        }
                        ?>
                  </tbody>                  
                </table>
                <input type="submit" value="Save" class="btn btn-success pull-right"/>
                </form>
              </div>
            </div>
          </div>
        </div>
               
       <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> Your Marriage Add's</a> </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example2" >
                  <thead>
                  	<tr class="bg-primary">
                      <th align="center">Filters</a></th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th>
                      <th>All</th> 
                      <th>Pics</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    <tr>
                      <th align="center">Ad No</th>
                      <th>Profile Created for</th>
                      <th>Gender</th>
                      <th>Name of Candidate</th>
                      <th>Marital Status</th>
                      <th>Contact Number</th>
                      <th>Religion</th>
                      <th>Ethnic group</th>
                      <th>Education</th>
                      <th>Profession</th>
                      <!--<th>Mother Tongue </th>
                      <th>Complexion </th>
                      <th>Height</th>
                      <th>Age</th>
                      <th>Nature of Work</th>
                      <th>Salary</th>
                      <th>overseas</th>..
                      <th>partner Abroad </th>
                      <th>Present Address </th>
                      <th>Country </th>
                      <th>City </th>
                      <th>Area </th>
                      <th>Describe yourself </th>
                      <th>Expecteations </th>
                      <th>Posted Date/Time</th>
                      <th>Guardian Name</th>
                      <th>Guardian Mobile No</th>
                      <th>Email Address</th>
                      <th>Pics</th>
                      <th>Edit</th>
                      <th>Delete</th>
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
                      <td><?php echo $row['education']; ?></td>
                      <td><?php echo $row['profession']; ?></td>
                     <?php /*?> 
                      <td><?php echo $row['mother_tounge']; ?></td>
                      <td><?php echo $row['complexion']; ?></td>
                      <td><?php echo $row['height']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      
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
                      <td><?php echo $row['dateandtime']; ?></td>
                      <td><?php echo $row['gname']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['email']; ?></td><?php */?>
                      <td><img src="../uploads/<?php echo $row['pics']; ?>" height="50" width="50"></td>
                      <td><a href="editMarriage.php?user_id=<?php echo $row['user_id'].'&token='.time(); ?>" title="Edit"><img src="../images/pencil.png" alt="Edit" /></a></td>
                      <td><a href="<?php echo 'welcome.php?action=delete_m&user_id='.$row['user_id']; ?>" title="Delete" onClick="return confirm('Are you sure you want to delete ?');"><img src="../images/cross.png" alt="Delete" /></a></td>
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
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> Your Business Add's</a> </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">Coming Soon.</div>
          </div>
        </div>-->
      </div>
    </div>
</body>
</html>
<!-- jQuery --> 
<script src="../bower_components/jquery/dist/jquery.min.js"></script> 
<!-- DataTables JavaScript --> 
<script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script> 
<!-- Page-Level Demo Scripts - Tables - Use for reference --> 
<script src="../js/jquery.dataTables.columnFilter.js"></script>
<script>
	$(document).ready(function() {		
	$('.check_all').on('click', function () {
        $('.edit_check').prop('checked', this.checked);
    });
		
    var dataTable = $('#example').dataTable({
		"paging":   false,
        "ordering": false,
        "info":     false,
		 "scrollX": true,
		"responsive": true,
    sPaginationType: "full_numbers"
});
  dataTable.columnFilter({
  sPlaceHolder: "head:after",
  aoColumns: [
      null,  
      { type: "select" },        
      { type: "select" },  
      { type: "select" }, 
	  { type: "select" },
	  { type: "select" },
	  { type: "select" },
	  { type: "select" },
	  { type: "select" },
	  { type: "select" }
  ]
});
	 var dataTable = $('#example2').dataTable({
        "scrollX": true,
		"order": [[ 0, "desc" ]]
    } );	
	dataTable.columnFilter({
	  sPlaceHolder: "head:after",
	  aoColumns: [
		  null,  
		  { type: "select" },        
		  { type: "select" },  
		  { type: "select" }, 
		  { type: "select" },
		  { type: "select" },
		  { type: "select" },
		  { type: "select" },
		  { type: "select" },
		  { type: "select" }
	  ]
});
		
});

	</script> 
<!-- Developed by Tauqeer Afzal 03344684725,03244684725 -->