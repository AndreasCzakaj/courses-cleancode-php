<?php

namespace  App\BinaryStars\CleanCode\Classes;

abstract class Automaton
{
    private $state = "off";

    public function __construct(protected Position $position)
    {
    }

    public final function getState(): string {
        return $this->state;
    }

    protected final function setState(string $newState): void {
        $this->state = $newState;
    }

    abstract function start(): void;


    abstract function moveTo(Position $position, callable $onFinish): void;

}