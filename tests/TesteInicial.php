<?php

use PHPUnit\Framework\TestCase;

class TesteInicial extends TestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testItShouldBeFail(): void
    {
        $this->assertTrue(false, 'FALSE_IS_NOT_TRUE_:(');
    }
}
