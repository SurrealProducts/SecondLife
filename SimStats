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
