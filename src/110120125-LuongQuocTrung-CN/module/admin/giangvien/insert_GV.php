<?php
if(isset($_POST['btn-themGV'])){
    $magv=$_POST['magv'];
    $tengv=$_POST['tengv'];
    $sql="INSERT INTO `giang_vien`(`Ma_GV`, `Ten_GV`) VALUE ('$magv','$tengv')";
    $kq=mysqli_query($conn,$sql);
    if($kq){
        $tb="Thêm thành công";
    }
}

?>

<form action="" method="post">
<label for="magv">Mã giảng viên</label>
<input type="text" name="magv" id="magv"/>
<label for="tengv">Tên giảng viên</label>
<input type="text" name="tengv" id="tengv"/>
<input type="submit" name="btn-themGV" id="btn-themGV" value="Thêm" />
</form>
<p>
    <?php
if(isset($tb)){
    echo $tb;
}
    ?>
</p>