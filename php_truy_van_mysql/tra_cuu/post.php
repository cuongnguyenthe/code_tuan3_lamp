<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<!--neu la chuyen sang trang hien thi thi action="a.php" trong <form>-->
<!--trong do a.php co cu phap giong nhu php ben duoi-->
<form method="POST">
    Username: <input type="text" name="username" value=""/> <br/>
    password: <input type="password" name="password" value=""/><br/>
    <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
</form>
<?php
// Nếu người dùng click vào button Gửi Dữ Liệu
// Vì button đó tên là form_click nên đó cũng là
// tên của key nằm trong biến $_POST
if (isset($_POST['form_click'])){
    echo 'Tên đăng nhập là: ' . $_POST['username'];
    echo '<br/>';
    echo 'Mật khẩu là: ' . $_POST['password'];
}
?>
</body>
</html>