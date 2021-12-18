<?php
	if(isset($_POST['submit']))
	{
		$user_account_email=$_POST['user_account_email'];
		$user_account_password=$_POST['user_account_password'];
		$user_query="select * from users where user_account_email='$user_account_email'and user_account_password='$user_account_password'";
		$user_result=mysql_query($user_query);
		$user_row=mysql_fetch_array($user_result);
		$user_id=$user_row['user_id'];
		$num_user=mysql_num_rows($user_result);
		if($num_user==1)
			{
				$_SESSION['success']="Successfully Logged In";
				$_SESSION['submit']="submit";
				$_SESSION['user_id']=$user_id;
				$product_detail_query="select * from cart where user_id='$user_id' OR session_id ='$sessid' and order_id='0'  order by cart_id DESC";
				$product_detail_result=mysql_query($product_detail_query);
				if(mysql_num_rows($product_detail_result) > 0){
				?>
			  <script>
				 location.href="./";
			 </script>
			<?php
			
			}
			else
			{?>
			<script>
				 location.href="./";
			 </script>
			 <?php	}
			}
			else{
				$_SESSION['fail']="Invalid User Name or Password";
			}
	}
	?>
<div class="login_inner">
<form name="user_account" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">
<?php
if(isset($_SESSION['fail']))
{
 echo $_SESSION['fail'];
	unset($_SESSION['fail']);
}elseif(isset($_SESSION['success']))
{
	echo $_SESSION['success'];
}else{
}
?>
    <label>User name</label><br />
    <input type="text" name="user_account_email" value="" /><br />
    <label>Password</label><br />
    <input type="password" name="user_account_password" value="" /><br />
    <input name="submit" type="submit" value="submit" class="login_button" />
</form>
    <div class="section_login">
        <a href="#">
            Forgot your password?
        </a>
    </div>
</div>