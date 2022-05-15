CREATE OR REPLACE DATABASE hospital;

USE hospital;

CREATE OR REPLACE TABLE Doctors(
    Doctor_ID int NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Age int,
    Phone VARCHAR(15),
    Dept VARCHAR(255),
    PRIMARY KEY(Doctor_ID)
);
ALTER TABLE Doctors AUTO_INCREMENT = 100;

CREATE OR REPLACE TABLE Patients(
    Patient_ID int not NULL AUTO_INCREMENT,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Age int,
    Phone VARCHAR(255),
    Dept VARCHAR(255),
    Payment_Status VARCHAR(20),
    Doctor_ID int NOT NULL,

    PRIMARY KEY(Patient_ID),
    FOREIGN KEY(Doctor_ID) REFERENCES Doctors(Doctor_ID)
);

ALTER TABLE Patients AUTO_INCREMENT = 1000;

CREATE OR REPLACE TABLE Users (
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255),
    Email VARCHAR(255) NOT NULL,
    UserName VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE OR REPLACE VIEW Doctors_Name AS 
    SELECT Doctor_ID, FirstName, LastName FROM Doctors;
CREATE OR REPLACE VIEW Patients_Name AS
    SELECT Patient_ID, FirstName, LastName FROM Patients;

INSERT INTO Doctors(FirstName, LastName, Age, Phone, Dept) VALUES
    ('Raju', 'Rastogi', 45, '9988776655', 'Cardiology'),
    ('Seema', 'Khurana', 51, '9988776654', 'Nuerology'),
    ('Nihal', 'Khamble', 51, '9988776652', 'Pediatrics');
