<?php
require "db/ketnoi.php";
require "inc/header.php"

?>

<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'user';
$act = isset($_GET['act']) ? $_GET['act'] : 'index';
$dd="module/".$mod."/".$act.".php";
require $dd;
?>


<?php
require "inc/footer.php"

?>