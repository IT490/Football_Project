#!/bin/bash

timestamp=$(date +%m-%d-%Y)

while true;
do
	/usr/bin/php -f /var/www/demo/rpc/rpcLogger.php 'app.info' 'info-logs' >>/var/www/demo/rpc/infoLogs/"LoggerInfo.$timestamp.log"
done
