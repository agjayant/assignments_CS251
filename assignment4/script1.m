num=10;     %the sample size

file_out = fopen('output.txt','w');

for j = 1:6       
	count=0;          % the number of darts in the circle
	for i = 1:num
		x=rand;		%using the random dart
		y=rand;
		if ( x*x + y*y <= 1 )     % checking of the dart is in circle
			count = count +1;
		endif
	endfor
	fprintf(file_out,'%d %f\n', num, 4 * count/num);
	num=num*10;
endfor

fclose(file_out);
