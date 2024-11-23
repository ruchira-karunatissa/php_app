<?php
// Define a constant for PHPUnit tests to disable headers in index.php
define('PHPUNIT_TEST', true);

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testApiResponse()
    {
        // Start output buffering to capture the response from index.php
        ob_start();
        include __DIR__ . '/../index.php'; // Corrected file path
        $output = ob_get_clean();

        // Decode the JSON response
        $response = json_decode($output, true);

        // Assert that the response contains the expected values
        $this->assertArrayHasKey('status', $response);
        $this->assertEquals('success', $response['status']);
        $this->assertArrayHasKey('message', $response);
        $this->assertEquals('Hello from Jenkins CI/CD pipeline2!', $response['message']);
    }
}
