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
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>

            <!-- Admin profile -->
            <div class="profile-details">
                <img src="OIP.jpg" alt="">
                <span class="admin_name">Admin</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <!-- Titale of the page -->
        <div class="home-content">
            <div class="titlel"><H2>Revenue of IUB</H2></div>
        </div>

        <!-- Table showing  -->
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Table</div>
                    <div class="sales-details">
                        <div class="">
                            <!-- add table -->
                            <table class="center">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>password</th>
                                    <th>City</th>
                                </tr>

                                <?php

                                //Connect with the database
                                include('DataBase/connection.php');

                                if ($conn->connect_errno) {
                                    die("Error connecting" . $conn->connect_error);
                                }

                                //USE the SQL query Here
                                $sql = "SELECT users.id, users.username, users.password,addrse.city
        FROM users INNER JOIN addrse ON users.id=addrse.id;
        ";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>" . $row['city'] . "</td></tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "0 result";
                                }

                                $conn->close();

                                ?>

                            </table>
                        </div>
                    </div>
                </div>

                <!-- chart showing -->
                <div class="top-sales box">
                    <div class="title">chart</div>

                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>