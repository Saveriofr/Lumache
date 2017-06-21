#!/bin/bash

#spegnimento
echo 0 > /sys/class/gpio/gpio18/value

#esporto pin
echo 18 > /sys/class/gpio/unexport



echo 1 > /sys/class/gpio/gpio17/value

echo 17 > /sys/class/gpio/unexport

