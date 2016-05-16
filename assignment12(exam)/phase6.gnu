fontsize=12
set term postscript enhanced eps fontsize
set output "phase6.eps"
set output '| epstopdf --filter --outfile=phase6.pdf'
set style fill solid 0.50 border 0
set style histogram errorbars gap 1 lw 1
set style data histogram
set yrange [0:*]
set datafile separator ","
set xlabel "Courses"
set ylabel "Marks"
plot 'phase5.csv' using 3:4:5 w hist

