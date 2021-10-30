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
    </style>

    <!-- javascript file add  -->

    <script>
        // Event for click button
        function one_clicked() {
            document.location.href = "01_button.php";
        }

        function two_clicked() {
            document.location.href = "02_button.php";
        }

        function three_clicked() {
            document.location.href = "03_button.php";
        }

        function fore_clicked() {
            document.location.href = "04_button.php";
        }

        function five_clicked() {
            document.location.href = "05_button.php";
        }

        function six_clicked() {
            document.location.href = "06_button.php";
        }

        function saven_clicked() {
            document.location.href = "07_button.php";
        }

        function eight_clicked() {
            document.location.href = "08_button.php";
        }
    </script>


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
        <H1 class="title">Welcome to the TCMS Dashboard</H1>
    </div>
    <hr>

    <!-- Add javascript file -->
    <script src="java.js"></script>

    <!-- using button -->
    <br><br>
    <div class="container">
        <div class="container-a">
            <div class="row">
                <div class="col">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-info" type="button" onclick="one_clicked()">Classroom requirement</button><br>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-info" type="button" onclick="two_clicked()">Course enrolment distribution</button><br>
                    </div>
                </div>
            </div>
            <div class="container-b">
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-outline-info" type="button" onclick="three_clicked()">Usage of resources</button><br>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-outline-info" type="button" onclick="fore_clicked()">IUB available resources</button><br>
                        </div>
                    </div>
                </div>

                <div class="container-c">
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-info" type="button" onclick="five_clicked()">Availability and course offering</button><br>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-info" type="button" onclick="six_clicked()">Revenue of IUB</button><br>
                            </div>
                        </div>
                    </div>

                    <div class="container-d">
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-info" type="button" onclick="saven_clicked()">Revenue Engineering School</button><br>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-info" type="button" onclick="eight_clicked()">students Enrollment</button><br>
                                </div>
                            </div>
                        </div>

</body>

</html>