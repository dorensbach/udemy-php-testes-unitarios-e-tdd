<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class TesteDepends extends TestCase
{
    public function testZeroAddOne(): int
    {
        $a = 0;
        $b = 1;

        $soma = $a + $b;

        $this->assertEquals(1, $soma);

        return $soma;
    }

    /**
     * @depends testZeroAddOne
     */
    public function testOneAddFour($a): int
    {
        $b = 4;
        $soma = $a + $b;

        $this->assertEquals(5, $soma);

        return $soma;
    }
}