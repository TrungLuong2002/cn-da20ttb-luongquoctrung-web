<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `khoa` WHERE  `Khoa_id`='$id'";
$kq=mysqli_query($conn,$sql);
header("location: ?action=khoa&act=khoa");
?>