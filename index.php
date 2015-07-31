<?php require "name.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title><?php echo whats_my_name();?> Hussain's Personal Webpages</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		Hello, and welcome to <?php echo whats_my_name();?> Hussain's personal webpages.<br>
		Here is my Realtime <a href="calendar/">Schedule</a><br>
		From here you can <a href="dine_me/">Dine Me </a><br>
		Or <a href="last_sighting/">Locate Me</a><br>
		Or <a href="hire_me/">Hire Me</a><br>
		Or link me on <a href="linkedin/">LinkedIn</a><br>
		I can be reached on the email <a href="email"><?php echo lcfirst(whats_my_name());?>hussain@live.com</a><br>
		You can <a href="call">call</a> or <a href="sms">text</a> me on my mobile number <a href="call_me_maybe">(0044) 07876363428</a><br>
	</body>
</html>
