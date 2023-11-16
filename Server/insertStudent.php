<?php
// Get the JSON data from the client side
$jsonData = file_get_contents('php://input');

// Convert the JSON data to a PHP associative array
$data = json_decode($jsonData, true);

// Read the existing data from the JSON file
$existingData = json_decode(file_get_contents('studentData.json'), true);

// Add the new data to the existing data
$existingData['students'][] = $data;

// Convert the data back to JSON format
$updatedData = json_encode($existingData, JSON_PRETTY_PRINT);

// Write the updated data to the JSON file
file_put_contents('studentData.json', $updatedData);

// Send a response back to the client
$response = array('message' => 'Data written successfully');
echo json_encode($response);
?>
