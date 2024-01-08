<?php
$id = (int)$_GET['id'];
?>
<?php
if (isset($_POST['btn-suaCVHT'])) {

    $manamhoc = $_POST['ma-NH'];
    $malop = $_POST['drop-ma-Lop'];
    $tenlop = $_POST['ten-Lop'];
    $tengv = $_POST['ten-GV'];
    $email = $_POST['Email'];
    $sdt = $_POST['SDT'];
    $quyetdinh = $_POST['QD'];
    $ghichu = $_POST['ghi-chu'];
    $dieuchinh = $_POST['nd-dc'];
    $idcv=$_POST['ID'];

    $sql = "UPDATE `cvht` SET  `Ma_NH`='$manamhoc', `Ma_Lop`='$malop', `Ten_Lop`='$tenlop', `Ten_GV`='$tengv', `Email`='$email', `SDT`='$sdt', `Quyet_Dinh`='$quyetdinh',`Ghi_Chu`='$ghichu',`Nd_Dieu_Chinh`='$dieuchinh',`id`='$idcv'  WHERE `CVHT_id`='$id'";
    $kq = mysqli_query($conn, $sql);
    if ($kq) {
        $tb = "Cập nhật thành công";
    }
}
?>
<?php
$sqlselect_NH = "SELECT *FROM `nam_hoc`";
$kq2 = mysqli_query($conn, $sqlselect_NH);
$arr_NH = array();
while ($row = mysqli_fetch_assoc($kq2)) {
    $arr_NH[] = $row;
}
?>

<?php
$sqlselect_Lop =   "SELECT *FROM `lop`";
$kq3 = mysqli_query($conn, $sqlselect_Lop);
$arr_Lop = array();
while ($row2 = mysqli_fetch_assoc($kq3)) {
    $arr_Lop[] = $row2;
}
?>
<?php

$sqlselect =   "SELECT *FROM `cvht` WHERE `CVHT_id`='$id'";
$kq4 = mysqli_query($conn, $sqlselect);
$arr_CV = mysqli_fetch_array($kq4);
// 
2
?>



<form id="wp-frmUpdateCVHT" action="" method="post">
    <label for="ma-NH">Mã năm học</label>
    <select name="ma-NH" id="ma-NH">
        <?php foreach ($arr_NH as $item_NH) { ?>
            <option <?php if (isset($arr_CV['Ma_NH']) && $arr_CV['Ma_NH'] == $item_NH['Ma_NH']) echo "selected='selected' "; ?> value="<?php echo $item_NH['Ma_NH'] ?>"><?php echo $item_NH['Ma_NH'] ?></option>
        <?php  } ?>
    </select>
    <label for="drop-ma-Lop">Mã lớp</label>
    <select name="drop-ma-Lop" id="drop-ma-Lop">
        <?php foreach ($arr_Lop as $item_Lop) { ?>
            <option <?php if (isset($arr_CV['Ma_Lop']) && $arr_CV['Ma_Lop'] == $item_Lop['Ma_Lop']) echo "selected='selected' "; ?> value="<?php echo $item_Lop['Ma_Lop'] ?>"><?php echo $item_Lop['Ma_Lop'] ?></option>
        <?php  } ?>
    </select>
    <label for="ten-Lop">Tên lớp</label>
    <input type="text" name="ten-Lop" id="ten-Lop" value="<?php if(!empty($arr_CV['Ten_Lop']))echo $arr_CV['Ten_Lop']; ?>">
    <label for="ten-GV">Tên giáo viên</label>
    <input type="text" name="ten-GV" id="ten-GV" value="<?php if(!empty($arr_CV['Ten_GV']))echo $arr_CV['Ten_GV']; ?>">
    <label for="Email">Email</label>
    <input type="text" name="Email" id="Email" value="<?php if(!empty($arr_CV['Email']))echo $arr_CV['Email']; ?>">
    <label for="SDT">SDT</label>
    <input type="text" name="SDT" id="SDT" value="<?php if(!empty($arr_CV['SDT']))echo $arr_CV['SDT']; ?>">
    <label for="QD">Quyết định</label>
    <input type="text" name="QD" id="QD" value="<?php if(!empty($arr_CV['Quyet_Dinh']))echo $arr_CV['Quyet_Dinh']; ?>">
    <label for="ghi-chu">Ghi chú</label>
    <textarea name="ghi-chu" id="ghi-chu" cols="20" rows="10" ><?php if(!empty($arr_CV['Ghi_Chu']))echo $arr_CV['Ghi_Chu'];?></textarea>
    <label for="nd-dc">NỘi dung điều chỉnh</label>
    <textarea name="nd-dc" id="nd-dc" cols="20" rows="10" ><?php if(!empty($arr_CV['Nd_Dieu_Chinh']))echo $arr_CV['Nd_Dieu_Chinh']; ?></textarea>
    <label for="ID">ID</label>
    <select name="ID" id="ID">
        <option <?php if (!empty($arr_CV['id'])&&isset($arr_CV['id']) && $arr_CV['id'] == 1) echo "selected='selected' "; ?> value="1">1</option>
        <option <?php if (!empty($arr_CV['id'])&&isset($arr_CV['id']) && $arr_CV['id'] == 2) echo "selected='selected' "; ?> value="2">2</option>

    </select>
    <input type="submit" value="Sửa" name="btn-suaCVHT">
    <p>
        <?php
        if (isset($tb)) {
            echo $tb;
        }
        ?>

    </p>


</form>