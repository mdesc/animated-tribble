#!/bin/sh
NAME=$1;
echo $NAME;

DATE=$2;
echo $DATE;

composer install;

chmod +x test.sh;
./test.sh $NAME $DATE;