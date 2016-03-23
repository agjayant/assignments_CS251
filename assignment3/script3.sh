#!/bin/bash

#setting FS as "," to separate fields by , (reading a csv)
(awk '
BEGIN{
	FS=","
}

{
	for (i=0;i<NF;i++){
		printf $(NF-i)
		if ( i != NF-1 ) printf ","
	}
	printf "\n"
}
' $1)> output3

#for each line looping through all fields in reverse
#printing "." for all except last elements

cat output3
