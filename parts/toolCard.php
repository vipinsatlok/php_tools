<?php

// Construct URLs and image source
$href = '/tools/' . $item["url"];
$imageSrc = '/icons/' . $item["title"] . '.svg';
$dec = strlen($item['dec']) > 80 ? substr($item['dec'], 0, 80) . ' <b>more...</b>' : $item['dec'];

// Configure button properties
$text = "Use Tool";
$svg = '<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>';
?>

<div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <!-- Display the item image and link to the item's URL -->
    <a href="<?= $href ?>">
        <img class="mb-3 filter grayscale" src="<?= $imageSrc ?>" alt="<?= $item["title"] ?>" />
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
            <?= $item["title"] ?>
        </h5>
    </a>

    <!-- Display the truncated description using the reusable function -->
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
        <?= $dec ?>
    </p>

    <!-- Include the button component -->
    <?php include "./parts/a.php"; ?>
</div>