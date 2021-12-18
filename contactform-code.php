<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_ajax.js'></script>
<script type='text/javascript' src='scripts/fg_moveable_popup.js'></script>
<script type='text/javascript' src='scripts/fg_form_submitter.js'></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/new.js" type="text/javascript"></script>
<script src="js/gotoclub.js" type="text/javascript"></script>



<div id='fg_formContainer' style="width:500px; height:260px;  opacity:0.95">
    <div id="fg_container_header">
        <div id="fg_box_Title" style="width:369px;">Please Sign Up to enter Quick man Club</div>
        <div id="fg_box_Close"><a href="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">Close(X)</a></div>
    </div>

    <div id="fg_form_InnerContainer">
    <form id='contactus' action='#' method='post' accept-charset='UTF-8'>

    <div class='short_explanation'>* All Fields are required</div>
    <div id='fg_server_errors' class='error'></div>
    <div class='container'>
        <input type='text'  style=" background: url(images/name.png) top left no-repeat; background-size:30px;
		padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;" 
		name='name' id='name' value='Name' onblur="if(value==''){value='Name'}" onfocus="if(value== 'Name'){value = ''}"  maxlength="50" /><br/></i>
        <span id='contactus_name_errorloc' class='error'></span>
    </div>
    <div class='container'>
        <input type='text'  style=" background: url(images/email.jpg) top left no-repeat; background-size:30px; 
		padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;"  
		name='email' id='email' value='Email' onblur="if(value==''){value='Email'}" onfocus="if(value== 'Email'){value = ''}"  maxlength="50" /><br/></i>
        
		<span id='contactus_email_errorloc' class='error'></span>
    </div>
    <div class='container'>
        <input type='text'  style=" background: url(images/phone.jpg) top left no-repeat; background-size:30px; padding: 0px 5px 0px 37px; height:40px; border:none; border-bottom: 1px solid #000;"  name='phone' id='phone' value='Phone' onblur="if(value==''){value='Phone'}" onfocus="if(value== 'Phone'){value = ''}"  maxlength="50" /><br/></i>
        
		<span id='contactus_email_errorloc' class='error'></span>
    </div>
    

    </form>
	    <div class='container' style="margin-left: 342px; ">
			<button type='button' name='gotoclub' value='Enter' style="background-color: #00A500; color: #fff;" >Enter</Button>
		</div>
    </div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->


<div id='fg_backgroundpopup'></div>

