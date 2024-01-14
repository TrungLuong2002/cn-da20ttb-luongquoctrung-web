<?php
$sql2 = "SELECT * FROM  `khoa`";
$kq2 = mysqli_query($conn, $sql2);
$arr = array();
while ($row = mysqli_fetch_assoc($kq2)) {

    $arr[] = $row;
}


if (isset($_POST['btn-themlop'])) {
    $error = array();
    $malop = $_POST['malop'];
    $tenlop = $_POST['tenlop'];
    $makhoa = $_POST['makhoa'];

    if ($malop == "") {
        $error['malop'] = "Không được để trống mã lớp";
    }
    if ($tenlop == "") {
        $error['tenlop'] = "Không được để trống tên lớp";
    }
    if ($makhoa == "") {
        $error['makhoa'] = "Vui lòng chọn mã khoa";
    }
    $sql3 = "SELECT * FROM  `lop` WHERE `Ma_Lop`='$malop'";
    $kq3 = mysqli_query($conn, $sql3);
    if (mysqli_num_rows($kq3) > 0) {
        $error['tontai'] = "Lớp học đã tồn tại";
    }
    if (empty($error)) {
        $sql = "INSERT INTO `lop`(`Ma_Lop`,`Ma_Khoa`, `Ten_Lop`) VALUE ('$malop','$makhoa','$tenlop')";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Thêm thành công";
        }
    }
}

?>

<form id="frmthemlop" action="" method="post">
    <h3>Thêm lớp</h3>
    <label for="malop">Mã lớp</label>
    <input type="text" name="malop" id="malop" value="<?php echo isset($_POST['malop']) ? $_POST['malop'] : ''; ?>"/>
    <p class="err-del">
        <?php if (isset($error['malop'])) echo $error['malop']; ?>
    </p>
    <label for="tenlop">Tên lớp</label>
    <input type="text" name="tenlop" id="tenlop" value="<?php echo isset($_POST['tenlop']) ? $_POST['tenlop'] : ''; ?>"/>
    <p class="err-del">
        <?php if (isset($error['tenlop'])) echo $error['tenlop']; ?>
    </p>
    <label for="makhoa">Mã Khoa</label>
    <select name="makhoa" id="makhoa">
        <option value="">--chọn khoa--</option>
        <?php foreach ($arr as $item) { ?>
            <option value="<?php echo $item['Ma_Khoa'];   ?>" <?php if( isset($_POST['makhoa']) ) echo "selected='selected'"; ?>><?php echo $item['Ma_Khoa'];  ?></option>
        <?php  } ?>
    </select>
    <p class="err-del">
        <?php if (isset($error['makhoa'])) echo $error['makhoa']; ?>
    </p>
    <input type="submit" name="btn-themlop" id="btn-themlop" value="Thêm" />
    <p class="green">
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        
        ?>
    </p>
    <p class="err-del">
        <?php
      
        if (isset($error['tontai']) && !isset($error['malop']) && !isset($error['tenlop'])) {
            echo $error['tontai'];
        }
        ?>
    </p>
</form>
