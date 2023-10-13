<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tin khoa</title>
</head>
<body>
    <form name="frm" method="post" action="">
        <h1>Thêm mới thông tin sinh viên</h1>
        <table border="1px" wtdth="80%" align="center">
            <tbody>
                <?php
                    //xử lý khi người dùng nhấn nút thêm 
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
                        $MASV = $_POST["MASV"];
                        $HOSV = $_POST["HOSV"];
                        $TENSV = $_POST["TENSV"];
                        $NGAYSINH = $_POST["NGAYSINH"];
                        $GIOITINH = $_POST["GIOITINH"];
                        $DIACHI = $_POST["DIACHI"];
                        $DIENTHOAI = $_POST["DIENTHOAI"];
                        $EMAIL= $_POST["EMAIL"];
                        $TRANGTHAI = $_POST["TRANGTHAI"];
                        $MAKH = $_POST["MAKH"];
                        $sql = "INSERT INTO SINHVIEN(MASV,HOSV,TENSV,NGAYSINH,GIOITINH,DIACHI,DIENTHOAI,EMAIL,TRANGTHAI,MAKH)";
                        $sql.="VALUES('$MASV','$HOSV','$TENSV','$NGAYSINH','$GIOITINH','$DIACHI','$DIENTHOAI','$EMAIL',$TRANGTHAI,' $MAKH ')";
                        //echo $sql;
                        // die();
                        if($connect->query($sql)){
                            header("Location:read-sinhvien.php");
                        }else{
                            $error="Lỗi thêm mới,". $connect->error;
                        }
                    }
                ?>
                <tr>
                    <td>Mã sinh viên</td>
                    <td>
                        <input type="text" name="MASV" id="MASV">
                    </td>
                </tr>
                <tr>
                    <td>Họ sinh viên</td>
                    <td>
                        <input type="text" name="HOSV" id="HOSV">
                    </td>
                </tr>
                <tr>
                    <td>Tên sinh viên</td>
                    <td>
                        <input type="text" name="TENSV" id="TENSV">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td>
                        <input type="text" name="NGAYSINH" id="NGAYSINH">
                    </td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <input type="text" name="GIOITINH" id="GIOITINH">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type="text" name="DIACHI" id="DIACHI">
                    </td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td>
                        <input type="text" name="DIENTHOAI" id="DIENTHOAI">
                    </td>
                </tr><tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="EMAIL" id="EMAIL">
                    </td>
                </tr>
                <tr>
                    <td>Trạng thái</td>
                    <select name="TRANGTHAI" id="TRANGTHAI">
                        <option value="1">Hoạt động</option>
                        <option value="2">Tạm dừng</option>
                    </select>
                </tr>
                <tr>
                    <td>Mã khoa</td>
                    <td>
                        <input type="text" name="MAKH" id="MAKH">
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