<?php 
    // Define tool URL and component path
    $toolUrl = basename(__DIR__);
    $componentPath = "../../";

    // Start output buffering
    ob_start();
?>

<!-- input section -->
<div>
    <input  type="text" id="videoLink" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full max-w-[500px] p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Video Link">
    <p id="error" class="text-sm mt-1 text-red-500 dark:text-gray-400"></p>
</div>

<!-- buttons -->
<div class="flex mt-3">
    <?php 
        $text = "Genrate";
        $id = "genrateButton";
        $svg = '<svg width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
        $onClick = "fetchThum";
        include '../../parts/button.php'; 
    ?>
    <select onchange="fetchThum()" value="maxresThumbnail" id="quality" class="bg-gray-50 ml-3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block max-w-max p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="maxresThumbnail" selected>Select Quality</option>
        <option value="defaultThumbnail">Default Thumbnail</option>
        <option value="highThumbnail">High Thumbnail</option>
        <option value="mediumThumbnail">Medium Thumbnail</option>
        <option value="standardThumbnail">Standard Thumbnail</option>
        <option value="maxresThumbnail">Maxres Thumbnail</option>
    </select>
</div>



<!-- export section -->
<div id="export" class="hidden mt-10 md:flex-row md:max-w-xl">
    <?php 
        $text = "🌟 Your Thumbnail is ready";
        include '../../parts/heading2.php'; 
    ?>
    <img id="image" class="mb-3 w-full rounded-md" alt="">
    <?php 
        $text = "Downlaod";
        $id = "downloadButton";
        $svg = '<svg width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
        $onClick = "downloadThum";
        include '../../parts/button.php'; 
    ?>
</div>

<!-- Capture buffered content and include layout -->
<?php 
    $body = ob_get_clean();
    include "../../layouts/toolPages.php"; 
?>