<?php
//Connect with the database
$conn=mysqli_connect("localhost","root","","webapp");

if(isset($_POST["Import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file = fopen($fileName,"r");

        while(($colum = fgetcsv($file,10000,",")) !== FALSE){

            $sqlInsert = ("INSERT INTO Classroom_T(classroomNumbe,classroomCapacity)
                VALUE('$colum[7]','$colum[8]')");

            $sqlInsert2 = ("INSERT INTO Semester_T(semester,semesterYea)
                VALUE('$colum[12]','$colum[9]')");

            $sqlInsert3 = ("INSERT INTO Course_T(courseId,courseName,numberOfCredits,number_of_Section,enrollment)
                VALUE('$colum[1]','$colum[10]','$colum[4]','$colum[3]','$colum[6]')");

            $sqlInsert4 = ("INSERT INTO School_T(school_title,schoolName)
                VALUE('$colum[0]','$colum[2]')");

            $result = mysqli_query($conn,$sqlInsert);
            $result2 = mysqli_query($conn,$sqlInsert2);
            $result3 = mysqli_query($conn,$sqlInsert3);
            $result4 = mysqli_query($conn,$sqlInsert4);

            if(!empty($result)){
                echo "CSV Data Import into the database";
            }else{
                echo "Problem in Import CSV Data";
            }
        }
    }
}
?>

<!-- // INSERT INTO summer21 (school_title,coffer_course_id, coffered_with,section,credit_houre,capacity,enrolled,
room_id,room_capacity,course_name,faculty_full_name
// VALUES($colum[0]-$colum[10]) -->