<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-suaKhoa'])) {
    $error = array();
    $tenkhoa = $_POST['tenkhoa'];
    if ($tenkhoa == "") {
        $error['tenkhoa'] = "Không được để trống tên khoa";
    }

    if (empty($error)) {
        $sql = "UPDATE `khoa` SET  `Ten_Khoa`='$tenkhoa' WHERE `Khoa_id`='$id'";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Cập nhật thành công";
        }
    }
}

?>
<?php

$sqlselect =   "SELECT *FROM `khoa` WHERE `Khoa_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>


<form id="frmsuakhoa" action="" method="post">
    <h3>Sửa Khoa</h3>
    <label for="makhoa">Mã khoa</label>
    <input type="text" name="makhoa" id="makhoa" value="<?php if (!empty($arr)) echo $arr['Ma_Khoa'] ?>" disabled />
    <label for="tenkhoa">Tên khoa</label>
    <input type="text" name="tenkhoa" id="tenkhoa" value="<?php if (!empty($arr)) echo $arr['Ten_Khoa']   ?>" />
    <p class="err-del">
        <?php

        if (isset($error['tenkhoa'])) {
            echo $error['tenkhoa'];
        }
        ?>
    </p>
    <input type="submit" name="btn-suaKhoa" id="btn-suaKhoa" value="sua" />
    <p class="green">
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        ?>

    </p>

</form>