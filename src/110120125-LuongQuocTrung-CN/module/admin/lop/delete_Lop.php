<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `lop` WHERE  `Lop_id`='$id'";
$kq=mysqli_query($conn,$sql);
header("location: ?action=lop&act=lop");
?>