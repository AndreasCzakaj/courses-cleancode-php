<?php

namespace App\BinaryStars\CleanCode\Classes;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    function testNewPerson() {
        $person = new Person();
        $person->id = "1";
        $person->fistName = "f";
        $person->lastName = "l";
        $person->state = "new";
        $person->addressStreetAndNo = "street 1";
        $person->addressZipAndCity = "12345 City";
        $person->addressState = "s";
        $person->obsoleteInfo1 = "xxx";

        $this->assertNotNull($person);
    }
}
