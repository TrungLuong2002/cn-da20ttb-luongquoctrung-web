<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `cvht` WHERE  `CVHT_id`='$id'";
$kq=mysqli_query($conn,$sql);
header("location: ?action=cvht&act=cvht");
?>