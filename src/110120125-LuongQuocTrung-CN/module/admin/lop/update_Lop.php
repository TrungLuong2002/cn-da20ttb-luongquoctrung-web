<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sua'])) {

    $tenlop = $_POST['tenlop'];
    $sql = "UPDATE `lop` SET  `Ten_Lop`='$tenlop' WHERE `Lop_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Cập nhật thành công";
    }
}

?>
<?php

$sqlselect =   "SELECT *FROM `lop` WHERE `Lop_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>


<form action="" method="post">
    <label for="malop">Mã lớp</label>
    <input type="text" name="malop" id="malop" value="<?php if (!empty($arr)) echo $arr['Ma_Lop'] ?>" disabled />
    <label for="tenlop">Tên lớp</label>
    <input type="text" name="tenlop" id="tenlop" value="<?php if (!empty($arr)) echo $arr['Ten_Lop']   ?>" />
    <input type="submit" name="btn-sua" id="btn-them" value="sua" />
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
           
        }
        ?>
        
    </p>
</form>