<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `nam_hoc` WHERE  `NH_id`='$id'";
$kq=mysqli_query($conn,$sql);
header("location: ?action=namhoc&act=namhoc");
?>