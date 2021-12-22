<?php
//Connect with the database
$conn=mysqli_connect("localhost","root","","webapp");

if(isset($_POST["Import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file = fopen($fileName,"r");

        while(($colum = fgetcsv($file,10000,",")) !== FALSE){

            $sqlInsert = ("INSERT INTO classroom_T(room_id,roomcapacity)
                VALUE('$colum[7]','$colum[8]')");

            $sqlInsert2 = ("INSERT INTO section_T(courseid,school_title,section_number,semester_name,std_enrolled,semester_year,room_id)
                VALUE('$colum[1]','$colum[0]','$colum[3]','$colum[12]','$colum[6]','$colum[9]','$colum[7]')");

            $sqlInsert3 = ("INSERT INTO semester_T(semester_name,semester_year)
                VALUE('$colum[12]','$colum[9]')");

            $sqlInsert4 = ("INSERT INTO course_T(courseid,Credit,school_title)
                VALUE('$colum[1]','$colum[4]','$colum[0]')");

            $sqlInsert4 = ("INSERT INTO school_T(school_title)
                VALUE('$colum[0]')");

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