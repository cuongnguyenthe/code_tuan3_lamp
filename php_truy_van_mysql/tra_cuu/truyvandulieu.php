<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
</style>
<body>
<div>
</div>
<?php
//try {
//    // Chuỗi kết nối
//    $conn = new PDO("mysql:host=localhost", 'root', '');
//
//    // Thiết lập chế độ exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // Câu truy vấn
//    $sql = "CREATE DATABASE Demo";
//
//    // Thực thi câu truy vấn
//    $conn->exec($sql);
//
//    // Thông báo thành công
//    echo "Tạo database thành công";
//}
//catch(PDOException $e)
//{
//    echo $e->getMessage();
//}
//-------------------------------------------------------------------
//try {
//    // Kết nối
//    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');
//
//    // Thiết lập chế độ exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // Câu lệnh SQL
//    $sql = "CREATE TABLE Users (
//        id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//        user_name VARCHAR(30) NOT NULL,
//        content TEXT,
//        add_date TIMESTAMP
//    )";
//
//    // Thực thi câu truy vấn
//    $conn->exec($sql);
//
//    echo "Tạo table thành công";
//}
//catch (PDOException $e) {
//    echo $e->getMessage();
//}
//----------------------------------------------------------------------
//try {
//    // Tạo kết nối
//    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');
//
//    // Cấu hình exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//    // Câu SQL Insert
//    $stmt = $conn->prepare("INSERT INTO News (title, content) VALUES (:title, :content)");
//    $stmt->bindParam(':title', $title);
//    $stmt->bindParam(':content', $content);
//
//    // Thực hiện thêm record
////    $conn->exec($sql);
//    $title = 'Tiêu đề mới';
//    $content = 'Nội dung mới';
//    $stmt->execute();
//
//    echo "Thêm record thành công";
//}
//catch (PDOException $e) {
//    echo $e->getMessage();
//}
//---------------------------------------------------------------------
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');

    // Thiết lập exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu SQL
    $stmt = $conn->prepare("SELECT * FROM Users");
//    $id;
//    $stmt->bindParam(':id',$id);
    // Thực thi câu truy vấn
    $stmt->execute();
    $result = $stmt;
//    foreach ($result as $item){
//        echo ' gồm: '.$item['id_user'].'-'.$item['user_name'].'-'.$item['content'].'<br/>';
//    }
    echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

    while($row = $stmt->fetch())
    {
        echo "<tr>";
        echo "<td>" . $row['id_user'] . "</td>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}
// Ngắt kết nối
$conn = null;
//---------------------------------------------------------------------
//try {
//    // Kết nối
//    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');
//
//    // Thiết lập exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // Câu SQL
//    $stmt = $conn->prepare("DELETE FROM News WHERE id = :id");
//    $id=2;
//    $stmt->bindParam(':id',$id);
//    // Thực thi câu truy vấn
//    $stmt->execute();
//    echo "xoa thanh cong";
//}
//catch (PDOException $e) {
//    echo 'Lỗi' . "<br>" . $e->getMessage();
//}
//// Ngắt kết nối
//$conn = null;
//-------------------------------------------------------------
//try {
//    // Kết nối
//    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');
//
//    // Thiết lập exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // Câu SQL
//    $stmt = $conn->prepare("DROP TABLE News");
////    $id=2;
////    $stmt->bindParam(':id',$id);
//    // Thực thi câu truy vấn
//    $stmt->execute();
//    echo "xoa thanh cong";
//}
//catch (PDOException $e) {
//    echo 'Lỗi' . "<br>" . $e->getMessage();
//}
//// Ngắt kết nối
//$conn = null;
?>
</body>
</html>