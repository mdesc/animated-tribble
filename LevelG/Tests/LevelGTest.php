<?php

namespace Hackathon\LevelG\Tests;

use Hackathon\LevelG\MyBinaryTreeInArray;

class LevelGTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateTree()
    {
        $tree = new MyBinaryTreeInArray();
        $this->assertEquals(true, $tree->isEmpty());
    }

    public function testCanAddValue()
    {
        $tree = new MyBinaryTreeInArray();
        $tree->add(3)->add(5)->add(7)->add(2)->add(10)->add(9)->add(6);
        $this->assertEquals(15, $tree->hasValue(10));
        $this->assertEquals(1, $tree->hasValue(3));
        $this->assertEquals(7, $tree->hasValue(7));
        $this->assertEquals(null, $tree->hasValue(17));
    }

    public function testCanGetEnough()
    {
        $tree = new MyBinaryTreeInArray();
        $tree->add(3)->add(5)->add(7)->add(2)->add(10)->add(9)->add(6);

        $this->assertEquals(3, $tree->getFather($tree->hasValue(10)));
        $this->assertEquals(10, $tree->getRightValue($tree->hasValue(7)));
        $this->assertEquals(6, $tree->getLeftValue($tree->hasValue(7)));

        $this->assertEquals(false, $tree->getRightValue($tree->hasValue(10)));
        $this->assertEquals(false, $tree->getLeftValue($tree->hasValue(9)));
        $this->assertEquals(false, $tree->getFather($tree->hasValue(3)));
    }
}
