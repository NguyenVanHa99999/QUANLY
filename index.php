<?php
// Gọi header.php
include('components/header.php');
?>

<!-- Main Panel -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Van Ha School Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Public Sans', sans-serif;
            background: url('img/NEN.png') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .welcome-container {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 30px 50px;
            border-radius: 15px;
        }

        .welcome-container img {
            width: 120px;
            margin-bottom: 20px;
        }

        .welcome-container h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .welcome-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .welcome-container .btn {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .welcome-container .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <img src="img/Caesium.png" alt="Van Ha School Logo">
        <h1>Welcome to Van Ha School Management System</h1>
        <p>Please log in or register to access our modern learning management system.</p>
        <a href="/QUANLY/LoginRegister/login.php" class="btn">Log In</a>
        <a href="/QUANLY/LoginRegister/register.php" class="btn">Register</a>
    </div>
</body>

</html>
<!-- End Main Panel -->

<?php
// Gọi footer.php
include('components/footer.php');
?>