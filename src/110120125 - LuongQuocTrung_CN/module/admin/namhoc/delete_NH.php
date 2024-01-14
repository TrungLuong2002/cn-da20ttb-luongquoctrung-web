<?php
$id=(int)$_GET['id'];

$sql2 = "SELECT * FROM  `nam_hoc`WHERE `NH_id`='$id'";
$kq2 = mysqli_query($conn, $sql2);
$arr = mysqli_fetch_array($kq2);
$manh = $arr['Ma_NH'];
// echo"<pre>";
// print_r($arr);
// echo"</pre>";

$sql3 = "SELECT * FROM  `cvht`WHERE `Ma_NH`='$manh'";
$kq3 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($kq3) > 0) {
    $_SESSION['err_del'] = "Tồn tại cố vấn học tập cho năm học trên. Không thể xóa!";
    header("location: ?action=namhoc&act=namhoc");
} else {
    $sql="DELETE FROM `nam_hoc` WHERE  `NH_id`='$id'";
    $kq=mysqli_query($conn,$sql);
    header("location: ?action=namhoc&act=namhoc");
}

?>