<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `giang_vien` WHERE  `GV_id`='$id'";
$kq=mysqli_query($conn,$sql);
header("location: ?action=giangvien&act=giangvien");
?>