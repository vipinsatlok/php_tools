<button style="width : max-content;" id="<?= $id ?>" onclick="<?= $onClick . "()" ?>" class="button text-white flex items-center justify-center bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm max-w-max px-5 py-2.5">
    <!-- Text with hidden state on group hover -->
    <span class="mr-1">
        <?= $text ?>
    </span>
    <!-- SVG icon or content -->
    <span>
        <?= $svg ?>
    </span>
</button>