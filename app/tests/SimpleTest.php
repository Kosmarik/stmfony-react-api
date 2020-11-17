<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testAddition()
    {
        $value = true;
        $array = [
            'key' => 'value'
        ];

        $this->assertEquals(5, 2+3, 'Five was expected to equal 2+3');
        $this->assertTrue($value);
        $this->assertArrayHasKey('key', $array);
        $this->assertCount(1, $array);
    }
}