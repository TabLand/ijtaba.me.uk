<?php 
    function show_uptime($type){
        $uptime_in_seconds = exec("./" . $type . "_uptime.sh");
        $years   = floor( $uptime_in_seconds / (60*60*24*365.25));
        $months  = floor(($uptime_in_seconds / (60*60*24*365.25/12)) % 12);
        $days    = floor(($uptime_in_seconds / (60*60*24))% (365.25 /12));
        $hours   = floor(($uptime_in_seconds / (60*60)) % 24);
        $minutes = floor(($uptime_in_seconds / (60)) % 60);
        $seconds = ($uptime_in_seconds % 60);
        echo "$years year(s), $months month(s), $days day(s), $hours hour(s), $minutes minute(s), $seconds second(s)";
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<title>ijtaba.me.uk Uptime Statistics</title>
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
        <div id="index_container">
            Internal uptime (OS) is : <?php show_uptime("os")?><br/>
            Internal uptime (Web Server) is : <?php show_uptime("apache2")?><br/>
        </div>
	</body>
</html>
