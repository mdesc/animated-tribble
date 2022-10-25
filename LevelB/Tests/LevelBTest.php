<?php

namespace Hackathon\LevelB\Tests;

use Hackathon\LevelB\MyMatrix;

class LevelBTest extends \PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $matrix = new MyMatrix(3, 5);

        $res = $matrix->prettyMatrix();
        $excpeted = <<<PLOP
-\t-\t-\t-\t-\t
-\t-\t-\t-\t-\t
-\t-\t-\t-\t-\t

PLOP;

        $this->assertEquals($res, $excpeted);
    }

    public function testB()
    {
        $matrix = new MyMatrix(3, 5);

        $str =
            '312,654,98785,897564,321
            66,987,55487,151987,213154
            847,95,8987,6198494,546';
        $matrix->str2Matrix($str);
        $res = $matrix->prettyMatrix();
        $excpeted = <<<PLOP
312\t654\t98785\t897564\t321\t
66\t987\t55487\t151987\t213154\t
847\t95\t8987\t6198494\t546\t

PLOP;

        $this->assertEquals($res, $excpeted);
    }

    public function testC()
    {
        $matrix = new MyMatrix(3, 5);

        $str =
            '312,0,98785,897564,321
            66,987,55487,0,213154
            847,95,8987,6198494,546';
        $matrix->str2Matrix($str);
        $res = $matrix->prettyMatrix();
        $excpeted = <<<PLOP
312\t0\t98785\t897564\t321\t
66\t987\t55487\t0\t213154\t
847\t95\t8987\t6198494\t546\t

PLOP;
        $this->assertEquals($res, $excpeted);

        $res = $matrix->fillZero()->prettyMatrix();
        $excpeted = <<<PLOP
0\t0\t0\t0\t0\t
0\t0\t0\t0\t0\t
847\t0\t8987\t0\t546\t

PLOP;
        $this->assertEquals($res, $excpeted);
    }

    public function testD()
    {
        $matrix = new MyMatrix(3, 5);

        $str =
            '0,0,0,0,72
            66,987,55487,6,213154
            847,95,8987,6198494,546';
        $matrix->str2Matrix($str);
        $res = $matrix->prettyMatrix();
        $excpeted = <<<PLOP
0\t0\t0\t0\t72\t
66\t987\t55487\t6\t213154\t
847\t95\t8987\t6198494\t546\t

PLOP;
        $this->assertEquals($res, $excpeted);

        $res = $matrix->fillZero()->prettyMatrix();
        $excpeted = <<<PLOP
0\t0\t0\t0\t0\t
0\t0\t0\t0\t213154\t
0\t0\t0\t0\t546\t

PLOP;
        $this->assertEquals($res, $excpeted);
    }


    public function testE()
    {
        $matrix = new MyMatrix(3, 5);
        $token = date('His');
        $str =
            '0,0,0,0,72
            66,987,55487,6,213154
            847,95,8987,6198494,'.$token;
        $matrix->str2Matrix($str);
        $res = $matrix->prettyMatrix();
        $excpeted = <<<PLOP
0\t0\t0\t0\t72\t
66\t987\t55487\t6\t213154\t
847\t95\t8987\t6198494\t$token\t

PLOP;
        $this->assertEquals($res, $excpeted);

        $res = $matrix->fillZero()->prettyMatrix();
        $excpeted = <<<PLOP
0\t0\t0\t0\t0\t
0\t0\t0\t0\t213154\t
0\t0\t0\t0\t$token\t

PLOP;
        $this->assertEquals($res, $excpeted);
    }

}
