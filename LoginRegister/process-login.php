<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/QUANLY/config/connect.php';




// Lấy dữ liệu từ form đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Kiểm tra nếu trường email và password không trống
    if (empty($email) || empty($password)) {
        echo "Vui lòng nhập đầy đủ thông tin!";
        exit();
    }

    // Kết nối đến cơ sở dữ liệu
    $conn = getDatabaseConnection();

    // Kiểm tra nếu kết nối cơ sở dữ liệu không thành công
    if (!$conn) {
        die("Kết nối cơ sở dữ liệu không thành công!");
    }

    // Truy vấn kiểm tra email tồn tại trong cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Email = :email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
    if ($user && password_verify($password, $user['Password'])) {
        // Lưu thông tin người dùng vào session
        // session_start();
        // $_SESSION['user_id'] = $user['UserID'];  // Lưu ID người dùng
        // $_SESSION['username'] = $user['Username'];  // Lưu tên người dùng
        // $_SESSION['role_id'] = $user['RoleID'];  // Lưu vai trò của người dùng

        // Chuyển hướng đến trang dashboard hoặc trang chủ
        header("Location: /QUANLY/index.php");
        exit();  // Kết thúc script sau khi chuyển hướng
    } else {
          $_SESSION['error_message'] = "Email hoặc mật khẩu không chính xác!";
        header("Location: /QUANLY/LoginRegister/login.php");
        exit();
    }
}
?>
