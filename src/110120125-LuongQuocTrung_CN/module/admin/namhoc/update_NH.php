<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sua'])) {

    $tennamhoc = $_POST['tennamhoc'];
    $sql = "UPDATE `nam_hoc` SET  `Ten_NH`='$tennamhoc' WHERE `NH_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Cập nhật thành công";
    }
}

?>
<?php

$sqlselect =   "SELECT *FROM `nam_hoc` WHERE `NH_id`='$id'";
$kq2 = mysqli_query($conn, $sqlselect);
$arr = mysqli_fetch_array($kq2);
?>

<div id="wp-frmsua">
    <h3 class="text-center">Sửa năm học</h3>
    <form id="frmsua" method="post">
    <label for="manamhoc">Mã năm học</label>
    <input type="text" name="manamhoc" id="manamhoc" value="<?php if (!empty($arr)) echo $arr['Ma_NH'] ?>" disabled />
    <label for="tennamhoc">Tên năm học</label>
    <input type="text" name="tennamhoc" id="tennamhoc" value="<?php if (!empty($arr)) echo $arr['Ten_NH']   ?>" />
    <input type="submit" name="btn-sua" id="btn-them" value="Sửa" />
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
           
        }
        ?>
        
    </p>
</form>
</div>
