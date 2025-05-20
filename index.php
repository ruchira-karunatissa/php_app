

<?php
// Check if PHPUnit is running and disable headers for testing
if (!defined('PHPUNIT_TEST')) {
    header('Content-Type: application/json');
}

// Dummy response
echo json_encode([
    'status' => 'success',
    'message' => 'Hello from Jenkins CI/CD pipeline3!'
]);
?>
