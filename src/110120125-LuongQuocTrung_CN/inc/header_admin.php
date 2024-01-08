<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí thông tin cố vấn học tập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/namhoc.css">
    <link rel="stylesheet" href="../../css/khoa.css">
    <link rel="stylesheet" href="../../css/giangvien.css">
    <link rel="stylesheet" href="../../css/lop.css">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/cvhtt.css">


    <script src="../../js/jquery.js"></script>
    <script src="../../js/cvht.js"></script>
</head>

<body>
    <div id="wraper">

        <div id="header">
            <div id="banner">
                <img src="../../img/logo.png" alt="">
                <p id="title">QUẢN LÝ HỆ THỐNG</p>
                <div id="out">
                    <p><?php echo  $_SESSION['admin']; ?></p>
                    <a href="?action=logout&act=logout">(đăng xuất)</a>
                </div>

            </div>
            <div id="menu">
                <ul id="main-menu">
                    <li class="menu-item"><a href="?action=namhoc&act=namhoc">NĂM HỌC</a></li>
                    <li class="menu-item"><a href="?action=khoa&act=khoa">KHOA</a></li>
                    <li class="menu-item"><a href="?action=lop&act=lop">LỚP</a></li>
                    <li class="menu-item"><a href="?action=cvht&act=cvht">CỐ VẤN HỌC TẬP</a></li>
                </ul>

            </div>
        </div>