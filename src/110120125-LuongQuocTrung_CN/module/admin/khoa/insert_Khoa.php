<?php
if(isset($_POST['btn-themKhoa'])){
    $makhoa=$_POST['makhoa'];
    $tenkhoa=$_POST['tenkhoa'];
    $sql="INSERT INTO `khoa`(`Ma_Khoa`, `Ten_Khoa`) VALUE ('$makhoa','$tenkhoa')";
    $kq=mysqli_query($conn,$sql);
    if($kq){
        $tb="Thêm thành công";
    }
}

?>

<form action="" method="post">
<label for="makhoa">Mã khoa</label>
<input type="text" name="makhoa" id="makhoa"/>
<label for="tenkhoa">Tên khoa</label>
<input type="text" name="tenkhoa" id="tenkhoa"/>
<input type="submit" name="btn-themKhoa" id="btn-themKHoa" value="Thêm" />
</form>
<p>
    <?php
if(isset($tb)){
    echo $tb;
}
    ?>
</p>