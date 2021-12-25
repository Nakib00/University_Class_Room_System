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
    <!-- Dropdown CSS  -->
    <?php include('CSS/dropdown.php') ?>
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
                <H2>Course Enrolment</H2>
            </div>
        </div>

        <!-- Drop down  -->
        <div class="container">
            <div class="dropdown">
                <button class="dropbtn">SEMESTER-YEAR</button>
                <div class="dropdown-content">
                    <a href="02_button1.php">Spring-Summer</a>
                    <a href="02_button2.php">Spring-Autumn</a>
                    <a href="02_button3.php">summer-Autumn</a>
                </div>
            </div>

            <!-- Table showing  -->
            <div class="home-content">
                <!-- add table -->
                <table class="button2">
                    <tr>
                        <th colspan="6">SPRING</th>
                    </tr>
                    <tr>
                        <th>Enrolment</th>
                        <th>SBE</th>
                        <th>SELS</th>
                        <th>SETS</th>
                        <th>SLASS</th>
                        <th>Total</th>
                    </tr>

                    <?php

                    //Connect with the database
                    include('DataBase/connection.php');

                    if ($conn->connect_errno) {
                        die("Error connecting" . $conn->connect_error);
                    }


                    //USE the SQL query Here
                    // 1st sql
                    // SELECT COUNT(*) FROM section_t WHERE school_title='SBE' 
                    // AND semester_name='spring' AND semester_year='2010' AND std_enrolled BETWEEN 0 AND 10;

                    // 2nd sql
                    // SELECT COUNT(*) FROM section_t WHERE school_title='SBE' AND semester_name='spring' AND semester_year='2010' AND std_enrolled>=60;

                    $school_name = array('SBE', 'SELS', 'SETS', 'SLASS');
                    $enrolled_size1 = array(0, 11, 21, 31, 36, 41, 51, 56);
                    $enrolled_size2 = array(10, 20, 30, 35, 40, 50, 55, 60);
                    $enrolled_spring = array();
                    $total_spring = array();

                    for ($i = 0; $i < count($enrolled_size1); $i++) {
                        //SPRING
                        for ($j = 0; $j < count($school_name); $j++) {
                            $sql = "SELECT COUNT(*) FROM section_t WHERE school_title= '$school_name[$j]' AND semester_name='spring' AND semester_year='2010' AND
                            std_enrolled BETWEEN $enrolled_size1[$i] AND $enrolled_size2[$i];";
                            $results = $conn->query($sql);
                            if ($results->num_rows > 0) {
                                while ($row = $results->fetch_assoc()) {
                                    $enrolled_spring[] = implode(" ", $row);
                                }
                            }
                        }
                    }

                    $s = 0;
                    for ($i = 0; $i < count($enrolled_size1); $i++) {
                        $sum = 0;
                        for ($j = $s; $j < ($s + 4); $j++) {
                            $sum = $sum + $enrolled_spring[$j];
                        }
                        $total_spring[$i] = $sum;
                        $s = $s + 4;
                    }

                    // Print the table results
                    // $enrolled_size1[$i]"."-"."$enrolled_size2[$i]"
                    $r = 0;
                    for ($i = 0; $i < count($enrolled_size1); $i++) {
                        echo "<tr><td>" . "$enrolled_size1[$i]" . "-" . "$enrolled_size2[$i]" . "</td>";
                        for ($j = $r; $j < ($r + 4); $j++) {
                            echo "<td>" . $enrolled_spring[$j] . "</td>";
                        }
                        $r = $r + 4;

                        echo "<td>" . $total_spring[$i] . "</td></tr>";
                    }
                    echo "</table>";
                    ?>
                </table>
                <table class="button21">
                    <tr>
                        <th colspan="6">SUMMER</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Enrolment</th>
                        <th>SBE</th>
                        <th>SELS</th>
                        <th>SETS</th>
                        <th>SLASS</th>
                        <th>Total</th>
                        <th></th>
                    </tr>

                    <?php
                    $school_name = array('SBE', 'SELS', 'SETS', 'SLASS');
                    $enrolled_size1 = array(0, 11, 21, 31, 36, 41, 51, 56);
                    $enrolled_size2 = array(10, 20, 30, 35, 40, 50, 55, 60);
                    $enrolled_summer = array();
                    $total_summer = array();

                    for ($i = 0; $i < count($enrolled_size1); $i++) {

                        // //SUMMER
                        for ($l = 0; $l < count($school_name); $l++) {
                            $sql2 = "SELECT COUNT(*) FROM section_t WHERE school_title='$school_name[$l]' AND semester_name='summer' AND semester_year='2010' AND
                            std_enrolled BETWEEN '$enrolled_size1[$l]' AND '$enrolled_size2[$l]';";
                            $results2 = $conn->query($sql2);
                            if ($results->num_rows > 0) {
                                while ($row = $results2->fetch_assoc()) {
                                    $enrolled_summer[] = implode(" ", $row);
                                }
                            }
                        }
                    }
                    $t = 0;
                    for ($i = 0; $i < count($enrolled_size1); $i++) {
                        $sum_summer = 0;
                        for ($j = $t; $j < ($t + 4); $j++) {
                            $sum_summer = $sum_summer + $enrolled_summer[$j];
                        }
                        $total_summer[$i] = $sum_summer;
                        $t = $t + 4;
                    }

                    // Print the table results
                    $x = 0;
                    for ($i = 0; $i < count($enrolled_size1); $i++) {
                        echo "<tr><td>" . "$enrolled_size1[$i]" . "-" . "$enrolled_size2[$i]" . "</td>";
                        for ($j = $x; $j < ($x + 4); $j++) {
                            echo "<td>" . $enrolled_summer[$j] . "</td>";
                        }
                        echo "<td>" . $total_summer[$i] . "</td></tr>";
                        $x = $x + 4;
                    }

                    echo "</table>";
                    $conn->close();
                    ?>
                </table>
            </div>
    </section>

    <!-- JavaScript add -->
    <?php include('javascript/javascript.php') ?>

</body>

</html>