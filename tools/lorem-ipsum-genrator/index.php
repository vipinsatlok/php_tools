<?php 
    // Define tool URL and component path
    $toolUrl = basename(__DIR__);
    $componentPath = "../../";

    // Start output buffering
    ob_start();
?>

<?php 
    $type = "number";
    $id = "number";
    $placeholder = 'Enter Length';
    $onChange = "";
    include '../../parts/input.php'; 
?>
<?php 
    $text = "Genrate";
    $id = "genrateButton";
    $svg = '<svg width="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.06189 13C4.02104 12.6724 4 12.3387 4 12C4 7.58172 7.58172 4 12 4C14.5006 4 16.7332 5.14727 18.2002 6.94416M19.9381 11C19.979 11.3276 20 11.6613 20 12C20 16.4183 16.4183 20 12 20C9.61061 20 7.46589 18.9525 6 17.2916M9 17H6V17.2916M18.2002 4V6.94416M18.2002 6.94416V6.99993L15.2002 7M6 20V17.2916" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
    $onClick = "generateLoremIpsum";
    include '../../parts/button.php'; 
?>
<div id="text" class="p-3 my-3 text-sm rounded-md text-gray-600 border border-gray-300">
Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
</div>
<?php 
    $text = "Copy Text";
    $id = "copyButton";
    $svg = '<svg width="18px"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.144"></g><g id="SVGRepo_iconCarrier"> <path d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z" stroke="#ffffff" stroke-width="1.5"></path> <path d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5" stroke="#ffffff" stroke-width="1.5"></path> </g></svg>';
    $onClick = "copyToClipboard";
    include '../../parts/button.php'; 
?>

<!-- Capture buffered content and include layout -->
<?php 
    $body = ob_get_clean();
    include "../../layouts/toolPages.php"; 
?>