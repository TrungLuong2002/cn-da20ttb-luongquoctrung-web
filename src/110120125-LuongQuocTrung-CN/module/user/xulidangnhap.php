<?php
require "../../db/ketnoi.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$arr = array();

$sql = "SELECT * FROM `admin`";
$kq = mysqli_query($conn, $sql);

if ($kq) {
    
    if (mysqli_num_rows($kq) > 0) {

        while ($row = mysqli_fetch_assoc($kq)) {
            $arr[] = $row;
        }
        foreach ($arr as $item) {
            if ($item['user_admin'] == $username && $item['pass_admin'] == $password) {
                $_SESSION['admin_login'] = true;
                $_SESSION['admin'] = $item['user_admin'];
                header("Location: ../admin/index.php", true, 301);
                exit();
            }else {
                $_SESSION['err_dangnhap'] = "Sai ten hoac mk";
                header("Location: login.php");
                exit();
            }
        }
    } else {
        echo "khong ton tai admin";
    }

    
}
