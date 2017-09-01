<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    #banner{
        width: 100%;
        height: 100px;
        background-color: #1b6d85;
    }
    #content{
        width: 100%;
        height: 500px;
        background-color: #b2dba1;
    }
    #footer{
        width: 100%;
        height: 100px;
        background-color: #1b6d85;
    }
    #ql th{
        background-color: yellow;
    }
    #ql td{
        text-align: justify;
        background-color: #5280DD;
    }
</style>
<body>
<div id="banner"></div>
<div id="content">
    <?php
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
        echo "<table id='ql' border='1'>
        <tr>
        <th>mã nhân viên</th>
        <th>tên nhân viên</th>
        <th>thao tác sửa</th>
        <th>thao tác xóa</th>

        </tr>";

        while($row = $stmt->fetch())
        {
            echo "<tr>";
            echo "<td>" . $row['id_user'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td><form><input type='button' value='sửa'></form></td>";
            echo "<td><form><input type='button' value='xóa'></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    catch (PDOException $e) {
        echo 'Lỗi' . "<br>" . $e->getMessage();
    }
    // Ngắt kết nối
    $conn = null;
    ?>
</div>
<div id="footer"></div>
</body>
</html>