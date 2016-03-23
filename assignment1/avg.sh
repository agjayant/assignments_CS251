#!/bin/bash

sum=0
count=0
while read number				#read numbers line by line
do
	sum=`echo "scale=3;$number + $sum" | bc`   #to read float numbers from line
	count=$((count+1))
done < $1

echo "scale=3;$sum / $count" | bc    #calculates average and prints
