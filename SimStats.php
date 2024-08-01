header("Access-Control-Allow-Origin: https://544270133594685071.weebly.com");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

<?php
// update_stats.php

$data = [
    'timeDilation' => $_POST['timeDilation'],
    'fps' => $_POST['fps'],
    'scriptTime' => $_POST['scriptTime']
];

// Write the data to a JSON file
file_put_contents('stats.json', json_encode($data));

echo "Data updated successfully.";
?>
