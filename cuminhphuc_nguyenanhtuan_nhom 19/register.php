<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "thanhvien";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $province = $_POST["province"];
    $address = $_POST["address"];
    $email = $_POST["email"];

    // Chuẩn bị câu lệnh INSERT để chèn dữ liệu vào bảng thành viên
    $sql = "INSERT INTO members (username, password, phone, province, address, email)
            VALUES ('$username', '$password', '$phone', '$province', '$address', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành viên thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>