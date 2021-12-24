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
                <H2>Classroom Requirement</H2>
            </div>
        </div>

        <!-- Table showing  -->
        <div class="home-content">
            <!-- add table -->
            <table class="button_1">
                <tr>
                    <th colspan="4">Spring 2010</th>
                    <th colspan="4">Summer 2010</th>
                </tr>
                <tr>
                    <th>Class Size</th>
                    <th>Sections</th>
                    <th>Class room 6</th>
                    <th>Class room 7</th>
                    <th>Sections</th>
                    <th>Class room 6</th>
                    <th>Class room 7</th>
                </tr>

                <?php

                //Connect with the database
                include('DataBase/connection.php');

                if ($conn->connect_errno) {
                    die("Error connecting" . $conn->connect_error);
                }

                //USE the SQL query Here
                $cls_size1 = array(0, 11, 21, 31, 36, 41, 51, 56);
                $cls_size2 = array(10, 20, 30, 35, 40, 50, 55, 60);

                $section_spring = array();
                $section_summer = array();
                $class_room_6_spring = array();
                $class_room_7_spring = array();
                $class_room_6_summer = array();
                $class_room_7_summer = array();

                $section_spring_sum = 0;
                $section_summer_sum = 0;
                $class_room_6_spring_sum = 0;
                $class_room_7_spring_sum = 0;
                $class_room_6_summer_sum = 0;
                $class_room_7_summer_sum = 0;

                //For spring
                for ($i = 0; $i < count($cls_size1); $i++) {
                    //USE the SQL query Here
                    $sql = "SELECT COUNT(*) FROM section_t AS s, classroom_t AS c WHERE s.room_id=c.room_id AND
                    semester_name='spring' AND semester_year='2010' AND roomcapacity BETWEEN $cls_size1[$i] AND $cls_size2[$i];";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $section_spring[] = implode(" ", $row);
                        }
                    }
                }

                for($i = 0; $i < count($section_spring); $i++){
                    $class_room_6_spring[$i] = ($section_spring[$i]/12);
                    $class_room_7_spring[$i] = ($section_spring[$i]/12);
                }

                //For summer
                for ($i = 0; $i < count($cls_size1); $i++) {
                    //USE the SQL query Here
                    $sql = "SELECT COUNT(*) FROM section_t AS s, classroom_t AS c WHERE s.room_id=c.room_id AND
                    semester_name='summer' AND semester_year='2010' AND roomcapacity BETWEEN $cls_size1[$i] AND $cls_size2[$i];";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $section_summer[] = implode(" ", $row);
                        }
                    }
                }

                for($i = 0; $i < count($section_summer); $i++){
                    $class_room_6_summe[$i] = ($section_summer[$i]/12);
                    $class_room_7_summe[$i] = ($section_summer[$i]/12);
                }

                for($i = 0; $i < count($section_summer); $i++){
                    $section_spring_sum = ($section_spring_sum+$section_spring[$i]);
                    $section_summer_sum = ($section_summer_sum+$section_summer[$i]);
                    $class_room_6_spring_sum = ($class_room_6_spring_sum+$section_spring[$i]);
                    $class_room_7_spring_sum = ($class_room_7_spring_sum+$section_spring[$i]);
                    $class_room_6_summer_sum = ($class_room_6_summer_sum+$section_summer[$i]);
                    $class_room_7_summer_sum = ($class_room_7_summer_sum+$section_summer[$i]);
                }

                for($i = 0; $i < count($section_summer); $i++){
                    echo "<tr><td>".$cls_size1[$i]."</td><td>".$section_spring[$i]."</td><td>".round($class_room_6_spring[$i],2).
                    "</td><td>".round($class_room_7_spring[$i],2)."</td><td>".round($section_summer[$i],2)."</td><td>".round($class_room_6_summe[$i],2).
                    "</td><td>".round($class_room_7_summe[$i],2)."</td></tr>";
                }

                echo"<tr><td>".'<b>TOTAL</b>'."</td><td>".$section_spring_sum."</td><td>".$class_room_6_spring_sum."</td><td>".
                $class_room_7_spring_sum."</td><td>".$section_summer_sum."</td><td>".$class_room_6_summer_sum."</td><td>".
                $class_room_7_summer_sum."</td></tr>";

                $conn->close();
                ?>

            </table>
        </div>
    </section>

    <!-- JavaScript add -->
    <?php include('javascript/javascript.php') ?>

</body>

</html>