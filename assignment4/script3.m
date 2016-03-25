file_out = fopen('output2.txt','w');

x = 0:50;

y= normpdf(x,15,sqrt(10.5));

num=10;

h={0:50,0:50,0:50,0:50,0:50.0:50};

for i = 1:6
	temp=floor(normrnd(15,sqrt(10.5),[1,num]));
	num=num*10;
	h(i) =hist(temp,x);
	hist(temp,x);
endfor

for i=1:51
	fprintf(file_out,'%f\t%d\t%d\t%d\t%d\t%d\t%d\n',y(i),h{1}(i),h{2}(i),h{3}(i),h{4}(i),h{5}(i),h{6}(i) );
endfor
