#!/bin/bash

kill $(ps aux | grep avvio.sh | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep avvioidro | grep -v grep | awk '{ print $2 }')
kill &(ps aux | grep ciclo3botti | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep ciclo4botti | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep ciclo5botti | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep ciclo6botti | grep -v grep | awk '{ print $2 }')

#spegni tutto
echo 1 > /sys/class/gpio/gpio17/value
echo 1 > /sys/class/gpio/gpio18/value
echo 17 > /sys/class/gpio/unexport
echo 18 > /sys/class/gpio/unexport



#irrigatore
echo 18 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio18/direction

echo 0 > /sys/class/gpio/gpio18/value


sleep 15


echo 1 > /sys/class/gpio/value

echo 18 > /sys/class/gpio/unexport


sleep 1
#pompa
echo 17 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio17/direction

echo 0 > /sys/class/gpio/gpio17/value

sleep 15

echo 1 > /sys/class/gpio/gpio17/value

echo 17 > /sys/class/gpio/unexport


sleep 1
#irrigatore
echo 18 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio18/direction

echo 0 > /sys/class/gpio/gpio18/value


sleep 15


echo 1 > /sys/class/gpio/value

echo 18 > /sys/class/gpio/unexport


sleep 1
#pompa
echo 17 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio17/direction

echo 0 > /sys/class/gpio/gpio17/value

sleep 15

echo 1 > /sys/class/gpio/gpio17/value

echo 17 > /sys/class/gpio/unexport


sleep 1
#irrigatore
echo 18 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio18/direction

echo 0 > /sys/class/gpio/gpio18/value


sleep 15


echo 1 > /sys/class/gpio/value

echo 18 > /sys/class/gpio/unexport


sleep 1
#pompa
echo 17 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio17/direction

echo 0 > /sys/class/gpio/gpio17/value

sleep 15

echo 1 > /sys/class/gpio/gpio17/value

echo 17 > /sys/class/gpio/unexport


