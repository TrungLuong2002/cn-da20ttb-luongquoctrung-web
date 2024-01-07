<?php
require "../../db/ketnoi.php";
$year = $_POST['year'];
$sql = "SELECT * FROM  `cvht` WHERE `Ma_NH`='$year'";
$kq = mysqli_query($conn, $sql);
$data[0] = [
    'value' => "0",
    'label' => '---Chọn lớp---'
];


while ($row = mysqli_fetch_assoc($kq)) {
    $data[] = [
        'value' => $row['Ma_Lop'],
        'label' => $row['Ma_Lop']
    ];
}


echo json_encode($data);
