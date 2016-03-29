all: script4.pdf script4.tex script3.fig
	fig2dev -L jpeg script3.fig script3.jpeg
	octave script1.m
	gnuplot script2.gp
	pdflatex script4.tex
	makeindex script4
	pdflatex script4.tex
	pdflatex script4.tex

script4.pdf: script1.m script2.gp script4.tex logo.jpg output1.txt output2.txt output3.txt output4.txt
	octave script1.m
	gnuplot script2.gp
	pdflatex script4.tex
	makeindex script4
	pdflatex script4.tex
	pdflatex script4.tex
	

histforall.png: script1.m script2.gp
	octave script1.m
	gnuplot script2.gp

script3.jpeg: script3.fig
	fig2dev -L jpeg script3.fig script3.jpeg
				
output1.txt: script1.m
	octave script1.m

output2.txt: script1.m
	octave script1.m

output3.txt: script1.m
	octave script1.m

output4.txt: script1.m
	octave script1.m
clean:
	-rm -f script4.log script4.aux script4.lot script4.lof script4.toc script3.bak
