<?php
// Get the JSON data from the client side
$jsonData = file_get_contents('php://input');

// Convert the JSON data to a PHP associative array
$data = json_decode($jsonData, true);

// Convert the data back to JSON format
$updatedData = json_encode($data, JSON_PRETTY_PRINT);

// Write the updated data to the JSON file, overwriting the existing data
file_put_contents('studentData.json', $updatedData);

// Send a response back to the client
$response = array('message' => 'Data written successfully');
echo json_encode($response);
?>
