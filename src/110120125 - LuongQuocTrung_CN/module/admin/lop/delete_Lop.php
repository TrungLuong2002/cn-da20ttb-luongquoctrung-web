<?php

$id = (int)$_GET['id'];

$sql2 = "SELECT * FROM  `lop`WHERE `Lop_id`='$id'";
$kq2 = mysqli_query($conn, $sql2);
$arr = mysqli_fetch_array($kq2);
$malop = $arr['Ma_Lop'];
// echo"<pre>";
// print_r($arr);
// echo"</pre>";

$sql3 = "SELECT * FROM  `cvht`WHERE `Ma_Lop`='$malop'";
$kq3 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($kq3) > 0) {
    $_SESSION['err_del'] = "Tồn tại cố vấn học tập cho lớp trên. Không thể xóa!";
    header("location: ?action=lop&act=lop");
} else {
    $sql = "DELETE FROM `lop` WHERE  `Lop_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    header("location: ?action=lop&act=lop");
}
