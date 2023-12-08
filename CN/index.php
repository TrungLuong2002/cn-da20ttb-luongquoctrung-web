<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Quản lí thông tin cố vấn học tập </title>
</head>

<body>


    <div id="wraper">

        <div id="header">
            <div id="banner">
                <img src="./img/banner.jpg" alt="khong hien thi">
            </div>
            <div id="menu">
                <ul>
                    <li><a href="https://daotao.tvu.edu.vn/">Phòng đào tạo</a></li>
                    <li><a href="https://ttsv.tvu.edu.vn/#/home">Cổng thông tin sinh viên</a></li>
                </ul>
                <a id="btn-login" href="login.php">Đăng nhập</a>
            </div>
        </div>

        <div id="content">

            <div id="info">
                <h3 class="title">TRA CỨU THÔNG TIN CỐ VẤN HỌC TẬP</h3>
                <form id="form-search" action="" method="post">
                    <label for="year">Năm học</label>
                    <select name="year" id="year">
                        <option value="0">---Chọn năm học---</option>
                        <option value="1">---2020---</option>
                        <option value="2">---2021---</option>
                    </select><br><br>
                    <label for="class">Lớp học</label>
                    <select name="class" id="class">
                        <option value="0">---Chọn lớp---</option>
                        <option value="1">---DA20TTB---</option>
                        <option value="2">---DA20TTA---</option>
                    </select>
                </form>
            </div>
            <div id="show">
                <h3 class="title">THÔNG TIN CỐ VẤN HỌC TẬP</h3>
                <table id="tbl-info">
                    <tr>
                        <td class="text-bold">Tên:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Số điện thoại:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Email:</td>
                        <td></td>
                    </tr> <tr>
                        <td class="text-bold">Ngày sinh:</td>
                        <td></td>
                    </tr>
                </table>
            </div>

        </div>

        <div id="footer">
            <p>DA20TTB - Lương Quốc Trung - 110120125</p>
        </div>
    </div>
</body>

</html>