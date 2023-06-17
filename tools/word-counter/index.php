<?php 
    // Define tool URL and component path
    $toolUrl = basename(__DIR__);
    $componentPath = "../../";

    // Start output buffering
    ob_start();
?>

<!-- Text area for input -->
<?php 
    $id = "text";
    $placeholder = 'Enter Your Texts Here...';
    $onChange = "";
    include '../../parts/textArea.php'; 
?>

<!-- Input field for search word -->
<?php 
    $type = "text";
    $id = "searchWord";
    $placeholder = 'Enter Word for Search Count';
    $onChange = "";
    include '../../parts/input.php'; 
?>

<!-- Button to count words -->
<?php 
    $text = "Count";
    $id = "countButton";
    $svg = '<svg width="19px" viewBox="-2.4 -2.4 28.80 28.80" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#ffffff;stroke-miterlimit:10;stroke-width:1.7280000000000002;}</style></defs><line class="cls-1" x1="12" y1="7.23" x2="12" y2="15.82"></line><line class="cls-1" x1="10.09" y1="15.82" x2="13.91" y2="15.82"></line><line class="cls-1" x1="10.09" y1="9.14" x2="12.95" y2="9.14"></line><line class="cls-1" x1="12" y1="4.36" x2="12" y2="1.5"></line><line class="cls-1" x1="12" y1="22.5" x2="12" y2="19.64"></line><line class="cls-1" x1="19.64" y1="12" x2="22.5" y2="12"></line><line class="cls-1" x1="1.5" y1="12" x2="4.36" y2="12"></line><path class="cls-1" d="M22.5,13V12A10.51,10.51,0,1,0,20,18.83"></path></g></svg>';
    $onClick = "countWords";
    include '../../parts/button.php'; 
?>

<!-- Toggle for case sensitivity -->
<?php 
    $id = "case";
    $label = "Case Sensitive";
    include '../../parts/toggle.php'; 
?>

<!-- Box to display word count -->
<?php 
    $id = "count";
    include '../../parts/countBox.php'; 
?>

<!-- Capture buffered content and include layout -->
<?php 
    $body = ob_get_clean();
    include "../../layouts/toolPages.php"; 
?>