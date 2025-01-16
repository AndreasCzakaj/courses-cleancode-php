<?php

namespace App\BinaryStars\CleanCode\Extract;

use PHPUnit\Framework\TestCase;

class VarsTest extends TestCase
{
    function testGetConfigs()
    {
        $vars = new Vars();
        $this->assertEquals(8080, $vars->getConfigs()["port"]);

    }
}
