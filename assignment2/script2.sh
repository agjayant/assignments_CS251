#!/bin/bash
echo -n "*: "
temp=`cut -d, -f 5 $1 | grep -c "*"`   #number of * grades in 5th column
echo $temp

echo -n "A: "
temp=`cut -d, -f 5 $1 | grep -c A`
echo $temp

echo -n "B: "
temp=`cut -d, -f 5 $1 | grep -c B`
echo $temp

echo -n "C: "
temp=`cut -d, -f 5 $1 | grep -c C`
echo $temp

echo -n "D: "
temp=`cut -d, -f 5 $1 | grep -c D`
echo $temp

echo -n "F: "
temp=`cut -d, -f 5 $1 | grep -c F`
echo $temp


