
data1=load(argv() {1});   %loading the data from the experiment

x = data1(:,1);       % getting data in variables
y = data1(:,2);

semilogx(x,y,'m','linewidth',2, [10,1000000] , [pi,pi] ,'g','linewidth',2)  % using different colors
title('Estimating value of pi ','fontsize',21);     %setting plot parameters
xlabel('Sample Size ','fontsize',18);
ylabel('Value of pi ','fontsize',18);
set(gca,'fontsize',15);
legend('Estimation','Actual','location', 'east' );
