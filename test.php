<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dropdown CSS  -->
    <?php include('CSS/dropdown.php') ?>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="semister_select">
            <form class="form-horizontal" action="test.php" method="get">
                <h3>Input Semister For Comparison</h3>
                <p>First Semister</p>
                <input type="text" placeholder="SEMISTER" name="semister1" id="semister1" required>
                <input type="text" placeholder="YEAR" name="semister_year1" id="semister_year1" required><br>
                <p>Second Semister</p>
                <input type="text" placeholder="SEMISTER" name="semister2" id="semister1" required>
                <input type="text" placeholder="YEAR" name="semister_year2" id="semister_year1" required><br>
                <button type="submit" class="submit_button">Submit</button>
            </form>
        </div>
    </div>

    <?php 
    $semister1="";
    $semister2="";
    $semister_year1="";
    $semister_year2="";


    $semister1=$_GET["semister1"];
    $semister2=$_GET["semister2"];
    $semister_year1=$_GET["semister_year1"];
    $semister_year2=$_GET["semister_year2"];

    echo $semister1;
    echo $semister2;
    echo $semister_year1;
    echo $semister_year2;
    
    ?>
</body>

</html>