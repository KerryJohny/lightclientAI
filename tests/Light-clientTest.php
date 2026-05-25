<?php
/**
 * Tests for light-client
 */

use PHPUnit\Framework\TestCase;
use Light-client\Light-client;

class Light-clientTest extends TestCase {
    private Light-client $instance;

    protected function setUp(): void {
        $this->instance = new Light-client(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Light-client::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
