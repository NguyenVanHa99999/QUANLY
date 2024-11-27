<?php
// Mã để bắt đầu phiên và các thiết lập nếu cần
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard - Teacher Management</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/studentmanagement/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Inline CSS for Sidebar Toggle -->
    <style>
        .sidebar.hidden {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="assets/img/studentmanagement/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>

                <div class="sidebar-wrapper">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <!-- Admin Dashboard Section -->
                            <li class="nav-section">
                                <span class="sidebar-mini-icon"><i class="fa fa-cogs"></i></span>
                                <h4 class="text-section">Admin Dashboard</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#adminDashboard">
                                    <i class="fas fa-tools"></i>
                                    <p>Admin Management</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="adminDashboard">
                                    <ul class="nav nav-collapse">
                                        <li><a href="AdminDashboard/Attendancemanagement.php"><i class="fas fa-calendar-check"></i><span class="sub-item">Attendance Management</span></a></li>
                                        <li><a href="AdminDashboard/Classroommanagement.php"><i class="fas fa-school"></i><span class="sub-item">Classroom Management</span></a></li>
                                        <li><a href="AdminDashboard/Subjectmanagement.php"><i class="fas fa-book"></i><span class="sub-item">Subject Management</span></a></li>
                                        <li><a href="AdminDashboard/Usermanagement.php"><i class="fas fa-users-cog"></i><span class="sub-item">User Management</span></a></li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Teacher Section -->
                            <li class="nav-section">
                                <span class="sidebar-mini-icon"><i class="fa fa-chalkboard-teacher"></i></span>
                                <h4 class="text-section">Teacher</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#teacherSection">
                                    <i class="fas fa-user-tie"></i>
                                    <p>Teacher Management</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="teacherSection">
                                    <ul class="nav nav-collapse">
                                        <li><a href="Teacher/Studentattendance.php"><i class="fas fa-user-check"></i><span class="sub-item">Student Attendance</span></a></li>
                                        <li><a href="Teacher/Teachingschedule.php"><i class="fas fa-calendar-alt"></i><span class="sub-item">Teaching Schedule</span></a></li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Student Section -->
                            <li class="nav-section">
                                <span class="sidebar-mini-icon"><i class="fa fa-user-graduate"></i></span>
                                <h4 class="text-section">Student</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#studentSection">
                                    <i class="fas fa-users"></i>
                                    <p>Student Management</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="studentSection">
                                    <ul class="nav nav-collapse">
                                        <li><a href="Student/CheckAttendance.php"><i class="fas fa-clipboard-check"></i><span class="sub-item">Check Attendance</span></a></li>
                                        <li><a href="Student/Listofsubjects.php"><i class="fas fa-list"></i><span class="sub-item">List of Subjects</span></a></li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Login & Register Section -->
                            <li class="nav-section">
                                <span class="sidebar-mini-icon"><i class="fa fa-lock"></i></span>
                                <h4 class="text-section">Login & Register</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#authSection">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <p>Authentication</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="authSection">
                                    <ul class="nav nav-collapse">
                                        <li><a href="/QUANLY/LoginRegister/login.php"><i class="fas fa-sign-in-alt"></i><span class="sub-item">Login</span></a></li>
                                        <li><a href="/QUANLY/LoginRegister/register.php"><i class="fas fa-user-plus"></i><span class="sub-item">Register</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->