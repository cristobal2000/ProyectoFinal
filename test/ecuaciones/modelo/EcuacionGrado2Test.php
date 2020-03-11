<?php

namespace ecuaciones\modelo;

use PHPUnit\Framework\TestCase;

class EcuacionGrado2Test extends TestCase
{

    public function testCalcular()
    {
        $tester = new EcuacionGrado2(2,3,5);

        $x0y5 = $tester->calcular(0);
        $this->assertEquals(5,$x0y5);

        $x2y19 = $tester->calcular(2);
        $this->assertEquals(19,$x2y19);

        $x4y49 = $tester->calcular(4);
        $this->assertEquals(49,$x4y49);

        $x6y95 = $tester->calcular(6);
        $this->assertEquals(95,$x6y95);
    }
}
