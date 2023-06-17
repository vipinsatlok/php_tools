<?php

if (isset($_GET['thumbnail_url'])) {
    $thumbnailUrl = $_GET['thumbnail_url'];
    header('Content-Type: application/octet-stream');
    $domain = "vipintools.com-";
    $timestamp = time();
    $imageExtension = ".jpg";
    $imageUrl = $domain . $timestamp . $imageExtension;
    header('Content-Disposition: attachment; filename="' . $imageUrl . '"');
    readfile($thumbnailUrl);
    exit;
}

if (isset($_GET['videoLink'])) {
    $videoLink = $_GET['videoLink'];
    $url = 'https://script.google.com/macros/s/AKfycbwmgApFxWYTxpR4TkMT_BQ5clure9rRBh6rb8ivVGw7uCm5L_IKOAwCMPPuWxgUknk/exec?toolName=youtubeThumbnail&videoLink=' . urlencode($videoLink);
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    $errorData = array('error' => 'Please provide video link');
    header('Content-Type: application/json');
    echo json_encode($errorData);
}


?>
