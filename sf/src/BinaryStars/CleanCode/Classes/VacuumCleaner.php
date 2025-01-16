<?php

namespace  App\BinaryStars\CleanCode\Classes;

class VacuumCleaner extends Automaton
{
    public function __construct(Position $position, public readonly string $type)
    {
        parent::__construct($position);
    }

    function start(): void {
        $this->setState("started");
    }

    function stop(): void
    {
        $this->setState("stopped");
    }

    function moveTo(Position $position, callable $onFinish): void {
        $this->position = $position;
        $onFinish("done2");
    }
}