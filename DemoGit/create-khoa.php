<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tin khoa</title>
</head>
<body>
    <form name="frm" method="post" action="">
        <h1>Thêm mới thông tin khoa</h1>
        <table border="1px" wtdth="80%" align="center">
            <tbody>
                <?php
                    //xử lý khi người dùng nhấn nút thêm mới
                    /*
                        1. kết nối
                        2. lấy dữ liệu trên form
                        3. tạo truy vấn thêm mới (INSERT)
                        4. Thực thi câu lệnh truy vấn
                        5. Thông báo/hiển thị danh sách
                    */
                    $error='';
                    if(isset($_POST["bntNVDThemMoi"])){
                        $connect = new mysqli('localhost','root','','k22cnt3_day08');
                        $MAKHOA = $_POST["MAKHOA"];
                        $TENKHOA = $_POST["TENKHOA"];
                        $TRANGTHAI = $_POST["TRANGTHAI"];
                        $sql = "INSERT INTO KHOA(MAKHOA,TENKHOA,TRANGTHAI)";
                        $sql.="VALUES('$MAKHOA','$TENKHOA',$TRANGTHAI)";
                        //echo $sql;
                        // die();
                        if($connect->query($sql)){
                            header("Location:read-khoa.php");
                        }else{
                            $error="Lỗi thêm mới,". $connect->error;
                        }
                    }
                ?>
                <tr>
                    <td>Mã khoa</td>
                    <td>
                        <input type="text" name="MAKHOA" id="MAKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Tên khoa</td>
                    <td>
                        <input type="text" name="TENKHOA" id="TENKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Trạng thái</td>
                    <td>
                        <select name="TRANGTHAI" id="TRANGTHAI">
                            <option value="1">Hoạt động</option>
                            <option value="2">Tạm dừng</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Thêm mới" name="btnNVDThemMoi">
                    </td>
                </tr>
            </tbody>
        </table>
        <div><?php echo $error;?></div>
    </form>
</body>
</html>