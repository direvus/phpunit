<?php
use PHPUnit\Framework\TestCase;

class DataProviderConstantTest extends TestCase
{
    /**
     * @dataProvider PROVIDER_CONSTANT
     */
    public function testProviderConstant($a, $b, $c)
    {
        $this->assertSame($c, $a + $b);
    }

    const PROVIDER_CONSTANT = [
        [3, 4, 7],
        [3, 2, 5],
        [1, 8, 9],
        [4, -1, 3],
        ];
}
