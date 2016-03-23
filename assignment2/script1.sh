#!/bin/bash 

num_star=`cut -d, -f 5 $1 | grep -c "*"`   #number of * grades in 5th column
num_F=`cut -d, -f 5 $1 | grep -c "F"`     #number of F grades in 5th column

if [ $((num_star+num_F)) -ge 1 ]; then
	echo Yes
else
	echo No
fi
