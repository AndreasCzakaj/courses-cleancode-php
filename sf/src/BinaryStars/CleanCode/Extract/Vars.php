<?php

namespace App\BinaryStars\CleanCode\Extract;

class Vars
{

    public function query(string $platform, string $browser)
    {
        if (($platform->toUpperCase()->indexOf("MAC") > -1) &&
            ($browser->toUpperCase()->indexOf("IE") > -1)) {
        // do something
        }
    }

    public function duplication($value) {
        $a = 1;

        $b = $a + $this->getConfigs()["defaultRate"];
        $c = $value + $this->getConfigs()["defaultRate"];

        return $a + $b + $c;
    }

    function getConfigs(): array {
        $out = [];
        $out["port"] = 8080;
        $out["defaultRate"] = 1.23;
        $out["standardRate"] = 1.23;
        return $out;
    }
}