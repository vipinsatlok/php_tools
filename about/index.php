<?php 
// Set the page title
$title = "About | Vipin Tools";
$componentPath = "../";

ob_start();
?>

<div>About</div>


<?php 
$body = ob_get_clean();
include "../layouts/simplePages.php";
?>
