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

        .table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        .th {
            background-color: #d96459;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <title>TCMS</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-light nav-bd fixed-top">
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

    <table>
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

    </table>

</body>

</html>