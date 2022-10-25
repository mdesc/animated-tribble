<?php

namespace Hackathon\LevelC\Tests;

use Hackathon\LevelC\RotationString;

class LevelCTest extends \PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $res = RotationString::isRotation('waterbottle', 'erbottlewat');

        $this->assertEquals(true, $res);
    }

    public function testB()
    {
        $res = RotationString::isRotation('apple', 'pleap');

        $this->assertEquals(true, $res);
    }

    public function testC()
    {
        $res = RotationString::isRotation('apple', 'ppale');

        $this->assertEquals(false, $res);
    }

    public function testD()
    {
        $res = RotationString::isRotation('coucoucou', 'cou');

        $this->assertEquals(false, $res);
    }

    public function testE()
    {
        $token = date('His');
        $res = RotationString::isRotation($token.'coucoucou', $token.'cou');

        $this->assertEquals(false, $res);
    }

    public function testF()
    {
        $token = date('His');
        $res = RotationString::isRotation($token."onRigoleBien!", "onRigoleBien!".$token);

        $this->assertEquals(true, $res);
    }
}
