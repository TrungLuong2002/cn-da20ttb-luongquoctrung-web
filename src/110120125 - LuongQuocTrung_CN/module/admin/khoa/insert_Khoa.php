<?php
if (isset($_POST['btn-themKhoa'])) {
    $error = array();
    $makhoa = $_POST['makhoa'];
    $tenkhoa = $_POST['tenkhoa'];

    if ($makhoa == "") {
        $error['makhoa'] = "Không được để trống mã khoa";
    }
    if ($tenkhoa == "") {
        $error['tenkhoa'] = "Không được để trống tên khoa";
    }
    $sql2 = "SELECT * FROM  `khoa` WHERE `Ma_Khoa`='$makhoa'";
    $kq2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($kq2) > 0) {
        $error['tontai'] = "Khoa đã tồn tại";
    }

    if (empty($error)) {
        $sql = "INSERT INTO `khoa`(`Ma_Khoa`, `Ten_Khoa`) VALUE ('$makhoa','$tenkhoa')";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Thêm thành công";
        }
    }
}

?>

<form id="frmthemkhoa" action="" method="post">
    <h3>Thêm Khoa</h3>
    <label for="makhoa">Mã khoa</label>
    <input type="text" name="makhoa" id="makhoa" value="<?php echo isset($_POST['makhoa']) ? $_POST['makhoa'] : ''; ?>" />
    <p class="err-del">
        <?php if (isset($error['makhoa'])) echo $error['makhoa']; ?>
    </p>
    <label for="tenkhoa">Tên khoa</label>
    <input type="text" name="tenkhoa" id="tenkhoa" value="<?php echo isset($_POST['tenkhoa']) ? $_POST['tenkhoa'] : ''; ?>" />
    <p class="err-del">
        <?php if (isset($error['tenkhoa'])) echo $error['tenkhoa']; ?>
    </p>
    <input type="submit" name="btn-themKhoa" id="btn-themKhoa" value="Thêm" />
    <p class="green">
    <?php
    if (isset($tb)) {
        echo $tb;
    }

    ?>
</p>
<p class="err-del">
    <?php

    if (isset($error['tontai']) && !isset($error['makhoa']) && !isset($error['tenkhoa'])) {
        echo $error['tontai'];
    }
    ?>
</p>
</form>
