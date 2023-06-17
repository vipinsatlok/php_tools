<?php
function getDataByURL($url) {

    $jsonData = file_get_contents('../data/toolData.json');
    $data = json_decode($jsonData, true);

    foreach ($data as $entry) {
        if ($entry['url'] === $url) {
            return $entry;
        }
    }
    return null;
}
?>
