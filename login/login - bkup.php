<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="">

<meta name="author" content="">

<title>User Panel</title>

<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/qmms.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<?php
include("../connections/connection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
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
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcome.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>


<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
label
{
font-weight:bold;
width:100px;
font-size:14px;
}
.box
{
border:#666666 solid 1px;
}
</style>
</head>
<body bgcolor="#FFFFFF">
<div align="center">
<div style="width:600px; border: solid 1px #333333; " align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>User Login</b></div>


<div style="margin:30px" class="form-group">

<form action="" method="post" class="form-horizontal" role="form">
<label for="usr">UserName  :</label><input type="text" name="username" class="form-control" id="usr"/><br /><br />
<label for="pwd">Password  :</label><input type="password" name="password" class="form-control" id="pwd" /><br/><br />
<input type="submit" value="Login" class="btn-primary pull-left"/>
<input type="button" value="cancle" class="btn-info pull-right" onClick="location.href='../index.php'"/><br />
</form>

<div class="alert-danger"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html>
