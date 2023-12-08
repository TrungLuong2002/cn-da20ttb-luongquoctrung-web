<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí thông tin cố vấn học tập</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div id="wraper">

        <div id="header">
            <div id="banner">
                <img src="../img/banner.jpg" alt="">
            </div>
            <div id="menu">
                <ul>
                    <li><a href="https://daotao.tvu.edu.vn/">Phòng đào tạo</a></li>
                    <li><a href="">Cố vấn học tập</a></li>
                </ul>
                <a id="btn-logout" href="">Đăng Xuất</a>
            </div>
        </div>

        <div id="wp-content">

            <div id="sidebar">
                <ul id="main-menu">
                    <li class="menu-item"><a href="">NĂM HỌC</a></li>
                    <li class="menu-item"><a href="">KHOA</a></li>
                    <li class="menu-item"><a href="">LỚP</a></li>
                    <li class="menu-item"><a href="">GIẢNG VIÊN</a></li>
                </ul>
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
                        </tr>
                        <tr>
                            <td class="text-bold">Ngày sinh:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div id="footer">
            <p>DA20TTB - Lương Quốc Trung - 110120125</p>
        </div>
</body>

</html>


</body>

</html>