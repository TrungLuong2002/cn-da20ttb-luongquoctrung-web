<?php

$sql = "SELECT * FROM  `nam_hoc`";
$kq = mysqli_query($conn, $sql);
if ($kq) {
    $arr = array();
    while ($row = mysqli_fetch_assoc($kq)) {
        $arr[] = $row;
    }
}


if (isset($_POST['btn-tracuu'])) {
    $year = $_POST['year'];
    $class = $_POST['class'];

    $sql2 = "SELECT*FROM `cvht` WHERE `Ma_NH`='$year' AND `Ma_Lop`='$class'";
    $kq2 = mysqli_query($conn, $sql2);
    $arr2 = array();
    while ($row = mysqli_fetch_array($kq2)) {
        $arr2[] = $row;
    }
    // print_r($arr2);
}

?>


<div id="content">

    <div id="info">
        <h3 class="title">TRA CỨU THÔNG TIN CỐ VẤN HỌC TẬP</h3>
        <form id="form-search" action="" method="post">
            <label for="year">Năm học</label>
            <select name="year" id="year">
                <option value="0">---Chọn năm học---</option>
                <?php foreach ($arr as $item_NH) {  ?>
                    <option value="<?php echo $item_NH['Ma_NH']; ?>"><?php echo "---" . $item_NH['Ma_NH'] . "---"; ?></option>
                <?php  } ?>

            </select><br><br>
            <label for="class">Lớp học</label>
            <select name="class" id="class" class="js-example-basic-single">
                <option value="">---Chọn lớp---</option>

            </select><br>
            <!-- <input type="text" list="toppic" name="q" id="q">
            <datalist id="toppic">
                <option value="1">
                <option value="2">
            </datalist> -->

            <input type="submit" value="Tra cứu" id="btn-tracuu" name="btn-tracuu" />
        </form>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
    </div>
    <div id="show">
        <h3 class="title">THÔNG TIN CỐ VẤN HỌC TẬP</h3>
        <table id="tbl-info">

            <?php
            if (isset($_POST['btn-tracuu'])) {
                foreach ($arr2 as $item2) {
            ?>
                    <tr>
                        <td class="text-bold">Lớp:</td>
                        <td><?php echo $item2['Ma_Lop']; ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Tên cố vấn học tập:</td>
                        <td> <?php echo $item2['Ten_GV']; ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Số điện thoại:</td>
                        <td><?php echo $item2['SDT']; ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Email:</td>
                        <td><?php echo $item2['Email']; ?></td>
                    </tr>

            <?php  }
            } ?>
        </table>
    </div>

</div>