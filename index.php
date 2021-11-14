<!doctype html>
<html lang="en">

<head>
    <title>TCMS</title>
    <!-- Include navbar -->
    <?php include('login_css.php') ?>
</head>

<body>
    <form action="base.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>