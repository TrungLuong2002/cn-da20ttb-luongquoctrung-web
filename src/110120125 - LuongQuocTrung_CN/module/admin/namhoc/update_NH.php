<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-sua'])) {
    $error = array();
    $tennamhoc = $_POST['tennamhoc'];

    if ($tennamhoc == "") {
        $error['tennh'] = "Không được để trống tên năm học";
    }
    if (empty($error)) {
        $sql = "UPDATE `nam_hoc` SET  `Ten_NH`='$tennamhoc' WHERE `NH_id`='$id'";
        $kq = mysqli_query($conn, $sql);
        if ($kq) {
            $tb = "Cập nhật thành công";
        }
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
        <p class="err-del">
            <?php if (isset($error['tennh'])) echo $error['tennh']; ?>
        </p>
        <input type="submit" name="btn-sua" id="btn-them" value="Sửa" />
        <p class="green">
            <?php
            if (isset($tb)) {
                echo $tb;
            }
            ?>
        </p>
        
       
    </form>
</div>