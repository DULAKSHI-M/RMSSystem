<?php
// Start the session
session_start();

// Retrieve the JSON data from the AJAX request
$jsonData = file_get_contents('php://input');

// Decode the JSON data into an associative array
$data = json_decode($jsonData, true);

// Access the values from the JSON object
$validity = $data['validity'];
$email = $data['email'];


$_SESSION['email'] = $email;

$response = array('message' => 'Session created successfully');
    echo json_encode($response);
?>



