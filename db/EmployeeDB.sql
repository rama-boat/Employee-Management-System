-- Drop the database if it exists
DROP DATABASE IF EXISTS EmployeeDB;

-- Create the database
CREATE DATABASE EmployeeDB;

-- Switch to the newly created database
USE EmployeeDB;

-- Create Employees table
CREATE TABLE People (
    Pid INT AUTO_INCREMENT PRIMARY KEY,
    RoleID INT NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    DateOfEmployment DATE NOT NULL,
    Phone VARCHAR(30) NOT NULL,
    DateOfBirth DATE NOT NULL,
    Email VARCHAR(255) NOT NULL,
    passwd varchar(255) NOT NULL

);

-- Create LeaveRequests table
CREATE TABLE LeaveRequests (
    RequestID INT AUTO_INCREMENT PRIMARY KEY,
    PID INT NOT NULL,
    LeaveDescription TEXT NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    StatusOfLeave ENUM('Pending', 'Approved', 'Rejected') NOT NULL,
    Comments TEXT NOT NULL,
    FOREIGN KEY (PID) REFERENCES People(Pid)
);

-- Create AttendanceRecords table
CREATE TABLE AttendanceRecords (
    RecordID INT AUTO_INCREMENT PRIMARY KEY,
    PID INT NOT NULL,
    WorkingDate DATE NOT NULL,
    ClockInTime TIME NOT NULL,
    ClockOutTime TIME NOT NULL,
    FOREIGN KEY (PID) REFERENCES People(Pid)
);


CREATE TABLE Role (
  RoleID INT NOT NULL,
  Rname VARCHAR(255) NOT NULL
);

INSERT INTO Role (RoleID, Rname) VALUES
(1, "admin"),
(2, "standard");
