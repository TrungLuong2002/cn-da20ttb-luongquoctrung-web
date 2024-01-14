<?php

$sql = "SELECT * FROM  `lop`";
$kq = mysqli_query($conn, $sql);
// --------------------phan trang-----------
$soluong = 20;
$sobanghi = mysqli_num_rows($kq);
$sotrang = ceil($sobanghi / $soluong);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $soluong;

$sql2 = "SELECT * FROM  `lop`LIMIT {$start},{$soluong}";
$kq2 = mysqli_query($conn, $sql2);
$arr = array();
while ($row = mysqli_fetch_assoc($kq2)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-lop">
    <h2>Quản lý lớp học</h2>
    <a href="?action=lop&act=insert_Lop" id="btn-themLop">+Thêm</a>
    <style>
        ul#phan-trang {
            display: flex;
            list-style: none;
        }

        ul#phan-trang li.pt-item {
            margin: 0 2px;
        }

        .pt-item a {
            display: block;
            color: black;
            padding: 2px;
            text-decoration: none;
        }

        .active {
            border: 1px solid red;
        }
    </style>
    <?php
    $phantrang = "<ul id='phan-trang'>";
    if ($page > 1) {
        $tro_ve = $page - 1;
        $phantrang .= "<li class='pt-item '><a href='?action=lop&act=lop&page={$tro_ve}'>trước</a></li>";
    }
    for ($i = 1; $i <= $sotrang; $i++) {
        $active = "";
        if ($i == $page) {
            $active = "active";
        }
        $phantrang .= "<li class='pt-item {$active}'><a href='?action=lop&act=lop&page={$i}'>{$i}</a></li>";
    }
    if ($page < $sotrang) {
        $tiep_tuc = $page + 1;
        $phantrang .= "<li class='pt-item '><a href='?action=lop&act=lop&page={$tiep_tuc}'>sau</a></li>";
    }

    $phantrang .= "</ul>";
    echo $phantrang;
    ?>
    <?php
    if (isset($_SESSION['err_del'])) {
    ?>
        <p class="err-del">
            <?php
            echo $_SESSION['err_del'];
            unset($_SESSION['err_del']);
            ?>
        </p>

    <?php } ?>
    <table id="tb-lop">
        <thead>
            <tr>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Mã khoa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) {
                $item['update_Lop'] = "?action=lop&act=update_Lop&id= {$item['Lop_id']}";
                $item['delete_Lop'] = "?action=lop&act=delete_Lop&id= {$item['Lop_id']}";
            ?>

                <tr>
                    <td> <?php echo $item['Ma_Lop']  ?> </td>
                    <td> <?php echo $item['Ten_Lop']  ?> </td>
                    <td> <?php echo $item['Ma_Khoa']  ?> </td>
                    <td class="td-tacvu"><a class="tacvu " href=" <?php echo $item['update_Lop']  ?>">Sửa</a><a class="delete" href="<?php echo $item['delete_Lop'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>

</div>