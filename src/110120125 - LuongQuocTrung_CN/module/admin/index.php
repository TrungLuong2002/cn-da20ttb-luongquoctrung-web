<?php
require "../../db/ketnoi.php";
require "../../inc/header_admin.php";
?>
<div id="wp-content">

    

    <div id="content">
        <?php
        if (isset($_GET['action']) && isset($_GET['act'])) {
            $action = $_GET['action'];
            $act = $_GET['act'];
            $dd = $action . "/" . "$act" . ".php";
        } else {
            $dd = "home.php";
        }
        require $dd;
       

        ?>
    </div>

</div>
<?php
require "../../inc/footer_admin.php";
?>