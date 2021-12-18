<?php
include("../connections/connection.php");
include'../includes/library.php';
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>User Panel</title>
<script>
 $(document).ready(function() {
    //for registration ajax
			$('body').on('submit', '#formrgister', function(){

				
				if($('#pwd1').val() != $('#pwd2').val())
				{
					alert('Passwords do not match.');
					return false;
				}
				
				var $this = $(this);                    // It's a good to cache stuff
				$('.preloader').show();
				
				$('#message_div').removeClass('alert-success')
				$('#message_div').removeClass('alert-danger')
				
				$.ajax({
					data: $this.serialize(),
					type: $this.attr('method'),         // You want `method` here
					url: 'register.php', // Dunno why you used `attr`
					success: function(response) {
						
						$('.preloader').hide();
						$('#message_div').addClass('alert-success')
						$('#message_div .message').html(response);
						$('#message_div').show();
						
					},
					error: function(response) {
						$('.preloader').hide();
						$('#message_div').addClass('alert-danger')
						$('#message_div .message').html(response);
						$('#message_div').show();
					}
				});
			
				return false;
			});
			
});

</script>
</head>
<body>
<div class="container">
<?php
session_start();

//if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['Login']))
{
	
// username and password sent from form 

$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);


$sql="SELECT memeber_id FROM  `quick_man` WHERE memeber_id='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcome.php");
}
else 
{ ?>
<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger !</strong> Your Login Name or Password is invalid.</div>
<?php }
}
?>


  <div class="preloader"> <img src="../img/loading.gif"> </div>
  <div class="alert" id="message_div" style="display:none"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Note!</strong>
    <div class="message"></div>
  </div>
  <div align="center">
    <div class="login_panel">
      <div class="userlogin"><b>User Login</b></div>
      <div class="form-group">
        <form class="form-inline" role="form" action="" method="post">
          <div class="form-group">
            <label for="usr">User ID:</label>
            <input type="text" name="username" class="form-control" id="usr" placeholder="Your Mobile no">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Your Password">
          </div>
          <!--<div class="checkbox form-group">
                        <label><input type="checkbox"> Remember me</label>
                      </div>-->
          <div class="form-group">
            <button type="submit" value="Login" name="Login" class="btn btn-success ">Login</button>

            <button type="button" value="Cancle" onClick="location.href='../index.php'"  class="btn btn-danger ">Cancle</button>
          </div>
        </form>
      </div>
      <div class="register_heading"><b>Register New User</b></div>
      <div class="form-group">
        <form class="form-horizontal" id="formrgister" action="#" method="post">
          <div class="form-group">
            <label for="usr" class="control-label col-sm-2">Enter Your Name:</label>
            <input type="text" name="name" required class="form-control" id="usr" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label for="email"  class="control-label col-sm-2">Enter Your E-mail:</label>
            <input type="email" name="email" required class="form-control" id="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <label for="usr"  class="control-label col-sm-2">Enter Your Mobile #</label>
            <input type="text" name="mobile" required class="form-control" id="usr" placeholder="Your Mobile no (Which will be your user id)">
          </div>
          <div class="form-group">
            <label for="pwd"  class="control-label col-sm-2">Enter Any Password:</label>
            <input type="password" name="password" required class="form-control" id="pwd1" placeholder="Enter Password (For login)">
          </div>
          <div class="form-group">
            <label for="pwd"  class="control-label col-sm-2">Confirm Password:</label>
            <input type="password" name="confirm_password" required class="form-control" id="pwd2" placeholder="Re-enter the password">
          </div>
          <!--<div class="checkbox form-group">
                        <label><input type="checkbox"> Remember me</label>
                      </div>-->
          <div class="form-group">
            <button type="submit" value="Register" name="Register" class="btn btn-success pull-right">Register</button>
          </div>
        </form>
        <p class="text-danger lead">Your Mobile no will be your User-ID</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>