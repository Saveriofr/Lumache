#!/bin/bash

#kill all process of browser user before start
kill $(ps aux | grep avvioidro | grep -v grep | awk '{ print $2 }')
kill $(ps aux | grep ciclo | grep -v grep | awk '{ print $2 }')


#spegnimento
echo 1 > /sys/class/gpio/gpio18/value

#esporto funzione
echo 18 > /sys/class/gpio/unexport



#Inserimento del pin di avvio
echo 17 > /sys/class/gpio/export

#Stabiliamo entrata
echo out > /sys/class/gpio/gpio17/direction

#Attiviamo dando valore 0
echo 0 > /sys/class/gpio/gpio17/value

#Attesa
sleep 15

#spegnimento
echo 1 > /sys/class/gpio/gpio17/value

#esporto funzione
echo 17 > /sys/class/gpio/unexport

