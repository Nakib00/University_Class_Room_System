<!-- Include navbar -->
<?php include('navbar.php') ?>

<!-- Include javascript file  -->
<?php include('javascript.php') ?>


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

    <title>TCMS</title>
</head>

<body>
    <!-- Using heading title -->
    <div>
        <H1 class="title">Welcome to the TCMS Dashboard</H1>
    </div>
    <hr><br><br>

    <!-- Include Button Component -->
    <?php include('Button.php') ?>

</body>

</html>