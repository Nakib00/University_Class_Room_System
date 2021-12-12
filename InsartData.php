<?php
//Connect with the database
$conn=mysqli_connect("localhost","root","","webapp");

if(isset($_POST["Import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file = fopen($fileName,"r");

        while(($colum = fgetcsv($file,10000,",")) !== FALSE){
            $sqlInsert = ("INSERT INTO summer21(school_title,coffer_course_id, coffered_with,section,credit_houre,capacity,enrolled,room_id,room_capacity,course_name,faculty_full_name)
            VALUE('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]','$colum[9]','$colum[10]')");

            $result = mysqli_query($conn,$sqlInsert);

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