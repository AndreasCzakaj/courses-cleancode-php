<?php

declare(strict_types=1);

namespace App\BinaryStars\CleanCode\Extract;

class Comments
{
    public function init(): void
    {
        // get the port
        $defaultPortAsString = "8080";

        // Admin spelled the env param wrong, and we can't change it
        $portAsString = getenv("prot");

        // Fallback to default if "prot" isn't set
        $port = (int)$defaultPortAsString;
        if ($portAsString) {
            $port = (int)$portAsString;
        }

        // start server on given port
        echo $port . PHP_EOL;
    }
}
