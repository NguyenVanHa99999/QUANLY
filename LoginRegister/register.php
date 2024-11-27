
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>VANHASHOP | E-commerce </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/WEDASM2/images/Caesium.png" />

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="../../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../../plugins/slick/slick.css">
  <link rel="stylesheet" href="../../plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../styles/main.css">

  <script>
    function validateForm() {
      const username = document.forms["registerForm"]["username"].value.trim();
      const firstName = document.forms["registerForm"]["first_name"].value.trim();
      const lastName = document.forms["registerForm"]["last_name"].value.trim();
      const email = document.forms["registerForm"]["email"].value.trim();
      const password = document.forms["registerForm"]["password"].value;
      const confirmPassword = document.forms["registerForm"]["confirm_password"].value;
      const phone = document.forms["registerForm"]["phone"].value.trim();
      const errorMessage = document.getElementById("error-message");

      errorMessage.innerHTML = "";

      if (username === "" || firstName === "" || lastName === "" || email === "" || password === "" || confirmPassword === "" || phone === "") {
        errorMessage.innerHTML = "Vui lòng điền đầy đủ thông tin.";
        return false;
      }

      if (password.length < 6) {
        errorMessage.innerHTML = "Mật khẩu phải có ít nhất 6 ký tự.";
        return false;
      }

      if (password !== confirmPassword) {
        errorMessage.innerHTML = "Mật khẩu xác nhận không khớp.";
        return false;
      }

      return true;
    }
  </script>
</head>

<body id="body">
  <section class="menu">
    <nav class="navbar navigation">
      <div class="container">
        <div class="navbar-header">
          <h2 class="menu-title">Menu</h2>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div><!-- / .navbar-header -->

        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav">
            <!-- Home -->
            <li class="dropdown ">
              <a href="<?php echo '/QUANLY/index.php'; ?>">Home</a>
            </li><!-- / Home -->
          </ul><!-- / .nav .navbar-nav -->
        </div>
        <!--/.navbar-collapse -->
      </div><!-- / .container -->
    </nav>
  </section>

  <section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
            <a class="logo" href="index.php">
              <img src="../../images/logo.png" alt="logo">
            </a>
            <h2 class="text-center">Create Your Account</h2>
            <form name="registerForm" class="text-left clearfix" action="register_process.php" method="POST" onsubmit="return validateForm()">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="@gmail.com" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
              </div>

              <div id="error-message" class="text-danger mb-3"></div>

              <div class="text-center">
                <button type="submit" class="btn btn-main text-center">Register</button>
              </div>
            </form>
            <p class="mt-20">Already have an account?<a href="login.php"> Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* Center the logo */
    .logo img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }
  </style>

  <!-- Essential Scripts -->
  <script src="../../plugins/jquery/dist/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- Main Js File -->
  <script src="../../js/script.js"></script>

</body>

</html>
