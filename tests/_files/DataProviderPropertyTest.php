<?php
use PHPUnit\Framework\TestCase;

class DataProviderPropertyTest extends TestCase
{
    /**
     * @dataProvider providerProperty
     */
    public function testProviderProperty($a, $b, $c)
    {
        $this->assertSame($c, $a + $b);
    }

    public $providerProperty = [
        [0, 8, 8],
        [8, 0, 8],
        [8, 8, 16],
        [8, 16, 24],
        ];

    /**
     * @dataProvider providerStaticProperty
     */
    public function testProviderStaticProperty($a, $b, $c)
    {
        $this->assertSame($c, $a + $b);
    }

    public static $providerStaticProperty = [
        [0, 0, 0],
        [1, 0, 1],
        [0, 1, 1],
        [1, 1, 2],
        ];
}
