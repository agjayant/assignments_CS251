set terminal png  enhanced size 900,640 font "arial,14" 
set output 'histforall.png'


set boxwidth 0.8 relative
set style fill   solid 1.0 border lt -1

#histogram settings
set style histogram rowstacked 
set style data histograms

#remove original xtics
unset xtics
set xtics format "  "

#Naming
set title "Sum of average of the two throws"
set xlabel "Set Size"
set ylabel "Average of a throw for all Dices"

#space for legend
set xrange [ -1 : 22] noreverse nowriteback

plot newhistogram "10", 'output1.txt' using 1 t "First", '' using 2 t "Second",\
	 newhistogram "10^2", 'output2.txt' using 1 t "First", '' using 2 t "Second",\
	 newhistogram "10^3", 'output3.txt' using 1 t "First", '' using 2 t "Second",\
	 newhistogram "10^4", 'output4.txt' using 1 t "First", '' using 2 t "Second"

