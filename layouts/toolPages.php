<?php
    $componentPath = $componentPath . "parts";
    include '../../utils/getToolUseData.php';
    include  $componentPath . "/head.php";
    
    $toolData = getToolData($toolUrl);
    $title = $toolData["title"];
?>


<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl-grid-cols-5">
    <!-- left side content -->
    <div class="hidden h-screen bg-gray-500 rounded md:flex">ol Page</div>

    <!-- main content center side (tool) -->
    <div class="col-span-2 xl:col-span-3">
        <div><?php include  $componentPath . "/toolHeader.php"; ?></div>
        <div><?= $body  ?></div>
        <div><?php include  $componentPath . "/toolUse.php"; ?></div>
    </div>

    <!-- right side content -->
    <div class="hidden h-screen bg-gray-500 rounded lg:flex">Tool Page</div>
</div>

<?php include  $componentPath . "/footer.php"; ?>
<script src="./<?= $toolUrl  ?>/script.js"></script>
<?php include  $componentPath . "/foot.php"; ?>