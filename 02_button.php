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
                <H2>Course Enrolment</H2>
            </div>
        </div>

        <!-- Table showing  -->
        <div class="home-content">
            <!-- add table -->
            <table class="center">
                <tr>
                    <th colspan="6">SPRING</th>
                    <th colspan="6">SUMMER</th>
                </tr>
                <tr>
                    <th>Enrolment</th>
                    <th>SBE</th>
                    <th>SELS</th>
                    <th>SETS</th>
                    <th>SLASS</th>
                    <th>Total</th>
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
                $enrolled_summer = array();
                $total_spring = array();
                $total_summer = array();

                for ($i = 0; $i < count($enrolled_size1); $i++) {
                    //SPRING
                    for ($j = 0; $j < count($school_name); $j++) {
                        $sql = "SELECT COUNT(*) FROM section_t WHERE school_title= '$school_name[0]' AND semester_name='spring' AND semester_year='2010' AND
                            std_enrolled BETWEEN $enrolled_size1[0] AND $enrolled_size2[0];";
                        $results = $conn->query($sql);
                        if ($results->num_rows > 0) {
                            while ($row = $results->fetch_assoc()) {
                                $enrolled_spring[] = implode(" ", $row);
                            }
                        }
                        for ($k = 0; $k < count($enrolled_spring); $k++) {
                            $total_spring[$k] = $total_spring[$k] + $enrolled_spring[$k];
                        }
                    }

                    //SUMMER
                    for($l=0;$l<count($school_name);$l++){
                        $sql2 = "SELECT COUNT(*) FROM section_t WHERE school_title='$school_name[$l]' AND semester_name='summer' AND semester_year='2010' AND
                            std_enrolled BETWEEN '$enrolled_size1[$l]' AND '$enrolled_size2[$l]';";
                        $results2 = $conn->query($sql2);
                        if ($results->num_rows > 0) {
                            while ($row = $results2->fetch_assoc()) {
                                $enrolled_summer[] = implode(" ", $row);
                            }
                        }
                        for ($q = 0; $q < count($enrolled_summer); $q++) {
                            $total_summer[$q] = $total_summer[$q] + $enrolled_summer[$q];
                        }
                    }
                }

                // Print the table results
                for($i = 0; $i <$enrolled_spring; $i++) {
                    echo "<tr><td>" ."$enrolled_size1[$i]"."-"."$enrolled_size2[$i]"."</td><td>";
                    for($j=0;$j<$enrolled_spring; $j++){
                        echo "<td>" .$enrolled_spring[$i]."</td>";
                    }
                    echo "<td>".$total_spring[$i]."</td></tr>";
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