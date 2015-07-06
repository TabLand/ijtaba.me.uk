<?php
    function whats_my_name() {
        if(isset($_GET['name'])) $my_name = $_GET['name']; 
        elseif(isset($_SERVER['HTTP_REFERER'])) $my_name = $_SERVER['HTTP_REFERER'];
        else $my_name = "Ijtaba";

       $my_name = preg_replace("/https?:\/\//", "",$my_name);
       $my_name = preg_replace("/\.tk/", "",$my_name);
       $matches = array();
       $my_name = preg_match("/[A-Za-z]+/",$my_name,$matches);

       if(count($matches)==1) {
            $my_name = ucfirst($matches[0]);
            return $my_name;
       }
       else{
            return "Ijtaba";
       }
    }
?>
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
		From here you can <a href="dine_me.html">Dine Me </a><br>
		Or <a href="rob">Rob Me</a><br>
		Or <a href="last_sighting/">Kidnap Me</a><br>
		Or <a href="hire_me/">Enslave Me</a><br>
		Or link me on <a href="linkedin/">LinkedIn</a><br>
		I can be reached on the email <a href="email"><?php echo whats_my_name();?>hussain@live.com</a><br>
		You can <a href="call">call</a> or <a href="sms">text</a> me on my mobile number <a href="call_me_maybe">(0044) 07876363428</a><br>
	</body>
</html>
