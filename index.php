<?php 
// Set the page title
$title = "Home | Vipin Tools";
$componentPath = "./";

// Read the JSON data from the file
$jsonData = file_get_contents('data/toolData.json');
$data = json_decode($jsonData, true);

// Check for JSON parsing errors
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error parsing JSON file.');
}

ob_start();

// Start displaying the tool cards in a grid
echo '<ul class="gap-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" >';

// Loop through each tool item and display its card
foreach ($data as $item) {
    include "parts/toolCard.php";
}

// Close the grid container
echo '</ul>';

$body = ob_get_clean();
include "layouts/simplePages.php";
?>
