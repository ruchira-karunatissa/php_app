<?php
// index.php

// Simple API to test Jenkins CI/CD pipeline
header('Content-Type: application/json');

// Dummy response
echo json_encode([
    'status' => 'success',
    'message' => 'Hello from Jenkins CI/CD pipeline!'
]);
?>
