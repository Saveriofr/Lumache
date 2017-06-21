#!/bin/bash

#Attesa di spegnimento
sleep 15

#Spegnimento dando 1
echo 1 > /sys/class/gpio/gpio17/value

#Esportazione pin
echo 17 > /sys/class/gpio/unexport
