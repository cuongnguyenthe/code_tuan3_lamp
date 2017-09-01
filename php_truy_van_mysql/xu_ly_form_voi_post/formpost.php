<!DOCTYPE html>
<html>
<head>
    <title>Freetuts.net - xử lý form với POST</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ứng dụng đăng nhập</h1>
<form method="post" action="formpost.php">
    Username: <input type="text" name="username" value=""/> <br/> <br/>
    Password: <input type="password" name="password" value=""/> <br/> <br/>
    <input type="submit" name="btn" value="Đang Nhập"/>
</form>
<?php
//$password = $_POST['password'];
//lay thong tin tu fom password va in ra bang ham $_POST
//echo $_POST['password'];

if ($_POST['btn'])
{
    // B1: Lấy thông tin la isset
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // B2: Kiểm tra dữ liệu
    if (!$password || !$username){
        echo 'Bạn chưa nhập đủ thông tin';
    }
    else if ($password != 'thehalfheart' || $username != 'freetuts.net'){
        echo 'Thông tin đăng nhập bị sai';
    }
    else{
        echo 'Đăng nhập thành công!';
    }
}
?>
</body>
</html>