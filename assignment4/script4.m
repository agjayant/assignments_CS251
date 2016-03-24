
data1=load(argv(){1});

x=0:50;

y= data1(:,1);
y=y*1000000;

plot(x,y,'linewidth',4,'k',x,data1(:,2)*100000,'linewidth',2,'r',x,data1(:,3)*10000,'linewidth',2,'g',x,data1(:,4)*1000,'linewidth',2,'b',x,data1(:,5)*100,'linewidth',2,'m',x,data1(:,6)*10,'linewidth',2,'c',x,data1(:,7),'r','linestyle',':','linewidth',3);

title('Estimating Gaussian','fontsize',21);
xlabel('x values ','fontsize',18);
ylabel('y values ','fontsize',18);
set(gca,'fontsize',15);

legend('Gaussian', '10 samples','10^2 samples','10^3 samples','10^4 samples','10^5 samples','10^6 samples');
