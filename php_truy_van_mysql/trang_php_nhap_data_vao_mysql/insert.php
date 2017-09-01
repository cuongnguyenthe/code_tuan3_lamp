<?php

//try {
//    // Tạo kết nối
//    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');
//
//    // Cấu hình exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//    // Câu SQL Insert
//    $stmt = $conn->prepare("INSERT INTO users (user_name, content) VALUES (:username, :content)");
//    $stmt->bindParam(':username', $username);
//    $stmt->bindParam(':content', $content);
//
//    // Thực hiện thêm record
////    $conn->exec($sql);
//    $username = $_POST['name'];
//    $content = $_POST['content'];
//    $stmt->execute();
//
//    echo "Thêm record thành công";
//}
//catch (PDOException $e) {
//    echo $e->getMessage();
//}

$username = $_POST['name'];
$content = $_POST['content'];

if($username == '' || $content == ''){
    echo 'Lỗi nhập dữ liệu';
    echo '<p><a href="insertdb.php">Tải lại</p>';
}
else {
    try {
    // Tạo kết nối
    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');

    // Cấu hình exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // Câu SQL Insert
    $stmt = $conn->prepare("INSERT INTO users (user_name, content) VALUES (:username, :content)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':content', $content);

    // Thực hiện thêm record
//    $conn->exec($sql);
//    $username = $_POST['name'];
//    $content = $_POST['content'];
    $stmt->execute();

    echo "Thêm record thành công";
}
catch (PDOException $e) {
    echo $e->getMessage();
}
}
?>