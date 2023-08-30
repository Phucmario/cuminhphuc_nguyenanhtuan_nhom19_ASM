<?php

include 'ketnoi.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `dangky` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if(!$result){

        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="font-src 'self'">
    <title>Minh Phúc và Anh Tuấn ASM </title>
    <link rel="stylesheet" href="css/dangnhap-dangki.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <img src="anh/TP SHOE SPORT.png" alt="logo">
        <nav>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="sanpham.html">Sản phẩm</a></li>
                <li><a href="dangnhap.html">đăng nhập</a></li>
                <li><a href="dangki.html">đăng kí</a></li>
                <li><a href="giohang.html">giỏ hàng</a></li>
            </ul>
        </nav>
        <form action="timkiem.html" method="GET">
            <input type="text" name="q" placeholder="Tìm kiếm...">
            <button type="submit">Tìm</button>
        </form>
    </header>

    <div class="logup">
        <h2>Đăng ký tài khoản</h2>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="nhap ten" name="name" autocomplete="off">

            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="nhap email" name="email" autocomplete="off">

            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="nhap so dien thoai" name="mobile" autocomplete="off">

            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="nhap mat khau" name="password" autocomplete="off">
            </div>
            <input type="submit" value="Đăng ký" name="submit">
        </form>
    </div>
</body>

</html>