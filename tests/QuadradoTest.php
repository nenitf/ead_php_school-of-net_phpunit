<?php

use App\Quadrado;

class QuadradoTest extends PHPUnit\Framework\TestCase{
    public function testIFTrue()
    {
        $quadrado = new Quadrado(3, 2);
        $area = $quadrado->getArea();
        $this->assertEquals(6.0, $area);
    }
}

