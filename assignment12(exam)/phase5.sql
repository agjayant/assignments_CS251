alter table marks add column total integer;
update marks set total=asgn+proj+exam;
.mode csv
.output phase5.csv
select course,count(roll),avg(total),min(total),max(total) from marks where course="MH1";
select course,count(roll),avg(total),min(total),max(total) from marks where course="MH2";
select course,count(roll),avg(total),min(total),max(total) from marks where course="MH3";
select course,count(roll),avg(total),min(total),max(total) from marks where course="MH4";
select course,count(roll),avg(total),min(total),max(total) from marks where course="MH5";
