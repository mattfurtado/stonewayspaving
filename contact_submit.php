<html>
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
	width = 350;
	height = 200;
	wleft = (screen.width - width) / 2;
	wtop = (screen.height - height) / 2;
	window.resizeTo(width,height);
	window.moveTo(wleft,wtop);
	window.menubar.visible=false;
	window.toolbar.visible=false;
	window.locationbar.visible=false;
	window.personalbar.visible=false;
	window.scrollbars.visible=false;
	window.statusbar.visible=false;
</script>

<style type="text/css" media="all">
body
{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
	background: #FFF;
}
</style>
</head>
<body>
<?php
	$username = $_POST['username'];	#assign value
	$useraddr = $_POST['useraddr'];	#assign value
	$userphone = $_POST['userphone']; #assign value
	$subject = $_POST['subject'];	#assign value
	$comments = $_POST['comments'];	#assignvalue
	
	if (!$useraddr and !$userphone) {
		echo ("<b>ERROR:</b> No contact information was provided. Please include either your e-mail address or phone number, that way we can contact you as soon as possible.");
	}
	else {
		$to = "charper42368@yahoo.com";	#recipient
		$re = $subject;	#subject
		$msg = "From: $username\nPhone: $userphone\n\n$comments";	#message
		$headers .= "From: $useraddr \r\n";	#from
		mail($to,$re,$msg,$headers);
		
		echo ("Thank you for your interest in Stoneways Paving!<br>A representative will get back to you as soon as possible.<br><br>Message received from <b>");
		echo ($username);
		echo ("</b><br>Reply to <b>");
		echo ($useraddr);
		echo ("</b>");
	}
?>
</body>
</html>
