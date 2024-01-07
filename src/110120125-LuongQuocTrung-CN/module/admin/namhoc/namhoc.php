<?php
$sql = "SELECT * FROM  `nam_hoc`";
$kq = mysqli_query($conn, $sql);
$arr = array();
while ($row = mysqli_fetch_assoc($kq)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-namhoc">
    <h2>Quản lý năm học</h2>
    <a href="?action=namhoc&act=insert_NH" id="btn-themNH">+Thêm</a>
    <table id="tb-namhoc" >
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

                <tr >
                    <td> <?php echo $item['Ma_NH']  ?> </td>
                    <td> <?php echo $item['Ten_NH']  ?> </td>
                    <td class="td-tacvu"><a class="tacvu" href=" <?php echo $item['update_NH']  ?>">Sửa</a>  <a class="delete" href="<?php echo $item['delete_NH'] ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
</div>