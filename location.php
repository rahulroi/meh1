<?php
if (isset($_GET['latitude']) && isset($_GET['longitude'])) {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $log = "Location: " . $latitude . ", " . $longitude . " - " . date('Y-m-d H:i:s') . "\n";
    file_put_contents('MEH_log.txt', $log, FILE_APPEND);
    echo "Location logged!";
} else {
    echo "No location data available.";
}
?>
