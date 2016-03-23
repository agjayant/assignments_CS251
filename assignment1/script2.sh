#!/bin/bash
(paste -d, <(cut -d, -f 1,2,4 $1) <(cut -d, -f 2,3 $2))> output.txt   #cutting the files separately and gving them as argument to paste command and saving to output.txt 
cat output.txt
