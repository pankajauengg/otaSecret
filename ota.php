<?php
// Create an associative array
$data = array(
    "TXV" => "3.0",
    "TXFile" => "https://github.com/pankajauengg/otaSecret/raw/main/TXFirmware.bin",
    "RXV" => "3.0",
    "RXFile" => "https://github.com/pankajauengg/otaSecret/raw/main/RXFirmware.bin",
    "ASIV" => "0.3",
    "ASIFile" => "https://raw.githubusercontent.com/pankajauengg/otaSecret/main/ASI-V0.3.xml",
    "AndroidV" => "1.0"
);

// Convert the associative array to a JSON object
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON object
echo $json_data;
?>

