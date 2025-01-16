<?php

namespace  App\BinaryStars\CleanCode\Classes;

class Robot extends Automaton
{
    public function __construct(Position $position, public readonly string $name)
    {
        parent::__construct($position);
    }

    function start(): void {
        $this->setState("started");
    }

    function moveTo(Position $position, callable $onFinish): void {
        $this->position = $position;
        $onFinish("done1");
    }
}