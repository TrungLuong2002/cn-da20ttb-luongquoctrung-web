<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sualop'])) {
    $error = array();
    $makhoa = $_POST['makhoaa'];
    $tenlop = $_POST['tenlop'];

    if ($tenlop == "") {
        $error['tenlop'] = "Không được để trống tên lớp";
    }
    if ($makhoa == "") {
        $error['makhoa'] = "Vui lòng chọn mã khoa";
    }

    if (empty($error)) {
        $sql = "UPDATE `lop` SET  `Ten_Lop`='$tenlop', `Ma_Khoa`='$makhoa' WHERE `Lop_id`='$id'";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Cập nhật thành công";
        }
    }
}

?>
<?php
$sql3 = "SELECT * FROM  `khoa`";
$kq3 = mysqli_query($conn, $sql3);
$arr2 = array();
while ($row2 = mysqli_fetch_assoc($kq3)) {

    $arr2[] = $row2;
}
$sqlselect =   "SELECT *FROM `lop` WHERE `Lop_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>


<form id="frmsualop" action="" method="post">
    <h3>Sửa thông tin lớp</h3>
    <label for="malopp">Mã lớp</label>
    <input type="text" name="malopp" id="malopp" value="<?php if (!empty($arr)) echo $arr['Ma_Lop'] ?>" disabled />
    <label for="tenlopp">Tên lớp</label>
    
    <input type="text" name="tenlop" id="tenlopp" value="<?php if (!empty($arr)) echo $arr['Ten_Lop']   ?>" />
    <p class="err-del">
        <?php if (isset($error['tenlop'])) echo $error['tenlop']; ?>
    </p>
    <label for="makhoaa">Mã Khoa</label>
    <select name="makhoaa" id="makhoaa">
        <option value="">--chọn khoa--</option>
        <?php foreach ($arr2 as $item) { ?>
            <option value="<?php echo $item['Ma_Khoa'];  ?>" <?php if ($item['Ma_Khoa'] == $arr['Ma_Khoa']) echo "selected='selected'" ?>><?php echo $item['Ma_Khoa'];  ?></option>
        <?php  } ?>
    </select>
    <p class="err-del">
        <?php if (isset($error['makhoa'])) echo $error['makhoa']; ?>
    </p>
    <input type="submit" name="btn-sualop" id="btn-sualop" value="Sửa" />
    <p class="green">
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        ?>
    </p>
</form>