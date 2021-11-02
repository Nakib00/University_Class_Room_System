<!-- Include navbar -->
<?php include('navbar.php') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include CSS  -->
    <?php include('CSS.php') ?>
    <!-- Include Table CSS -->
    <?php include('Table_css.php') ?>

    <title>TCMS</title>

</head>

<body>
    <!-- Using heading title -->
    <div>
        <H1 class="title">Classroom requirement as per course offering</H1>
    </div>
    <hr>
    <br><br>

    <!-- add table -->
    <table class="center">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>password</th>
        </tr>

        <?php
        //make connection variable
        $servername = "localhost";
        $username = "root";
        // $pas = "";
        $database = "webapp";

        // creat connection
        $conn = mysqli_connect($servername, $username, "", $database);

        if ($conn->connect_errno) {
            die("Error connecting" . $conn->connect_error);
        }
        $sql = "SELECT id, username, password FROM users";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }

        $conn->close();

        ?>

    </table><br><br><br>

    <!-- chats add  -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 20],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

    <div id="donutchart" class="chats" style="width: 900px; height: 500px;"></div>

</body>

</html>