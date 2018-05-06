#!/bin/nash
YEAR=`date +%Y`
MONTH=`date +%m`
DAY=`date +%d`
HOUR=`date + %H`
mkdir -p $YEAR/$MONTH/$DAY/$HOUR
sudo mysqldump -uroot -p it63518 > $YEAR/$MONTH/$DAY/$HOUR/incrementalBackup.sql


