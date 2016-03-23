#!/bin/bash

num_star=`cut -d, -f 5 $1 | grep -c "*"`   #number of * grades in 5th column
num_F=`cut -d, -f 5 $1 | grep -c "F"`     #number of F grades in 5th column

if [ $((num_star+num_F)) -ge 1 ]; then			#checking if there are any * or F grades
	sed -i 's/\(.*\)\(,.*,\)F/\1\2Fail/' $1 			#replacing F in the final column by Fail 
	sed -i 's/\(.*\)\(,.*,\)[A,'\*']/\1\2Good/' $1
	sed -i 's/\(.*\)\(,.*,\)[B,C]/\1\2Average/' $1 
	sed -i 's/\(.*\)\(,.*,\)D/\1\2Poor/' $1
fi
cat $1
