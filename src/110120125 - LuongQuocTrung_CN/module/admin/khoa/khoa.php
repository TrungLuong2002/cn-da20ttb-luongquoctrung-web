<?php
$sql = "SELECT * FROM  `khoa`";
$kq = mysqli_query($conn, $sql);
$arr = array();
while ($row = mysqli_fetch_assoc($kq)) {

    $arr[] = $row;
}

// print_r($arr);

?>

<div id="wp-khoa">
    <h2>Quản lý khoa</h2>
    <a href="?action=khoa&act=insert_Khoa" id="btn-themKhoa">+Thêm</a>
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
    <table id="tb-khoa">
        <thead>
            <tr >
                <th>Mã khoa</th>
                <th>Tên khoa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) {
                $item['update_Khoa'] = "?action=khoa&act=update_Khoa&id= {$item['Khoa_id']}";
                $item['delete_Khoa'] = "?action=khoa&act=delete_Khoa&id= {$item['Khoa_id']}";
            ?>

                <tr>
                    <td> <?php echo $item['Ma_Khoa']  ?> </td>
                    <td> <?php echo $item['Ten_Khoa']  ?> </td>
                    <td class="td-tacvu"><a  class="tacvu" href=" <?php echo $item['update_Khoa']  ?>">Sửa</a><a  class="delete" href="<?php echo $item['delete_Khoa'] ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  }   ?>
        </tbody>
    </table>
</div>