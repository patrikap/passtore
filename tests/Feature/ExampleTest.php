<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @var string
     */
    protected string $testString;

    protected function setUp(): void
    {
        $this->testString = '';
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
