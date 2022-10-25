<?php

namespace Hackathon\LevelD\Tests;

use Hackathon\LevelD\Bobby;

class LevelDTest extends \PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $wallet = array(
            20,
            'bouton', 'chewing-gum',
            1, 50,
            20,20,20,20,20,
            200,10,10,10,10,
            5,5,50,5,50,5,
            2,2,2,2,2,
            'ticket',
            1,1,1,10,1,1);

        $glouton = new Bobby($wallet);
        $this->assertEquals($glouton->total, 556);
        $this->assertEquals(count($glouton->wallet), 33);
        $res = $glouton->giveMoney(200);
        $this->assertEquals($res, true);
        $this->assertEquals($glouton->total, 356);
        $this->assertEquals(count($glouton->wallet), 32);
    }

    public function testB()
    {
        $wallet = array(
            20,
            'bouton', 'chewing-gum',
            1, 50,
            20,20,20,20,20,
            200,10,10,10,10,
            5,5,50,5,50,5,
            2,2,2,2,2,
            'ticket',
            1,1,1,10,1,1);

        $glouton = new Bobby($wallet);
        $this->assertEquals($glouton->total, 556);
        $this->assertEquals(count($glouton->wallet), 33);
        $res = $glouton->giveMoney(600);
        $this->assertEquals($res, false);
        $this->assertEquals($glouton->total, 556);
        $this->assertEquals(count($glouton->wallet), 33);
    }

    public function testC()
    {
        $wallet = array(
            20,
            'bouton', 'chewing-gum',
            1, 50,
            20,20,20,20,20,
            200,10,10,10,10,
            5,5,50,5,50,5,
            2,2,2,2,2,
            'ticket',
            1,1,1,10,1,1);

        $glouton = new Bobby($wallet);
        $this->assertEquals($glouton->total, 556);
        $this->assertEquals(count($glouton->wallet), 33);
        $glouton->giveMoney(201);
        $this->assertEquals($glouton->total, 306);
        $this->assertEquals(count($glouton->wallet), 31);

        $glouton->giveMoney(56);
        $this->assertEquals($glouton->total, 206);
        $this->assertEquals(count($glouton->wallet), 29);
    }

    public function testD()
    {
        $token = date('His');
        $wallet = array($token,
            20,
            'bouton', 'chewing-gum',
            1, 50,
            20,20,20,20,20,
            200,10,10,10,10,
            5,5,50,5,50,5,
            2,2,2,2,2,
            'ticket',
            1,1,1,10,1,1);

        $glouton = new Bobby($wallet);
        $this->assertEquals($glouton->total, 556+$token);
        $this->assertEquals(count($glouton->wallet), 34);
        $glouton->giveMoney($token);
        $this->assertEquals($glouton->total, 556);
        $this->assertEquals(count($glouton->wallet), 33);

    }
}
