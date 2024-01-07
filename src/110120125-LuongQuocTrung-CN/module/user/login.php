<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        #wp-frmloggin {
            width: 200px;
            margin: 0 auto;
            background-color: #1E90FF;
            text-align: center;
            padding: 20px;
            
        }

        h3 {
            margin-top: 10px;

        }

        #frmloggin input#username,
        #frmloggin input#password,
        #frmloggin input#btn-login {
            /* max-width: 100%; */
            margin-top: 10px;
            padding: 5px;
        }
    </style>
    <div id="wp-frmloggin">
        <h3>Đăng nhập</h3>
        <form action="xulidangnhap.php" method="post" id="frmloggin">
            <!-- <label for="username">Ten dang nhap</label><br> -->
            <input type="text" id="username" name="username" placeholder="Tên đăng nhập"><br>
            <!-- <label for="password">Mat khau</label><br> -->
            <input type="password" id="password" name="password" placeholder="Mật khẩu"><br>
            <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập">

        </form>
        <?php
        if (isset($_SESSION['err_dangnhap'])) {
        ?>
            <p>
                <?php
                echo $_SESSION['err_dangnhap'];
                unset($_SESSION['err_dangnhap']);
                ?>
            </p>

        <?php } ?>
    </div>

</body>

</html>