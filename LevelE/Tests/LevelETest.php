<?php

namespace Hackathon\LevelE\Tests;

use Hackathon\LevelE\MaxiInteger;

class LevelETest extends \PHPUnit\Framework\TestCase
{
    public function testOne()
    {
        $int1 = new MaxiInteger('123');
        $int2 = new MaxiInteger('123');

        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '246');
    }

    public function testTwo()
    {
        $int1 = new MaxiInteger('3000');
        $int2 = new MaxiInteger('1');

        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '3001');
    }

    public function testTree()
    {
        $int1 = new MaxiInteger('109');
        $int2 = new MaxiInteger('3');

        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '112');
    }

    public function testFour()
    {
        $int1 = new MaxiInteger('3');
        $int2 = new MaxiInteger('109');

        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '112');
    }

    public function testFive()
    {
        $int1 = new MaxiInteger('564321');
        $int2 = new MaxiInteger('564321');
        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '1128642');
    }

    public function testSix()
    {
        $int1 = new MaxiInteger('99999');
        $int2 = new MaxiInteger('2');

        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '100001');
    }

    public function testSeven()
    {
        $int1 = new MaxiInteger('564651321987891981313216876132132468748409419879871321346587984616198198756465132198789198131321687613213246874840941987987132134658798461619819875646513219878919813132168761321324687484094198798713213465879846161981987');
        $int2 = new MaxiInteger('98789613232749784975473237237249816823442721437467687987987896132327497849754732372372498168234427214374676879879878961323274978497547323723724981682344272143746768798798789613232749784975473237237249816823442721437467687987');
        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), '98790177884071772867454550454125948955911469846887567859309242720312114047953488837504696957432558536062290093126753802265262965629681982522186601502219918656966647718611921781994071109662957331436048530036908601283629669974');
    }

    public function testHeigh()
    {
        $token = date('His');
        $int1 = new MaxiInteger((string)$token);
        $int2 = new MaxiInteger('2');
        $res = $int1->add($int2);
        $this->assertEquals($res->getValue(), (string)$token+2);
    }
}
