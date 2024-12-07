<?php
$inc=include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobi=$_POST['mob'];
    $password=$_POST['pass'];
    $ins="insert into user(Name,Email,Mobile,Password)values('$name','$email','$mobi','$password')";
    $result=mysqli_query($conn,$ins);
    if($result){
        header(header:"location:userlistshow.php");
    }
    else{
        die(mysqli_error($conn,));
    }
}
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
                <li class="nav-item mb-1"><a href="adduser.php" class="nav-link text-light fw-bold"><i class='bx bxs-add-to-queue' ></i> Add User</a></li>
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
            <div class="container p-3" style="height: 550px; background-color: #bdc3c7;">
                <div class="row p-3">
                    <div class="col-md-6 bg-light p-3 mx-auto" style="border-radius: 15px;">
                        <form action="" method="post">
                            <label>Name</label>
                            <input type="text" class="form-control mb-3" name="name">
                            <label>Email</label>
                            <input type="email" class="form-control mb-3" name="email">
                            <label>Mobile</label>
                            <input type="number" class="form-control mb-3" name="mob">
                            <label>Password</label>
                            <input type="password" class="form-control mb-3" name="pass">
                            <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
                        </form>
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