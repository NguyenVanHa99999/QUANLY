<?php
// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/QUANLY/config/connect.php';


$conn = getDatabaseConnection();
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin từ form đăng ký
    $username = trim($_POST['username']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $phone = trim($_POST['phone']);
    
    // Gán giá trị mặc định cho role_id là 3 (Student)
    $role_id = 3; // Mặc định là Student

    // Kiểm tra thông tin
    if (empty($username) || empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password) || empty($phone)) {
        die('Vui lòng điền đầy đủ thông tin.');
    }

    if ($password !== $confirm_password) {
        die('Mật khẩu xác nhận không khớp.');
    }

    // Kiểm tra email trùng lặp
    $checkStmt = $conn->prepare("SELECT COUNT(*) FROM Users WHERE Email = :email");
    $checkStmt->bindParam(':email', $email);
    $checkStmt->execute();
    $emailCount = $checkStmt->fetchColumn();

    if ($emailCount > 0) {
        die('Email này đã được đăng ký. Vui lòng sử dụng email khác.');
    }

    // Kiểm tra username trùng lặp
    $checkUsernameStmt = $conn->prepare("SELECT COUNT(*) FROM Users WHERE Username = :username");
    $checkUsernameStmt->bindParam(':username', $username);
    $checkUsernameStmt->execute();
    $usernameCount = $checkUsernameStmt->fetchColumn();

    if ($usernameCount > 0) {
        die('Username này đã được đăng ký. Vui lòng sử dụng username khác.');
    }

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Thêm người dùng mới vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO Users (Username, Password, FirstName, LastName, Email, Phone, RoleID) VALUES (:username, :password, :first_name, :last_name, :email, :phone, :role_id)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':role_id', $role_id);

    if ($stmt->execute()) {
        echo 'Đăng ký thành công!';
        // Chuyển hướng đến trang đăng nhập
        header("Location: /QUANLY/LoginRegister/login.php");
        exit(); // Kết thúc script sau khi chuyển hướng
    } else {
        echo 'Lỗi xảy ra. Vui lòng thử lại!';
    }
}
?>
