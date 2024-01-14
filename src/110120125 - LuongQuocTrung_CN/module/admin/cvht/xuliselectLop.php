<?php
require "../../../db/ketnoi.php";

$ma_lop = $_POST['ma_lop'];

$sqllop = "SELECT * FROM `lop` WHERE `Ma_Lop`='$ma_lop'";
$kq2 = mysqli_query($conn, $sqllop);

$data = [];

while ($row = mysqli_fetch_assoc($kq2)) {
    $data[] = [
  
        'value' => $row['Ma_Lop'],
        'label' => $row['Ten_Lop']
    ];
}

echo json_encode($data);


?>
