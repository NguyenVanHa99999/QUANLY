<?php
class DatabaseConnection {
    private static $instance = null;
    private $conn;

    // Hàm khởi tạo kết nối CSDL
    private function __construct() {
        $host = 'localhost';
        $db_name = 'AttendanceManagement'; // Tên CSDL
        $username = 'root'; // Tên người dùng
        $password = ''; // Mật khẩu

        try {
            // Thiết lập kết nối
            $this->conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Xử lý lỗi nếu kết nối thất bại
            error_log("Database Connection Error: " . $e->getMessage());
            throw $e;
        }
    }

    // Hàm lấy kết nối cơ sở dữ liệu
    public static function getInstance() {
        if (self::$instance === null) {
            try {
                self::$instance = new self();
            } catch (PDOException $e) {
                // Nếu có lỗi, trả về null
                return null;
            }
        }
        return self::$instance;
    }

    // Hàm trả về đối tượng kết nối PDO
    public function getConnection() {
        return $this->conn;
    }
}

// Hàm trợ giúp để lấy kết nối
function getDatabaseConnection() {
    $db = DatabaseConnection::getInstance();
    return $db ? $db->getConnection() : null;
}

// Kiểm tra kết nối (ví dụ: để test file này)
try {
    $conn = getDatabaseConnection();
    if ($conn) {
        echo "Kết nối CSDL thành công!";
    } else {
        echo "Không thể kết nối CSDL!";
    }
} catch (PDOException $e) {
    echo "Lỗi kết nối CSDL: " . $e->getMessage();
}
?>
