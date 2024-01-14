<?php
$id = (int)$_GET['id'];
$sql2 = "SELECT * FROM  `khoa`WHERE `Khoa_id`='$id'";
$kq2 = mysqli_query($conn, $sql2);
$arr = mysqli_fetch_array($kq2);
$makhoa = $arr['Ma_Khoa'];
// echo"<pre>";
// print_r($arr);
// echo"</pre>";

$sql3 = "SELECT * FROM  `lop`WHERE `Ma_Khoa`='$makhoa'";
$kq3 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($kq3) > 0) {
    $_SESSION['err_del'] = "Tồn tại lớp học cho khoa trên. Không thể xóa!";
    header("location: ?action=khoa&act=khoa");
} else {
    $sql = "DELETE FROM `khoa` WHERE  `Khoa_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    header("location: ?action=khoa&act=khoa");
}
