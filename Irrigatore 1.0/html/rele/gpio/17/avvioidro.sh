#!/bin/bash

#accensione
kill $(ps aux | grep avvio.sh | grep -v grep | awk '{print $2 }')
kill $(ps aux | grep ciclo | grep -v grep | awk '{ print $2 }')

#spegnimento
echo 1 > /sys/class/gpio/gpio17/value

echo 17 > /sys/class/gpio/unexport

#importo pin desiderato
echo 18 > /sys/class/gpio/export

#stabilire direzione
echo out > /sys/class/gpio/gpio18/direction

#attivazione
echo 0 > /sys/class/gpio/gpio18/value


#attesa per spegnimento di protezione
sleep 15


#spegnimento
echo 1 > /sys/class/gpio/gpio18/value

#esporto pin associato
echo 18 > /sys/class/gpio/unexport


