<!-- Include navbar -->
<?php include('navbar.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include CSS  -->
    <?php include('CSS/style.php') ?>
    <!-- Include Table CSS -->
    <?php include('CSS/Table_css.php') ?>
    <title>TCMS</title>
</head>

<body>

    <!-- Animation of the page -->
    <section class="home-section">
        <!-- Admin nav add  -->
        <?php include('AdminNav.php') ?>

        <!-- Titale of the page -->
        <div class="home-content">
            <div class="titlel">
                <H2>Usage of Resources</H2>
            </div>
        </div>

        <!-- Table showing  -->
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Table</div>
                    <div class="sales-details">
                        <div class="">
                            <!-- add table -->
                            <table class="center">
                                <tr>
                                    <th>school</th>
                                    <th>total enrolled</th>
                                    <th>Avg Enroll</th>
                                    <th>Avg Room</th>
                                    <th>Difference</th>
                                    <th>Unused %</th>
                                </tr>
                                <?php

                                //Connect with the database
                                include('DataBase/connection.php');

                                if ($conn->connect_errno) {
                                    die("Error connecting" . $conn->connect_error);
                                }

                                // Number of rows that have school name == "" AND semester = "" 
                                // SELECT COUNT(*) AS row_need FROM `section_t` WHERE school_title='SBE' AND semester_name='spring';

                                // sum of enrolled students
                                // SELECT Sschool_title, SUM(std_enrolled) AS total_enrolled FROM `section_t` WHERE school_title='SBE' AND semester_name='spring';

                                // sum of room capacity
                                // SELECT SUM(roomcapacity) AS sum_room_capacity  FROM `section_t` AS s, classroom_t As c WHERE s.room_id=c.room_id AND school_title='SBE' AND semester_name='spring';

                                $school_name = array("SBE","SELS","SETS","SLASS","SPPH");
                                $total_enrolled=array();
                                $row_need=array();
                                $sum_room_capacity=array();

                                for($i=0;$i<=4;$i++){
                                    //sum of enrolled students
                                    $sql="SELECT  SUM(std_enrolled) AS total_enrolled  FROM `section_t` WHERE school_title = '$school_name[$i]' AND semester_name ='spring';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $total_enrolled[]=implode(" ",$row);
                                        }
                                    }

                                    //number of rows that have school
                                    $sql2="SELECT COUNT(*) FROM `section_t` WHERE school_title='$school_name[$i]' AND semester_name='spring';";
                                    $result2 = $conn->query($sql2);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result2->fetch_assoc()) {
                                            $row_need[]=implode(" ",$row);
                                        }
                                    }
                                    //sum of room capacity
                                    $sql3="SELECT SUM(roomcapacity)  FROM `section_t` AS s, classroom_t As c WHERE s.room_id=c.room_id AND school_title='$school_name[$i]' AND semester_name='spring';";
                                    $result3=$conn->query($sql3);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result3->fetch_assoc()) {
                                            $sum_room_capacity[]=implode(" ",$row);;
                                        }
                                    }
                                }

                                for($i=0;$i<=count($school_name);$i++) {
                                    echo "<tr><td>" . $school_name[$i] ."</td><td>".  $total_enrolled[$i] ."</td><td>". $total_enrolled[$i]/$row_need[$i]."</td><td>"."</td></tr>";
                                }
                                echo "</table>";

                                $conn->close();

                                ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript add -->
    <?php include('javascript/javascript.php') ?>

</body>

</html>