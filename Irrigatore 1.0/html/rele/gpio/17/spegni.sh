#!/bin/bash

#kill all process of browser user
kill $(ps aux | grep avvio | grep -v grep | awk '{print $2 }')
kill $(ps aux | grep avvioidro | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep ciclo | grep -v grep | awk '{ print $2 }')




#sh killer.sh

sleep 1

#Spegnimento dando valore 1
echo 1 > /sys/class/gpio/gpio17/value

#Esportiamo il pin per fine utilizzo
echo 17 > /sys/class/gpio/unexport


echo 1 > /sys/class/gpio/gpio18/value


echo 18 > /sys/class/gpio/unexport
