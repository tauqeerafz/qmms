<?php
//send e-mail
 $sender = "qmmspk@gmail.com";// 
 $Subject = "notification";//$_POST['subject'];
 $to = "tauqeerafz@gmail.com";//$_POST["email"];//'tauqeerafz@gmail.com';  
	$EmailBody="<table  cellpadding=5 width=800>";
	$EmailBody=$EmailBody . "<tr height=30>";
	$EmailBody=$EmailBody . "<th  align=center bgColor=#000000 style=color:#FFFFFF><b>Welcome To Quick Man Marriage Services </th>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td></td>";$EmailBody=$EmailBody . "</tr>";
	$EmailBody=$EmailBody . "<tr>";
	$EmailBody=$EmailBody . "<td><b>Dear MR/Mam , AOA</b>
	<p>Thanks for choosing Quick Marriage Service Which is Pakistan No.1 Website  and this Service designed to help especially Educated class.<br>Please Follow Steps.</p>
	<p>1) You have already Filled Up the Form</p>
	<p>2) Pay Registration Fee Rs.3000/-Deposit in our MCB Bank DHA T Block Branch Lahore A/c 0753695181004375 (Quick Man Multi Services) Online through Cash or by ATM/Internet Banking/Credit Card funds Transfer.</p>
	<p>3) Call at 042-37816077-9 and inform about your payment  for cross verification.</p>
	<p>4) You receive a call from our office for verification of detail.</p>
	<p>5) Choose Proposal ID Numbers that suits you & your family for visit and get their contact Numbers from our office against these IDs.</p>
	<p>Yes ! We charge but claim to save your money and your precious time so Lets Register Yourself immediately.</p>
	<p>For Any Further Query Please call us at Our Help Line PTCL No. 042-37186077-9. or email at info@qmmspk.com</p>
	<p>God Bless You and Your Families .</p></td>";
	$EmailBody=$EmailBody . "</tr>";
	$mail=mail($to, $Subject, $EmailBody, "From: <$sender>\nReply-To: $sender\nContent-Type: text/html; charset=UTF-8");


?>