<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sua'])) {

    $tengv = $_POST['tengv'];
    $sql = "UPDATE `giang_vien` SET  `Ten_GV`='$tengv' WHERE `GV_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Cập nhật thành công";
    }
}

?>
<?php

$sqlselect =   "SELECT *FROM `giang_vien` WHERE `GV_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>


<form action="" method="post">
    <label for="magv">Mã giảng viên</label>
    <input type="text" name="magv" id="magv" value="<?php if (!empty($arr)) echo $arr['Ma_GV'] ?>" disabled />
    <label for="tengv">Tên giảng viên</label>
    <input type="text" name="tengv" id="tengv" value="<?php if (!empty($arr)) echo $arr['Ten_GV']   ?>" />
    <input type="submit" name="btn-sua" id="btn-them" value="sua" />
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
           
        }
        ?>
        
    </p>
</form>