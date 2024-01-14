<?php
$sql = "SELECT * FROM  `nam_hoc`";
$kq = mysqli_query($conn, $sql);

// --------------------phan trang-----------
$soluong = 10;
$sobanghi = mysqli_num_rows($kq);
$sotrang = ceil($sobanghi / $soluong);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $soluong;



// -----------------------------------------------

$sql2 = "SELECT * FROM  `nam_hoc` LIMIT {$start},{$soluong}";
$kq2 = mysqli_query($conn, $sql2);
$arr = array();
while ($row = mysqli_fetch_assoc($kq2)) {

    $arr[] = $row;
}
// print_r($arr);

?>

<div id="wp-namhoc">
    <h2>Quản lý năm học</h2>
    <a href="?action=namhoc&act=insert_NH" id="btn-themNH">+Thêm</a>
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
    <table id="tb-namhoc">
        <thead>
            <tr class="classss">
                <th>Mã năm học</th>
                <th>Tên năm học</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) {
                $item['update_NH'] = "?action=namhoc&act=update_NH&id= {$item['NH_id']}";
                $item['delete_NH'] = "?action=namhoc&act=delete_NH&id= {$item['NH_id']}";
            ?>

                <tr>
                    <td> <?php echo $item['Ma_NH']  ?> </td>
                    <td> <?php echo $item['Ten_NH']  ?> </td>
                    <td class="td-tacvu"><a class="tacvu" href=" <?php echo $item['update_NH']  ?>">Sửa</a> <a class="delete" href="<?php echo $item['delete_NH'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
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
        .active{
    border: 1px solid red;
}
    </style>
    <?php
    $phantrang = "<ul id='phan-trang'>";
    if($page>1){
        $tro_ve=$page-1;
        $phantrang.="<li class='pt-item '><a href='?action=namhoc&act=namhoc&page={$tro_ve}'>trước</a></li>";
    }
    for ($i = 1; $i <= $sotrang; $i++) {
        $active="";
        if($i==$page){
            $active="active";
        }
        $phantrang .= "<li class='pt-item {$active}'><a href='?action=namhoc&act=namhoc&page={$i}'>{$i}</a></li>";
    }
    if($page<$sotrang){
        $tiep_tuc=$page+1;
        $phantrang.="<li class='pt-item '><a href='?action=namhoc&act=namhoc&page={$tiep_tuc}'>sau</a></li>";
    }

    $phantrang .= "</ul>";
    echo $phantrang;
    ?>
</div>