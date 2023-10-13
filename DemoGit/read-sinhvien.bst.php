<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <?php
        //truy xuất dữ liệu từ csdl
         $connect_nvd = new mysqli('localhost','root','','k22cnt3_day08');
         $sql_nvd = "SELECT * FROM KHOA WHERE 1=1";
         $nguyenvanduoc = $connect_nvd->query($sql);
         // print_r($resultSet);
        //  while($row = $resultSet->fetch_array()){
        //      echo "<p>". $row[0]."---".$row["TENKHOA"];
        //  }
    ?>
    <h1>Danh sách sinh viên</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MÃ SV</th>
                <th>HỌ TÊN</th>
                <th>TÊN</th>
                <th>NGÀY SINH</th>
                <th>GIỚI TÍNH</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th>
                <th>EMAIL</th>
                <th>TRẠNG THÁI</th>
                <th>MÃ KHOA</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result_nvd->num_rows){
                $stt=0;
                while($row_nvd = $result_nvd->fetch_array()){
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt;?></td>
                    <td><?php echo $row_nvd["MASV"];?></td>
                    <td><?php echo $row_nvd["HOSV"];?></td>
                    <td><?php echo $row_nvd["TENSV"];?></td>
                    <td><?php echo $row_nvd["NGAYSINH"];?></td>
                    <td><?php echo $row_nvd["GIOITINH"];?></td>
                    <td><?php echo $row_nvd["DIACHI"];?></td>
                    <td><?php echo $row_nvd["DIENTHOAI"];?></td>
                    <td><?php echo $row_nvd["EMAIL"];?></td>
                    <td><?php echo $row_nvd["TRANG THAI"];?></td>
                    <td><?php echo $row_nvd["MAKHOA"];?></td>
                </tr>
            <?php
                }//end while
            }else{
            ?>   
                <tr>
                    <td>chưa có sinh viên nào</td>
                </tr>
            <?php
            }//end if
                //kết thúc lặp
            ?>
        </tbody>
    </table>
</body>
</html>