create TABLE student(
id int(5) not null AUTO_INCREMENT,
    name varchar(100),
    contact varchar(15),
    address varchar(100),
    email varchar(100),
    gender varchar(50),
    PRIMARY KEY(id)
    
)


create TABLE faculty(
	id int(5) not null AUTO_INCREMENT,
    name varchar(100),
    contact varchar(15),
    email varchar(100),
    salary float(5),
    designation varchar(50),
    PRIMARY KEY(id)
    
)

create TABLE course(
	id int(5) not null AUTO_INCREMENT,
    title varchar(100),
    credit int(2),
    PRIMARY KEY(id)
    
)


create TABLE course_teacher(
	fid int(5),
    cid int(100),
    semester varchar(100),
    FOREIGN KEY(fid) REFERENCES faculty(id),
    FOREIGN KEY(cid) REFERENCES course(id)
    
)


create TABLE registration(
	sid int(5),
    cid int(100),
    semester varchar(100),
    FOREIGN KEY(fid) REFERENCES student(id),
    FOREIGN KEY(cid) REFERENCES course(id)
    
)
