<?php  include "connections/connection.php"; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A Social ServicesvPortal Online Cheep Properties, Online Marriage Services, Online Ticketing Travel, Online Money FCY Exchange, Social/Multimedia Marketting, Web Development Services Head Office Defence Lahore">
<meta name="author" content="">
<title>QMMS</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/qmms.css" rel="stylesheet">
<link href="dist/css/datatable.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62787859-1', 'auto');
  ga('send', 'pageview');

</script>
	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script> 
    <script src="js/new.js" type="text/javascript"></script> 
</head><body>
<div class="inner_header_bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="logo" class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="index.php"><img class="img-responsive" src="images/logo.jpg" alt="QMMS"></a> </div>
        <div id="top_contact" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <ul>
            <li>+92-333-4565662</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="search_bar">
            <input id="search_bar" name="" type="text" placeholder="Search here...">
            <input id="search_btn" name="" type="button" value="GO">
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="index.php">Home</a></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Management</a>
                <ul class="dropdown-menu">
                  <li><a href="aboutqmms.php">About QMMS</a></li>
                  <li><a href="aboutseo.php">About CEO</a></li>
                  <li><a href="directors.php">Project Directors</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">QMMS Services</a>
                <ul class="dropdown-menu">
                  <li><a href="pandrs.php">Properties & Real Estate Consultants</a></li>
                  <li><a href="shadi.php">Marriage Consultants</a></li>
                  <li><a href="advertising.php">Marketing & Advertising</a></li>
                  <li><a href="exchange.php">Currency Exchange Services</a></li>
                  <li><a href="energies.php">Energies</a></li>
                  <li><a href="training.php">Recruitment & Training Services</a></li>
                  <li><a href="software.php">Software-Web Developers</a></li>
                </ul>
              </li>
              <li>
              	<?php if (isset($_SESSION['login_user']) && $_SESSION['login_user'] == true) { ?>
                    <a href="login/welcome.php">MemberShip-Login</a> 
                <?php	
                } else { ?>
                    <a href="login/login.php">MemberShip-Login</a>
                    <?php 
                } ?>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="main_contant">
<div class="container">
<div class="row col-lg-12">
  <div class="menU-area">
    <div id="show">&nbsp;</div>
    <div id="visible">
      <div id="menu">
        <ul>
          <li><a href="prodetails.php">Real estate</a></li>
          <li><a href="marriage.php">Marriage consultants</a></li>
          <li><a href="marketingform.php">Advertising</a></li>
          <li><a href="exchange.php">Currency Exchange</a></li>
          <li><a href="energiesform.php">Alternative energies</a></li>
          <li><a href="jobform.php">Recruitment & Training</a></li>
          <li><a href="software.php">Software-web developers</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Developed by Tauqeer Afzal 03344684725,03244684725 -->