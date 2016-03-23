#!/bin/bash

#passing argument 2 as num and argument 1 as file name
(awk -v num=$2 '
BEGIN{
	count=1
}

{
	if(count%num == 0){
		printf $0
		printf  "\n"
		count =count+1	
	}
	else {
		count = count +1 
		printf $0
		printf "\t"
	}
}

END{
	if ((count-1) % num != 0 ) printf "\n"
}
' $1)> output2
#at each line checking for line change
#printing $0 to print the entire content in the given file
#checking if the last newline is required
#routing the entire output to the file "output"

cat output2
