CREATE TABLE IF NOT EXISTS userinfo 
(
sid char(7) NOT NULL,
programme varchar(10) NOT NULL,
entranceyear int(4)NOT NULL,
pw 	varchar(30) NOT NULL,
latestlogindate DATE,
latestlogintime TIME,
PRIMARY KEY (sid)
);

INSERT INTO userinfo(sid, programme, entranceyear, pw, latestlogindate, latestlogintime) VALUES 
('s111111','BA-AHCC',2001,'A1111111','null','null'),
('s222222','BA-AHCC',2002,'B2222222','null','null'),
('s333333','BA-AHCC',2003,'C3333333','null','null'),
('s444444','BA-AHCC',2004,'D4444444','null','null')