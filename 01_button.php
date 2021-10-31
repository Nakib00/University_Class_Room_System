<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS File Add  -->
    <style>
        .nav-bd {
            background-color: #CAC9F6;
        }

        .title {
            text-align: center;
        }

        /* Table style */

        table {
            position: absolute;
            z-index: 2;
            left: 45%;
            top: 30%;
            width: 50%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
            border-radius: 12px 12px 0 0;
            overflow: hidden;
        }

        td,
        th {
            padding: 15px 20px;
            text-align: center;
        }

        th {
            background-color: black;
            color: #fafafa;
            font-family: 'Open Sans', Sans-serif;
            font-weight: 200;
            text-transform: uppercase;

        }

        tr {
            width: 100%;
            background-color: #fafafa;
            font-family: 'Montserrat', sans-serif;
        }

        tr:nth-child(even) {
            background-color: #eeeeee;
        }
    </style>

    <title>TCMS</title>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-light nav-bd">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">TCMS</span>
        </div>
    </nav>

    <br><br><br>
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