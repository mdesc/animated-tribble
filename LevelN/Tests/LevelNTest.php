<?php

namespace Hackathon\LevelN\Tests;

use Hackathon\LevelN\Sec;

class LevelNTest extends \PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $tool = new Sec('toto');

        $a = $tool->crypt('generateSalt');
        $b = $tool->crypt('hackSaltGenerator');

        $this->assertEquals($a, $b);
    }

    public function testB()
    {
        $token = date('His');
        $tool = new Sec($token);

        $a = $tool->crypt('generateSalt');
        $b = $tool->crypt('hackSaltGenerator');

        $this->assertEquals($a, $b);
    }

    public function testC()
    {
        $tool = new Sec('lol');

        $a = $tool->crypt('generateSalt');
        $b = $tool->crypt('hackSaltGenerator');

        $this->assertEquals('3ddc451da17158fb67ff9a1eea502c65', $b);
        $this->assertEquals('3ddc451da17158fb67ff9a1eea502c65', $a);
    }
}
