
roll_list = [100:999]
roll = randperm(900)

file_out = fopen('phase2.csv','w');

fid = fopen("phase1.txt");

for j = 1:150
	cour = randperm(5)
	one = cour(1)
	two = cour(2)
	
	name  = fgetl(fid)
	if (one == 1)
		str1 = "MH1";
	elseif (one == 2)
		str1 = "MH2";
	elseif (one == 3)
		str1 = "MH3";
	elseif (one == 4)
		str1 = "MH4";
	else
		str1 = "MH5";
	endif

	if (two == 1)
		str2 = "MH1";
	elseif (two == 2)
		str2 = "MH2";
	elseif (two == 3)
		str2 = "MH3";
	elseif (two == 4)
		str2 = "MH4";
	else
		str2 = "MH5";
	endif

	fprintf(file_out,'%d,%s,%s,%s,%d,%d,%d,%d,%d,%d\n',roll_list(roll(j)),name,str1,str2,randi(50),randi(50),randi(50),randi(50),randi(50),randi(50) );

endfor

fclose(file_out);



