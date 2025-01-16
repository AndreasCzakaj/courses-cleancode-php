<?php

namespace  App\BinaryStars\CleanCode\Classes;

class Position
{
    public function __construct(int $y, int $x)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public int $x;
    public int $y;
}