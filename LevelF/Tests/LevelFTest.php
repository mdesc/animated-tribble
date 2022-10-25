<?php

namespace Hackathon\LevelF\Tests;

use Hackathon\LevelF\MyList;

class LevelFTest extends \PHPUnit\Framework\TestCase
{
    public function testCanAppendElementToDoubleList()
    {
        $list = new MyList();

        $list->append(4)->append(5)->append(6);

        $this->assertEquals(6, $list->getFirstElementByValue(5)->getNext()->getValue());
        $this->assertEquals(5, $list->getFirstElementByValue(5)->getValue());
    }

    public function testCanPrependElementToDoubleList()
    {
        $list = new MyList();

        $list->prepend(3)->prepend(2)->prepend(1);

        $this->assertEquals(3, $list->getFirstElementByValue(2)->getNext()->getValue());
        $this->assertEquals(2, $list->getFirstElementByValue(2)->getValue());
    }

    public function testCanPop()
    {
        $list = new MyList();

        $list->prepend(3)->prepend(2)->prepend(1);
        $this->assertEquals(3, $list->getLength());
        $list->pop();

        $this->assertEquals(null, $list->getFirstElementByValue(2)->getNext());
        $this->assertEquals(2, $list->getFirstElementByValue(2)->getValue());
        $this->assertEquals(2, $list->getLength());

        $list->pop()->pop();
        $this->assertEquals(0, $list->getLength());
    }

    public function testCanShift()
    {
        $list = new MyList();

        $list->prepend(3)->prepend(2)->prepend(1);
        $this->assertEquals(3, $list->getLength());
        $list->shift();

        $this->assertEquals(3, $list->getFirstElementByValue(2)->getNext()->getValue());
        $this->assertEquals(2, $list->getFirstElementByValue(2)->getValue());
        $this->assertEquals(2, $list->getLength());

        $list->shift()->shift();
        $this->assertEquals(0, $list->getLength());
        $list->shift();
        $this->assertEquals(0, $list->getLength());
    }

    public function testHasValue()
    {
        $list = new MyList();

        $list->append(4)->append(5)->append(6)->prepend(3)->prepend(2)->prepend(1);
        $this->assertEquals(true, $list->hasValue(1));
        $this->assertEquals(true, $list->hasValue(2));
        $this->assertEquals(true, $list->hasValue(3));
        $this->assertEquals(true, $list->hasValue(4));
        $this->assertEquals(true, $list->hasValue(5));
        $this->assertEquals(true, $list->hasValue(6));
        $this->assertEquals(false, $list->hasValue(56));
        $this->assertEquals(false, $list->hasValue(null));
    }

    public function testPrintConsole()
    {
        $list = new MyList();
        $list->append(2)->prepend(3);
        $list->printConsole();
        $this->expectOutputString('3, 2, ');
    }
}
