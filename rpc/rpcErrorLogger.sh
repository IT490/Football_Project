#!/bin/bash

timestamp=$(date +%m-%d-%Y)

while true;
do
	/usr/bin/php -f	/var/www/demo/rpc/rpcLogger.php	'app.error' 'error-logs' >> /var/www/demo/rpc/errorLogs/"LoggerError.$timestamp.log"
done