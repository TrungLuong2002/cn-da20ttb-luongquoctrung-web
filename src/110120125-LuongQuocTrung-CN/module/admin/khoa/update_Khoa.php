<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sua'])) {

    $tenkhoa = $_POST['tenkhoa'];
    $sql = "UPDATE `khoa` SET  `Ten_Khoa`='$tenkhoa' WHERE `Khoa_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Cập nhật thành công";
    }
}

?>
<?php

$sqlselect =   "SELECT *FROM `khoa` WHERE `Khoa_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>


<form action="" method="post">
    <label for="makhoa">Mã khoa</label>
    <input type="text" name="makhoa" id="makhoa" value="<?php if (!empty($arr)) echo $arr['Ma_Khoa'] ?>" disabled />
    <label for="tenkhoa">Tên khoa</label>
    <input type="text" name="tenkhoa" id="tenkhoa" value="<?php if (!empty($arr)) echo $arr['Ten_Khoa']   ?>" />
    <input type="submit" name="btn-sua" id="btn-them" value="sua" />
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
           
        }
        ?>
        
    </p>
</form>