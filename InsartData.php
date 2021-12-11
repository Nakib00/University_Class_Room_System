<?php
//Connect with the database
include('DataBase/connection.php');

if (isset($_FILES('csv'))) :
    $csv_file = $_FILES['csv']['tmpa_name'];
    if (is_file($csv_file)) :
        if (($handle = fopen($csv_file, "r")) !== FALSE) :
            while (($csv_data = fgetcsv($handle, 1500, ",")) !== FALSE) {
                $num = count($csv_data);
                for ($i = 0; $i < $num; $i++) :
                    $colum[$i] = $csv_data[$i];
                endfor;
                // Table name and insart value
                $insarted = $db->query("INSERT INTO summer21 (school_title,coffer_course_id, coffered_with,section,credit_houre,capacity,enrolled,room_id,room_capacity,blocked,course_name,faculty_full_name,start_time,end_time);
                VALUES('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]','$colum[9]','$colum[10]','$colum[11]','$colum[12]','$colum[13]')");
            }
            $meg = "Data input successfully";
            fclose($handle);
        else :
            $meg = "Unable to input data";
        endif;
    else :
        $meg = "CSV file not found";
    endif;
else :
    $meg = "Please try again";
endif;
echo $meg;
