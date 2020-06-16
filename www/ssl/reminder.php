<?php
    $EMAILS = exec("cat /var/www/ssl/emails.csv");
    $DOMAIN = exec("cat /var/www/ssl/domain");
    $WARNING_DAYS = 7;
    $EXPIRY = exec("/var/www/ssl/expiry.sh");
    $EXPIRY_TIMESTAMP = strtotime($EXPIRY);
    $NOW_TIMESTAMP = time();
    $EXPIRING_IN /*DAYS*/ = floor(($EXPIRY_TIMESTAMP - $NOW_TIMESTAMP) / (60 * 60 * 24 ));
    $DAYS_TILL_WARNING = $EXPIRING_IN - $WARNING_DAYS;

    if($EXPIRING_IN <= $WARNING_DAYS){
        $SSL_WARNING = "URGENT! $DOMAIN ssl certificate about to expire in $EXPIRING_IN days\n";
        echo $SSL_WARNING;
        mail($EMAILS, $SSL_WARNING, $SSL_WARNING,"FROM: SSL Alerts <alert@ijtaba.me.uk>\r\nImportance: High\r\n");
    }
    else {
        echo "Certificate for $DOMAIN is valid for another $EXPIRING_IN days, warnings will be mailed to $EMAILS in $DAYS_TILL_WARNING days\n";
    }
?>
