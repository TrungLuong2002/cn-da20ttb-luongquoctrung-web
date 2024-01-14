<?php
$sql = "SELECT * FROM  `cvht`";
$kq = mysqli_query($conn, $sql);
// --------------------phan trang-----------
$soluong = 15;
$sobanghi = mysqli_num_rows($kq);
$sotrang = ceil($sobanghi / $soluong);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $soluong;



// -----------------------------------------------

$sql2 = "SELECT * FROM  `cvht`LIMIT {$start},{$soluong}";
$kq2 = mysqli_query($conn, $sql2);
$arr = array();
while ($row = mysqli_fetch_assoc($kq2)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-cvht">
    <h2>Quản lý cố vấn học tập</h2>
    <a href="?action=cvht&act=insert_CVHT" id="btn-them">+Thêm</a>
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
        $phantrang .= "<li class='pt-item '><a href='?action=cvht&act=cvht&page={$tro_ve}'>trước</a></li>";
    }
    for ($i = 1; $i <= $sotrang; $i++) {
        $active = "";
        if ($i == $page) {
            $active = "active";
        }
        $phantrang .= "<li class='pt-item {$active}'><a href='?action=cvht&act=cvht&page={$i}'>{$i}</a></li>";
    }
    if ($page < $sotrang) {
        $tiep_tuc = $page + 1;
        $phantrang .= "<li class='pt-item '><a href='?action=cvht&act=cvht&page={$tiep_tuc}'>sau</a></li>";
    }

    $phantrang .= "</ul>";
    echo $phantrang;
    ?>

    <table id="tb-cvht">
        <thead>
            <tr>
                <th>Mã năm học</th>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Tên giảng viên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Quyết định</th>
                <th>Ghi chú</th>
                <th>Nội đung DC</th>
                <th>ID</th>

            </tr>
        </thead>
        <tbody id="tb-body">
            <?php foreach ($arr as $item) {
                $item['update_CVHT'] = "?action=cvht&act=update_CVHT&id= {$item['CVHT_id']}";
                $item['delete_CVHT'] = "?action=cvht&act=delete_CVHT&id= {$item['CVHT_id']}";
            ?>

                <tr class="tr-body">
                    <td> <?php echo $item['Ma_NH']  ?> </td>
                    <td> <?php echo $item['Ma_Lop']  ?> </td>
                    <td> <?php echo $item['Ten_Lop']  ?> </td>
                    <td> <?php echo $item['Ten_GV']  ?> </td>
                    <td> <?php echo $item['Email']  ?> </td>
                    <td> <?php echo $item['SDT']  ?> </td>
                    <td> <?php echo $item['Quyet_Dinh']  ?> </td>
                    <td> <?php echo $item['Ghi_Chu']  ?> </td>
                    <td> <?php echo $item['Nd_Dieu_Chinh']  ?> </td>
                    <td> <?php echo $item['id']  ?> </td>
                    <td class="td-tacvu"><a class="tacvu" href=" <?php echo $item['update_CVHT']  ?>">Sửa</a><a class="delete" href="<?php echo $item['delete_CVHT'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
    
</div>