<!DOCTYPE html>

<html>
<head>

<?php include "includes/innerheader.php";
$id = $_GET['id'];?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>


</head>
<body>
    <div id="inner_container" class="col-lg-12">

<div class="inner_contant col-lg-12 thanks">



<h1  style="margin-left:210px;">Thank You for posting your property Ad.<br> Your Token id is <?php echo $id;?></h1>
<h3 style="margin-right:31px;">Note. Your Ad will be published after approval for property online Table very soon.</h3>
<a href="index.php"><button  style="margin-right: 350px;" id="submit_btn3" type="submit" name="submit" class="btn btn-primary">Go Back</button>    </a>     
			

                            </div>

                          </div>                  

<?php include "includes/footer.php";?>


</body>
</html>