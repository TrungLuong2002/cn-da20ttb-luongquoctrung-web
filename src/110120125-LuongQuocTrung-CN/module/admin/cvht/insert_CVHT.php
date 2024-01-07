<?php  
if( isset($_POST['up-file'])){
    $filename=$_FILES['file']['name'];
    $fileExtension= explode('.',$filename);
    $fileExtension= strtolower(end($fileExtension));

    $newfile= date('Y.m.d')."-".date('h.i.sa').".".$fileExtension;
    $target = "../../module/admin/cvht/upload/".$newfile;
    move_uploaded_file($_FILES['file']['tmp_name'],$target);
error_reporting(0);
ini_set('display_errors',0);
require "../../excel/excel_reader2.php";
require "../../excel/SpreadsheetReader.php";
$reader=new SpreadsheetReader($target);
$isFirstRow = true;

// Lặp qua từng dòng trong tệp Excel
foreach ($reader as $key => $row) {
    // Bỏ qua dòng đầu tiên (header)
    if ($isFirstRow) {
        $isFirstRow = false;
        continue;
    }

    // Truy cập giá trị trong ba cột đầu tiên
    $a = $row[0];
    $b = $row[1];
    $c = $row[2];
    $d = $row[3];
    $e = $row[4];
    $f = $row[5];
    $g = $row[6];
    $h = $row[7];
    $j = $row[8];
    $k = $row[9];
    $l = $row[10];

// echo $a.$b.$c.$d."----";
$sql="INSERT INTO  `cvht`(`CVHT_id`,`Ma_NH`,`Ma_Lop`,`Ten_Lop`,`Ten_GV`,`Email`,`SDT`,`Quyet_Dinh`,`Ghi_Chu`,`nd_Dieu_Chinh`,`id`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k','$l')";
$kq = mysqli_query($conn, $sql);
if (!$kq) {
    echo "lỗi: " . $sql . "<br>" . mysqli_error($conn);
}
}



}

?>


<form  id="frm-file" action="" method="POST" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" name="up-file" id="up-file">
</form>