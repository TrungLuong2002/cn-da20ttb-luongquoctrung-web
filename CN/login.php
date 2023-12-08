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
    <div id="wp-frmloggin">
        <form action="xulidangnhap.php" method="post">
            <label for="username">Ten dang nhap</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Mat khau</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" id="btn-login" name="btn-login" value="Dang nhap">

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