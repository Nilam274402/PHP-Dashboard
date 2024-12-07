<?php
$inc = include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .sidebar {
            background-color: #2c3e50;
            color: #fff;
            min-height: 100vh;
        }

        .sidebar a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #fff;
        }

        .navbar {
            /* background-color: #34495e; */
            color: black;
        }

        .card {
            text-align: center;
            height: 120px;
            border-left: 4px solid blue;
            color: blue;
        }

        .top-shadow {
            box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2);
        }

        .clickable-card {
            text-decoration: none;
        }

        .bx {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['nilam'])) {
        $_SESSION['nilam'] = "Please log in first !";

        header(header: "location: login.php");
    }
    ?>
    <div class="d-flex">

        <!-- Sidebar -->
        <div class="sidebar p-3" style="width: 400px;">
            <div class="text-center">
                <img src="image/nil7.jpg" alt="User" class="rounded-circle" width="80" height="80">
                <h5 class="mt-2 fw-bold">NILAM YADAV</h5>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item mb-1"><a href="dashboard2.php" class="nav-link text-light"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
                <hr class="mb-1">
                <small class="p-3" style="font-weight: bold; color: gray;">ABOUT</small>
                <li class="nav-item mb-1"><a href="#" class="nav-link text-light fw-bold"><i class='bx bx-image'></i> Gallery</a></li>
                <li class="nav-item mb-1"><a href="changepass.php" class="nav-link text-light fw-bold"><i class='bx bxl-blogger'></i> Change Password </a></li>
                <li class="nav-item mb-1"><a href="userlist.php" class="nav-link text-light fw-bold"><i class='bx bxs-contact'></i> User-List-Show</a></li>
                <li class="nav-item mb-1"><a href="#" class="nav-link text-light fw-bold"><i class='bx bxs-user-circle'></i> Admin Profile</a></li>
                <hr class="mb-1">
                <li class="nav-item mb-1"><a href="adduser.php" class="nav-link text-light fw-bold"><i class='bx bxs-add-to-queue'></i> Add User</a></li>
                <li class="nav-item mb-1"><a href="logout.php" class="nav-link text-light fw-bold"><i class='bx bx-log-out-circle'></i> Logout</a></li>
                <hr class="mb-1">
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-100">
            <!-- Navbar -->
            <nav class="navbar shadow navbar-expand-lg p-3">
                <div class="container-fluid">
                    <?php
                    echo "<p style='color: green;'>" . $_SESSION['nilam'] . "</p>"
                    ?>
                    <div class="d-flex">
                        <small class="text-dark mt-2 m-2 fw-bold">NILAM</small>
                        <img src="image/img1.png" alt="User" class="rounded-circle" width="40">

                    </div>
                </div>
            </nav>

            <!-- Dashboard Cards -->
            <div class="container bg-light" style="height: 550px;">
                <div class="row p-5">
                    <div class="col-sm-10 mx-auto">
                        <button class="btn btn-primary mb-3"><a href="adduser.php" class="text-light">Add User</a></button>
                        <table class="table table-hover table-bordered table-info">
                            <thead class="table-danger">
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Mobile</td>
                                    <td>Password</td>
                                    <td>Operations</td>
                                </tr>
                            </thead>
                            <?php
                            $sel = "select * from user";
                            $result = mysqli_query($conn, $sel);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $name = $row['Name'];
                                    $email = $row['Email'];
                                    $mobile = $row['Mobile'];
                                    $password = $row['Password'];

                                    echo "<tr>
                     <td>" . $id . "</td>
                     <td>" . $name . "</td>
                     <td>" . $email . "</td>
                     <td>" . $mobile . "</td>
                     <td>" . $password . "</td>
                     <td>
                     <button class='btn btn-primary'><a href='update.php?updateid=$id' class='text-light'>Update</a></button>
                     <button class='btn btn-danger'><a href='delete2.php?idd=$id'  class='text-light'>Delete</a></button>
                     </td>
                  </tr>";
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row text-center top-shadow">
                    <p class="mt-3 fw-bold">Copyright @ 2024 | Nilam | Design by Me</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>