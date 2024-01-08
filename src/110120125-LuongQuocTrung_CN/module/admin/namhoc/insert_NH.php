<?php
if (isset($_POST['btn-them'])) {
    $manamhoc = $_POST['manamhoc'];
    $tennamhoc = $_POST['tennamhoc'];
    $sql = "INSERT INTO `nam_hoc`(`Ma_NH`, `Ten_NH`) VALUE ('$manamhoc','$tennamhoc')";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Thêm thành công";
    }
}

?>
<div id="wp-frmthem">
    <h3 class="text-center">Thêm năm học</h3>
    <form id="frmthem" method="post">
        <label for="manamhoc">Mã năm học</label>
        <input type="text" name="manamhoc" id="manamhoc" />
        <label for="tennamhoc">Tên năm học</label>
        <input type="text" name="tennamhoc" id="tennamhoc" />
        <input type="submit" name="btn-them" id="btn-them" value="Thêm" />
    </form>
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        ?>
    </p>
</div>