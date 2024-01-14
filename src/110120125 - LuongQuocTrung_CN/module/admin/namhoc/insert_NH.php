<?php
if (isset($_POST['btn-them'])) {
    $error = array();
    $manamhoc = $_POST['manamhoc'];
    $tennamhoc = $_POST['tennamhoc'];
    if ($manamhoc == "") {
        $error['manh'] = "Không được để trống mã năm học";
    }
    if ($tennamhoc == "") {
        $error['tennh'] = "Không được để trống tên năm học";
    }


    $sql2 = "SELECT * FROM  `nam_hoc` WHERE `Ma_NH`='$manamhoc'";
    $kq2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($kq2) > 0) {
        $error['tontai'] = "Năm học đã tồn tại";
    }


    if (empty($error)) {
        $sql = "INSERT INTO `nam_hoc`(`Ma_NH`, `Ten_NH`) VALUE ('$manamhoc','$tennamhoc')";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Thêm thành công";
        }
    }
}

?>
<div id="wp-frmthem">
    <h3 class="text-center">Thêm năm học</h3>
    <form id="frmthem" method="post">
        <label for="manamhoc">Mã năm học</label>
        <input type="text" name="manamhoc" id="manamhoc" value="<?php echo isset($_POST['manamhoc']) ? $_POST['manamhoc'] : ''; ?>" />
        <p class="err-del">
            <?php if (isset($error['manh'])) echo $error['manh']; ?>
        </p >
        <label for="tennamhoc">Tên năm học</label>
        <input type="text" name="tennamhoc" id="tennamhoc" value="<?php echo isset($_POST['tennamhoc']) ? $_POST['tennamhoc'] : ''; ?>" />
        <p class="err-del">
            <?php if (isset($error['tennh'])) echo $error['tennh']; ?>
        </p>
        <input type="submit" name="btn-them" id="btn-them" value="Thêm" />
    </form>
    <p class="green">
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        
        ?>
    </p>
    <p class="err-del">
        <?php
      
        if (isset($error['tontai']) && !isset($error['manh']) && !isset($error['tennh'])) {
            echo $error['tontai'];
        }
        ?>
    </p>
</div>