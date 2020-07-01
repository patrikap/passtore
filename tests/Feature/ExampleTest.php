<?php

namespace Tests\Feature;

use Patrikap\Passtore\Pass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @var string
     */
    protected Pass $pass;

    protected function setUp(): void
    {
        $this->pass = new Pass('SOME_PASS_TYPE_ID', 'SOME_SERIAL_NUMBER', 'SOME_TEAM_ID');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        print PHP_EOL . json_encode($this->pass) . PHP_EOL;
        $this->assertTrue(true);
    }
}
