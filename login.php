<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: #0f3460;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row p-5">
            <div class="col-sm-12 p-5">
                <div class="col-sm-6 mx-auto p-3 text-dark bg-light" style="border-radius: 15px; color: #0f3460;">
                    <h1 class="text-center">Login</h1>
                    <?php
                    session_start();
                    if (isset($_SESSION['nilam'])) {
                        echo "<p style='color: green;'>" . $_SESSION['nilam'] . "</p>";
                        unset($_SESSION['nilam']);
                    }
                    ?>
                    <form action="logincode.php" method="post">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control mb-3">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control mb-3">
                        <button type="submit" class="btn btn-danger mb-3">Login</button>
                        <a href="signup.php" class="btn btn-danger mb-3">Signup</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>