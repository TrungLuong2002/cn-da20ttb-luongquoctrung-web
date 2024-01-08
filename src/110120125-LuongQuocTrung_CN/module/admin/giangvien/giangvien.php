<?php
$sql = "SELECT * FROM  `giang_vien`";
$kq = mysqli_query($conn, $sql);
$arr = array();
while ($row = mysqli_fetch_assoc($kq)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-gv">
    <h2>Quản lý giảng viên</h2>
    <a href="?action=giangvien&act=insert_GV" id="btn-themGV">+Thêm</a>
    <table id="tb-gv">
        <thead>
            <tr >
                <th>Mã giảng viên</th>
                <th>Tên giảng viên</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) {
                $item['update_GV'] = "?action=giangvien&act=update_GV&id= {$item['GV_id']}";
                $item['delete_GV'] = "?action=giangvien&act=delete_GV&id= {$item['GV_id']}";
            ?>

                <tr>
                    <td> <?php echo $item['Ma_GV']  ?> </td>
                    <td> <?php echo $item['Ten_GV']  ?> </td>
                    <td class="td-tacvu"><a class="tacvu" href=" <?php echo $item['update_GV']  ?>">Sửa</a><a class="delete" href="<?php echo $item['delete_GV'] ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
</div>