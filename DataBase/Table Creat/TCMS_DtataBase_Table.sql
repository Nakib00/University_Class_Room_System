-- Student_T
CREATE TABLE Student_T (nStudentID int(7) NOT NULL, nCostPerCredit int(5),
    PRIMARY KEY (nStudentID));

-- Registation_T
CREATE TABLE Registation_T (nStudentId int(7),nSectionNumber int(1),
    dRegistrationDate DATETIME DEFAULT CURRENT_TIMESTAMP);

-- Classroom_T
CREATE TABLE Classroom_T (cClassroomNumbe varchar(5),nClassroomCapacity int(3));

-- Section_T
CREATE TABLE Section_T (nSectionId int(1),cSemesterName varchar(6),
    cCourseId varchar(6),cClassroomNumber varchar(5));

-- Semester_T
CREATE TABLE Semester_T (cSemesterName varchar(6),nSemesterYea int(4));

-- Course_T
CREATE TABLE Course_T (cDepartmentId varchar(3),cCourseId varchar(6),cCourseName varchar(30),
    nNumberOfCredits int(3));

-- Department_T
CREATE TABLE Department_T (cDepartmentId varchar(3),cSchoolId int(5),cDepartmentName varchar(50));

-- School_T
CREATE TABLE School_T (cSchoolId varchar(5),cSchoolName varchar(50));