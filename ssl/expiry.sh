#!/bin/bash
CERT=$(echo "" | openssl s_client -connect ijtaba.me.uk:443 2>/dev/null  | openssl x509 -text -noout)
EXPIRY=$(echo "$CERT" | grep "Not After" | sed 's/.*Not After : //g')
echo $EXPIRY
