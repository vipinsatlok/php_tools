<?php
function calculateAge($birthDate, $endDate = null) {
    $birthTimestamp = strtotime($birthDate);
    if (!$birthTimestamp) {
        return "Invalid birth date.";
    }

    $endTimestamp = time();
    if ($endDate) {
        $endTimestamp = strtotime($endDate);
        if (!$endTimestamp) {
            return "Invalid end date.";
        }
    }

    $secondsDiff = $endTimestamp - $birthTimestamp;

    $years = floor($secondsDiff / (365 * 24 * 60 * 60));
    $secondsDiff %= (365 * 24 * 60 * 60);

    $months = floor($secondsDiff / (30 * 24 * 60 * 60));
    $secondsDiff %= (30 * 24 * 60 * 60);

    $days = floor($secondsDiff / (24 * 60 * 60));
    $secondsDiff %= (24 * 60 * 60);
    $secondsDiff %= (60 * 60);

    $result = array(
        'years' => $years,
        'months' => $months,
        'days' => $days,
    );

    return $result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $birthDate = $_POST['birthDate'];
    $endDate = $_POST['endDate'];
    $endDate = $endDate ? $endDate : date('Y-m-d');

    $ageResult = calculateAge($birthDate, $endDate);

    header('Content-Type: application/json');

    // Return error response if the age calculation fails
    if (is_string($ageResult)) {
        echo json_encode(array('error' => $ageResult));
    } else {
        echo json_encode(array('result' => $ageResult));
    }
}
?>



