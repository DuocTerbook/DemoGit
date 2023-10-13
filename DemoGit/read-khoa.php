<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khoa</title>
</head>
<body>
    <?php
        //truy xuất dữ liệu từ csdl
         $connect = new mysqli('localhost','root','','k22cnt3_day08');
         $sql = "SELECT * FROM KHOA WHERE 1=1";
         $resultSet = $connect->query($sql);
         // print_r($resultSet);
        //  while($row = $resultSet->fetch_array()){
        //      echo "<p>". $row[0]."---".$row["TENKHOA"];
        //  }
    ?>
    <h1>Danh sách khoa</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MÃ KHOA</th>
                <th>TÊN KHOA</th>
                <th>TRẠNG THÁI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt=0;
                while($row = $resultSet->fetch_array()){
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt;?></td>
                    <td><?php echo $row["MAKHOA"];?></td>
                    <td><?php echo $row["TENKHOA"];?></td>
                    <td><?php echo $row["TRANGTHAI"];?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>