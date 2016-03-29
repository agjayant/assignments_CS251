file_out1 = fopen('output1.txt','w');
file_out2 = fopen('output2.txt','w');
file_out3 = fopen('output3.txt','w');
file_out4 = fopen('output4.txt','w');

n=1;

throw = cell(1,6);

for j=1:4
	n=n*10;

	throw{1}=0;
	throw{2}=0;
	throw{3}=0;
	throw{4}=0;
	throw{5}=0;
	throw{6}=0;

	for i=1:n
				
		b=floor(6*rand());
		throw{1}=throw{1}+b+1;

		b=floor(6*rand());
		throw{2}=throw{2}+b+1;	
		
		
		b=floor(120*rand());

		k=0;

		if b>=0 && b<17 
			k=1;
		elseif b>=17 && b<34
			k=2;
		elseif b>=34 && b<51
			k=3;
		elseif b>=51 && b<68
			k=4;
		elseif b>=68 && b<94
			k=5;
		elseif b>=94 && b<120
			k=6;
		end
				
		throw{3}=throw{3}+k;

		b=floor(120*rand());

		if b>=0 && b<17 
			k=1;
		elseif b>=17 && b<34
			k=2;
		elseif b>=34 && b<51
			k=3;
		elseif b>=51 && b<68
			k=4;
		elseif b>=68 && b<94
			k=5;
		elseif b>=94 && b<120
			k=6;
		end
				
		throw{4}=throw{4}+k;


		b=floor(60*rand());

		if b>=0 && b<7 
			k=1;
		elseif b>=7 && b<14
			k=2;
		elseif b>=14 && b<21
			k=3;
		elseif b>=21 && b<28
			k=4;
		elseif b>=28 && b<44
			k=5;
		elseif b>=44 && b<60
			k=6;
		end	
	
		throw{5}=throw{5}+k;

		b=floor(60*rand());

		if b>=0 && b<7 
			k=1;
		elseif b>=7 && b<14
			k=2;
		elseif b>=14 && b<21
			k=3;
		elseif b>=21 && b<28
			k=4;
		elseif b>=28 && b<44
			k=5;
		elseif b>=44 && b<60
			k=6;
		end	
	
		throw{6}=throw{6}+k;


	end
	throw{1}=throw{1}/n;
	throw{2}=throw{2}/n;
	throw{3}=throw{3}/n;
	throw{4}=throw{4}/n;
	throw{5}=throw{5}/n;
	throw{6}=throw{6}/n;

	if j==1
		fprintf(file_out1,'%f\t%f\n%f\t%f\n%f\t%f\n',throw{1},throw{2},throw{3},throw{4},throw{5},throw{6});	
	elseif j==2
		fprintf(file_out2,'%f\t%f\n%f\t%f\n%f\t%f\n',throw{1},throw{2},throw{3},throw{4},throw{5},throw{6});	
	elseif j==3				
		fprintf(file_out3,'%f\t%f\n%f\t%f\n%f\t%f\n',throw{1},throw{2},throw{3},throw{4},throw{5},throw{6});	
	else
		fprintf(file_out4,'%f\t%f\n%f\t%f\n%f\t%f\n',throw{1},throw{2},throw{3},throw{4},throw{5},throw{6});	
	end
end

fclose(file_out1); 	
fclose(file_out2); 	
fclose(file_out3); 	
fclose(file_out4); 	
