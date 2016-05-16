create table names(roll integer PRIMARY KEY,name text);
.mode csv
.import phase3-2.csv names
create table marks(roll integer,course text,asgn integer,proj integer,exam integer,FOREIGN KEY(roll) references names(roll));
.import phase3-1.csv marks
