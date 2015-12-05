<?php 
    $WARNING_DAYS = 7;
    $EXPIRY = exec("/var/www/ssl/expiry.sh");
    $EXPIRY_TIMESTAMP = strtotime($EXPIRY);
    $NOW_TIMESTAMP = time();
    $EXPIRING_IN /*DAYS*/ = floor(($EXPIRY_TIMESTAMP - $NOW_TIMESTAMP) / (60 * 60 * 24 ));
    $DAYS_TILL_WARNING = $EXPIRING_IN - $WARNING_DAYS;

    if($EXPIRING_IN <= $WARNING_DAYS){
        $SSL_WARNING = "URGENT! ijtaba.me.uk ssl certificate about to expire in $EXPIRING_IN days\n";
        echo $SSL_WARNING;
        mail("ijtabahussain@live.com", $SSL_WARNING, $SSL_WARNING,"FROM:ssl@ijtaba.me.uk\r\nImportance: High\r\n");
    }
    else {
        echo "Certificate is valid for another $EXPIRING_IN days, warnings will be mailed in $DAYS_TILL_WARNING days\n";
    }
?>
