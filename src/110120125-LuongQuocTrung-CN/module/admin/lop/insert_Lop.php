<?php
if(isset($_POST['btn-themLop'])){
    $malop=$_POST['malop'];
    $tenlop=$_POST['tenlop'];
    $sql="INSERT INTO `lop`(`Ma_Lop`, `Ten_Lop`) VALUE ('$malop','$tenlop')";
    $kq=mysqli_query($conn,$sql);
    if($kq){
        $tb="Thêm thành công";
    }
}

?>

<form action="" method="post">
<label for="malop">Mã lớp</label>
<input type="text" name="malop" id="malop"/>
<label for="tenlop">Tên lớp</label>
<input type="text" name="tenlop" id="tenlop"/>
<input type="submit" name="btn-themLop" id="btn-themLop" value="Thêm" />
</form>
<p>
    <?php
if(isset($tb)){
    echo $tb;
}
    ?>
</p>