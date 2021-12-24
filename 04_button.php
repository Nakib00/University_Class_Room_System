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
                <H2>IUB Available Resources</H2>
            </div> 
        </div>

        <!-- Table showing  -->
        <div class="home-content">
            <!-- add table -->
            <table class="center">
                <tr>
                    <th>Class size</th>
                    <th>IUB resource</th>
                    <th>Capacity</th>
                </tr>
                <?php

                //Connect with the database
                include('DataBase/connection.php');

                if ($conn->connect_errno) {
                    die("Error connecting" . $conn->connect_error);
                }


                //USE the SQL query Here
                $sql = "SELECT capacity,room_capacity,coffer_course_id FROM summer21;
        ";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['capacity'] . "</td><td>" . $row['room_capacity'] . "</td><td>" . $row['coffer_course_id'] .  "</td></tr>";
                    }
                } else {
                    echo "0 result";
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