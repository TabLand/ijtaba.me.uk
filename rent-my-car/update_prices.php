<?php 
    require "simple_html_dom.php";
    $project_root = "/var/www/rent-my-car";
    exec("/usr/bin/phantomjs --ssl-protocol=any $project_root/prices.js", $result);
    $drivejoy = implode($result);
    file_put_contents("$project_root/drivejoy_dump",$drivejoy);

    $html = file_get_html("$project_root/drivejoy_dump");

    $day_price   = $html->find('div.day   div', 0)->plaintext;
    $week_price  = $html->find('div.week  div', 0)->plaintext;
    $month_price = $html->find('div.month div', 0)->plaintext;

    $pricing = "$day_price/day, $week_price/week, $month_price/month";
    file_put_contents("$project_root/pricing",$pricing);
?>
