#!/bin/bash
APACHE_PID=$(ps kstart_time -ef | grep apache2 | head -1 | awk '{print $2}')
START_TIMESTAMP=$(ls -ld --time-style="+%s" /proc/$APACHE_PID | awk '{print $6}')
APACHE_UPTIME=$(($(date +%s)-$START_TIMESTAMP))
echo $APACHE_UPTIME
