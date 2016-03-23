#!/bin/bash

#initialising sum and count
awk '
BEGIN{		
	sum=0
	count=0
}

{
	num=$0/1

	if (num == $0) {
		sum=sum+$0;
		count=count+1
	}
} 

END{
	if (count>0)
		printf("%.2f\n"),sum/count
	else 
		printf "No Real Number Found\n"
}' $1  
#if the line contains a number
	#incrementing count
	#updating sum 

#printing the result only if one or more integers are found
