DROP TABLE IF EXISTS Swims;
DROP TABLE IF EXISTS Records;
DROP TABLE IF EXISTS Stroke;
DROP TABLE IF EXISTS Coach;
DROP TABLE IF EXISTS Swimmer;
DROP TABLE IF EXISTS Account;

CREATE TABLE Account
(
  User_Name      char(50)  NOT NULL ,
  Password       char(16)  NOT NULL ,
  Account_Type  char(15)  NOT NULL 
  );

CREATE TABLE Swimmer
(
  Swimmer_ID          int      NOT NULL ,
  User_Name           char(50)      NOT NULL ,
  Fname               char(30)      NOT NULL ,
  Lname               char(30)      NOT NULL ,
  Email               char(255)     NOT NULL ,
  Home_Address        char(255)     NULL ,
  Subscription_Date   date          NOT NULL ,
  Gender              char(6)       NOT NULL ,
  DoB                 date          NOT NULL ,
  Status              char(8)       NOT NULL 
);

CREATE TABLE Coach
(
  Coach_ID     int      NOT NULL ,
  User_Name    char(50)     NOT NULL 
);

CREATE TABLE Stroke
(
  Stroke_Num    int       NOT NULL ,
  Stroke_Type   char(20)  NOT NULL ,
  Distance      int       NOT NULL 
);

CREATE TABLE Records
(
  Record_ID     int       NOT NULL ,
  Record_Date   date      NOT NULL ,
  Record_Time   time      NOT NULL 
);

CREATE TABLE Swims
(
  Swimmer_ID      int       NOT NULL ,
  Record_ID       int       NOT NULL ,
  Stroke_Num      int       NOT NULL 
);


-- -------------------
-- Define primary keys
-- -------------------
ALTER TABLE Account ADD PRIMARY KEY (User_Name);
ALTER TABLE Swimmer ADD PRIMARY KEY (Swimmer_ID);
ALTER TABLE Coach ADD PRIMARY KEY (Coach_ID);
ALTER TABLE Stroke ADD PRIMARY KEY (Stroke_Num);
ALTER TABLE Records ADD PRIMARY KEY (Record_ID);
ALTER TABLE Swims ADD PRIMARY KEY (Swimmer_ID, Record_ID, Stroke_Num);


-- -------------------
-- Define foreign keys
-- -------------------
ALTER TABLE Swimmer ADD FOREIGN KEY (User_Name) REFERENCES Account (User_Name);
ALTER TABLE Coach ADD FOREIGN KEY (User_Name) REFERENCES Account (User_Name);
ALTER TABLE Swims ADD FOREIGN KEY (Swimmer_ID) REFERENCES Swimmer (Swimmer_ID);
ALTER TABLE Swims ADD FOREIGN KEY (Record_ID) REFERENCES Records (Record_ID);
ALTER TABLE Swims ADD FOREIGN KEY (Stroke_Num) REFERENCES Stroke (Stroke_Num);
