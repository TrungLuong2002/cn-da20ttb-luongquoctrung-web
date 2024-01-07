<?php
$sql = "SELECT * FROM  `lop`";
$kq = mysqli_query($conn, $sql);
$arr = array();
while ($row = mysqli_fetch_assoc($kq)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-lop">
    <h2>Quản lý lớp học</h2>
    <a  href="?action=lop&act=insert_Lop" id="btn-themLop" >+Thêm</a>
    <table id="tb-lop">
        <thead>
            <tr >
                <th>Mã lớp</th>
                <th>Tên lớp</th>
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
                    <td class="td-tacvu"><a class="tacvu " href=" <?php echo $item['update_Lop']  ?>">Sửa</a><a class="delete" href="<?php echo $item['delete_Lop'] ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
</div>