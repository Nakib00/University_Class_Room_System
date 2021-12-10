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

    <title>TCMS</title>
</head>

<body>

    <!-- Animation of the page -->
    <section class="home-section">
        <!-- Admin nav add  -->
        <?php include('AdminNav.php') ?>

        <!-- Table showing  -->
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <H2>Import CSV File</H2>
                    <div class="panel-body">
                        <span id="message"></span>
                        <form id="sample_form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Select CSV File</label>
                                <input type="file" name="file" id="file" accept=".csv" />
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="hidden_field" value="1" />
                                <input type="submit" name="import" id="import" class="btn" value="Import" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript add -->
    <?php include('javascript/javascript.php') ?>

</body>

</html>