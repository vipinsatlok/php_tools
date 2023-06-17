<?php
    $componentPath = "../";
    $title = "Tools | Vipin Tools";
    ob_start();
?>

<?php
    $body = ob_get_clean();
    include "../layouts/toolPages.php";
?>