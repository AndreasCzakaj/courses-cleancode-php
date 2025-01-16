<?php

namespace App\BinaryStars\CleanCode\Classes;

use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase
{
    public array $collector;
    public Automaton $automaton;

    protected function setUp(): void
    {
        $collector = [];
    }

    function testRobot() {
        $this->automaton = new Robot(new Position(2, 1), "HAL9000");
        $this->assertEquals("off", $this->automaton->getState());

        $this->automaton->start();
        $this->assertEquals("started", $this->automaton->getState());

        $this->automaton->moveTo(new Position(42, 23), function (string $info) {
            $this->collector[] = $info;
        });

        $this->assertEquals(["done1"], $this->collector);
    }
}
