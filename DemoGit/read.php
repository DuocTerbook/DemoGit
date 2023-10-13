<?php
    //1. kết nối đến máy chủ csdl(mysqli)
    //2. tạo truy vấn đọc dữ liệu tư bản
    //3. thực thi câu lệnh truy vấn($mysqli->query)=> trả về 1 tập kết quả
    //4. duyệt dữ liệu trong tập kết quả => hiển thị (fetch)
    //============Thực hiện
    $connect = new mysqli('localhost','root','','k22cnt3_day08');
    $sql = "SELECT * FROM KHOA WHERE 1=1";
    $resultSet = $connect->query($sql);
    // print_r($resultSet);
    while($row = $resultSet->fetch_array()){
        echo "<p>". $row[0]."---".$row["TENKHOA"];
    }
?>