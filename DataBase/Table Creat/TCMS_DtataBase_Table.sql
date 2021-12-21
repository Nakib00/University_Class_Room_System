-- -- Student_T
-- CREATE TABLE Student_T (nStudentID int(7) NOT NULL, nCostPerCredit int(5),
--     PRIMARY KEY (nStudentID) auto_increment);

-- -- Registation_T
-- CREATE TABLE Registation_T (nStudentId int(7),nSectionNumber int(1),
--     dRegistrationDate DATETIME DEFAULT CURRENT_TIMESTAMP);

-- Classroom_T
CREATE TABLE Classroom_T (classroomNumbe varchar(5) NOT NULL,classroomCapacity int(3), PRIMARY KEY(classroomNumbe));

-- -- Section_T
-- CREATE TABLE Section_T (number_of_Section int(2),SemesterName varchar(6),
--     CourseId varchar(6),ClassroomNumber varchar(5));

-- Semester_T
CREATE TABLE Semester_T (semester varchar(6) NOT NULL,semesterYea int(4) NOT NULL, PRIMARY KEY (semester,semesterYea));

-- Course_T cDepartmentId varchar(3)
CREATE TABLE Course_T (courseId varchar(6) NOT NULL,courseName varchar(30),
    numberOfCredits int(3),number_of_Section int(2),enrollment int(3), PRIMARY KEY (courseId); 

-- -- Department_T
-- CREATE TABLE Department_T (cDepartmentId varchar(3),cSchoolId int(5));

-- School_T
CREATE TABLE School_T (school_title varchar(5) NOT NULL,schoolName varchar(50), PRIMARY KEY (school_title));