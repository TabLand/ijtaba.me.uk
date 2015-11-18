<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<title>Borrow Ijtaba's Car</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="rent.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick-theme.css"/>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#photos').slick({
                        autoplay:       true,
                        autoplaySpeed:  2000,
                    });
                }                
            );
            function update_prices(){
                
            }
        </script>
	</head>
	<body id="body-override">
        <div id="frame">
            <div id="photos">
                <img class="photo" src="photos/1.jpeg"/>
                <img class="photo" src="photos/2.jpeg"/>
                <img class="photo" src="photos/3.jpeg"/>
                <img class="photo" src="photos/4.jpeg"/>
                <img class="photo" src="photos/5.jpeg"/>
                <img class="photo" src="photos/6.jpeg"/>
                <img class="photo" src="photos/7.jpeg"/>
                <img class="photo" src="photos/8.jpeg"/>
                <img class="photo" src="photos/9.jpeg"/>
                <img class="photo" src="photos/10.jpeg"/>
                <img class="photo" src="photos/11.jpeg"/>
                <img class="photo" src="photos/12.jpeg"/>
                <img class="photo" src="photos/13.jpeg"/>
                <img class="photo" src="photos/14.jpeg"/>
            </div>
            <br><!-- Google Code for Pixo Drivejoy Conversion Page
            In your html page, add the snippet and call
            goog_report_conversion when someone clicks on the
            chosen link or button. -->
            <a class="anchor-override" href="drivejoy" onclick="javascript:goog_report_conversion()">
                Click here to rent and insure my car through <br>
                <img src="//www.drivejoy.co.uk/assets/images/logo-white.png" alt="drivejoy BETA" title="drivejoy BETA"/><br>
                Prices from:<br>
                <div id="prices"><?php require 'pricing'; ?></div>
            </a>

        </div>
        <script type="text/javascript">
            /* <![CDATA[ */
            goog_snippet_vars = function() {
                var w = window;
                w.google_conversion_id = 944135755;
                w.google_conversion_label = "03dFCOPa52AQy7yZwgM";
                w.google_remarketing_only = false;
                w.google_conversion_value = 1;
            }
                // DO NOT CHANGE THE CODE BELOW.
            goog_report_conversion = function(url) {
                goog_snippet_vars();
                window.google_conversion_format = "3";
                window.google_is_call = true;
                var opt = new Object();
                opt.onload_callback = function() {
                    if (typeof(url) != 'undefined') {
                        window.location = url;
                    }
                }
                var conv_handler = window['google_trackConversion'];
                if (typeof(conv_handler) == 'function') {
                    conv_handler(opt);
                }
            }
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="//www.googleadservices.com/pagead/conversion_async.js">
        </script>
	</body>
</html>
