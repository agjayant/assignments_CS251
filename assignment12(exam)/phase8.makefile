all : phase1 phase2 phase3 phase3 phase4 phase5 phase6 phase7

phase1 : names.txt phase1.sh
	./phase1.sh names.txt

phase2: phase1 phase2.m phase1.txt
	octave phase2.m

phase3: phase1 phase2 phase3.sh
	./phase3.sh

phase4: phase1 phase2 phase3 phase4.sql
	sqlite3 phase4.db < phase4.sql 

phase5: phase1 phase2 phase3 phase4 phase5.sql
	sqlite3 phase4.db < phase5.sql

phase6: phase1 phase2 phase3 phase4 phase5 phase6.gnu
	gnuplot phase6.gnu

phase7: phase1 phase2 phase3 phase4 phase5 phase6 phase7.sql
	sqlite3 phase4.db < phase7.sql
clean:
	-rm -f phase4.db phase1.txt phase2.csv phase3-1.csv phase3-2.csv phase5.csv phase6.eps phas6.pdf
