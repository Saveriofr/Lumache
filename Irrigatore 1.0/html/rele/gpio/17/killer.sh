#!/bin/bash

kill $(ps aux | grep avvio | grep -v grep | awk '{ print $2 }')


