<?php
// Define a function to retrieve tool data based on a URL
function getToolData($url){
    // Define the path to the JSON file
    $fileName = "../../data/toolData.json";
    
    // Read the JSON file content
    $jsonData = file_get_contents($fileName);
    
    // Decode the JSON data into an associative array
    $data = json_decode($jsonData, true);

    // Initialize a variable to store the filtered item
    $filteredItem = null;
    
    // Loop through the data array to find the item with the matching URL
    foreach ($data as $item) {
        if ($item["url"] === $url) {
            $filteredItem = $item;
            break; // Once found, exit the loop
        }
    }
    
    // Return the filtered item (or null if not found)
    return $filteredItem;
}
?>
