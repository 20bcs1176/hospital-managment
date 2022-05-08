CREATE DATABASE hospital;

USE hospital;

CREATE TABLE Doctors(
    Doctor_ID int NOT NULL AUTO_INCREMENT=100,
    First_name VARCHAR(255),
    Last_name VARCHAR(255),
    Age int,
    Phone VARCHAR(15),
    Dept. VARCHAR(255),
    PRIMARY KEY(Doctor_ID)
);

CREATE TABLE Patients(
    Patient_ID int not NULL AUTO_INCREMENT=1000,
    First_name VARCHAR(255),
    Last_name VARCHAR(255),
    Age int,
    Phone VARCHAR(255),
    Dept VARCHAR(255),
    Payment_Status VARCHAR(20),
    Doctor_ID int NOT NULL,

    PRIMARY KEY(Patient_ID),
    FOREIGN KEY(Doctor_ID) REFERENCES Doctors(Doctor_ID)
);

CREATE TABLE Credentials (
    First_name VARCHAR(255) NOT NULL,
    Last_name VARCHAR(255),
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE VIEW Doctors_Name AS 
    SELECT First_name, Last_name FROM Doctors;
CREATE VIEW Patients_Name AS
    SELECT First_name, Last_name FROM Patients;

INSERT INTO Doctors VALUES
    ('Raju', 'Rastogi', 45, '9988776655', 'Cardiology'),
    ('Seema', 'Khurana', 51, '9988776654', 'Nuerology'),
    ('Nihal', 'Khamble', 51, '9988776652', 'Pediatrics');
