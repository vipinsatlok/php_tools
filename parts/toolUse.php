<?php
$fileName = "../" . $toolUrl . "/steps.json";
$jsonData = file_get_contents($fileName);
$data = json_decode($jsonData, true);
$steps = $data["steps"];
?>

<div style="padding-top: 100px;" class="mt-10">
    <div class="flex mb-3 items-center">
        <h2 class="text-2xl font-bold dark:text-white">🛠️ How to Use</h2>
    </div>
    <ol class="relative border-l border-gray-200 dark:border-gray-700">
    <?php
    foreach ($steps as $step) {
        $stepNumber = $step['step'];
        $stepTitle = $step['title'];
        $stepDescription = $step['description'];

        echo '<li class="mb-5 ml-4">';
        echo '<div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>';
        echo '<time class="mb-1 text-sm uppercase font-normal leading-none text-gray-400 dark:text-gray-500">' . "Step $stepNumber" . '</time>';
        echo '<h3 class="text-md font-semibold text-gray-900 dark:text-white">' . $stepTitle . '</h3>';
        echo '<p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">' . $stepDescription . '</p>';
        echo '</li>';
    }
    ?>
</ol>
</div>


