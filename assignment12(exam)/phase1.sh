#!/bin/bash

(grep -o -P '(?<=\*).*(?=\<)' names.txt) > phase1.txt
sed -i 's/\([A-Za-z]*\) \([A-Za-z]*\)/\1-\2/g' phase1.txt
sed -i 's/^.\(.*\).$/\1/' phase1.txt


