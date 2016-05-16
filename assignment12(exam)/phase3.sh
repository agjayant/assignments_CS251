#!/bin/bash

(cut -d, -f 1,2 phase2.csv)> phase3-2.csv
(cut -d, -f 1,4,8,9,10  phase2.csv )>phase3-1.csv
(cut -d, -f 1,3,5,6,7  phase2.csv )>>phase3-1.csv


