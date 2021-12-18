<?php
include('../connections/connection.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select memeberName from `quick_man` where memeber_id='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['memeberName'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>