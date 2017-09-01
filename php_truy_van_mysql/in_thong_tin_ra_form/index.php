<?php

try {
    // Kết nối CSDL
    $conn = new PDO("mysql:host=localhost;dbname=Demo", 'root', '');

    // Khai báo exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sử đụng Prepare chua het
    $stmt = $conn->prepare("SELECT * FROM users WHERE id_user=1");

    // Thực thi câu truy vấn
    $stmt->execute();

    // Khai báo fetch kiểu mảng kết hợp
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả(neu dung foreach tuc la duyet mang thi phai dung fetchAll()
    $result = $stmt->fetch();

    //Lặp kết quả
//    foreach ($result as $item){
//        echo $item['id'] . ' - '. $item['title'].'-'.$item['content']."-".$item['add_date'];
//    }

}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
//---------------------------------------------------------------------

?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
</style>
<body>
<div>
    mã tin: <form><input type="text" id="mot" name="one" value="<?php echo $result['id_user']?>"></form>
    tiêu đề tin: <form><input type="text" id="hai" name="two" value="<?php echo $result['user_name']?>"></form>
    nội dung: <form><input type="text" id="ba" name="three" value="<?php echo $result['content']?>"></form>
    ngày đăng: <form><input type="text" id="bon" name="four" value="<?php echo $result['add_date']?>"></form>
</div>
</body>
</html>