<?php

namespace Hackathon\LevelO\Tests;

use Hackathon\LevelO\FastRandom;

class LevelOTest extends \PHPUnit\Framework\TestCase
{
    
    public function testA()
    {
        $generator = new FastRandom(10000);

        $yourPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbers();
        $yourPostExecTime = microtime(true);
        $yourExecTime = $yourPostExecTime - $yourPreExecTime;


        $laRefPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbersLaRef();
        $laRefPostExecTime = microtime(true);
        $laRefExecTime = $laRefPostExecTime - $laRefPreExecTime;

        $this->assertGreaterThanOrEqual($yourExecTime, $laRefExecTime*0.8);
    }

    public function testB()
    {
        $generator = new FastRandom(50000);

        $yourPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbers();
        $yourPostExecTime = microtime(true);
        $yourExecTime = $yourPostExecTime - $yourPreExecTime;


        $laRefPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbersLaRef();
        $laRefPostExecTime = microtime(true);
        $laRefExecTime = $laRefPostExecTime - $laRefPreExecTime;

        $this->assertGreaterThanOrEqual($yourExecTime, $laRefExecTime*0.8);
    }

    public function testC()
    {
        $generator = new FastRandom(rand (10000, 50000));

        $yourPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbers();
        $yourPostExecTime = microtime(true);
        $yourExecTime = $yourPostExecTime - $yourPreExecTime;


        $laRefPreExecTime = microtime(true);
        $a = $generator->generateRandomNumbersLaRef();
        $laRefPostExecTime = microtime(true);
        $laRefExecTime = $laRefPostExecTime - $laRefPreExecTime;

        $this->assertGreaterThanOrEqual($yourExecTime, $laRefExecTime*0.8);
    }

    public function testD()
    {
        $generator = new FastRandom(10);

        $a = $generator->generateRandomNumbers();
        $b = $generator->generateRandomNumbersLaRef();

        // Correct Number of Items
        $this->assertEquals(count($a), count($b));

    }

    public function testE()
    {
        $generator = new FastRandom(10);
        $sortedArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $a = $generator->generateRandomNumbers();

        // The array doesn't lost data
        $nbDiff = count(array_diff($sortedArray, $a));
        $this->assertEquals(0, $nbDiff);   

    }

    public function testF()
    {
        $generator = new FastRandom(10);
        $sortedArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $a = $generator->generateRandomNumbers();

        // The array is correctly mélangé :D
        $nbDiff = count(array_diff_assoc($sortedArray, $a));

        $this->assertGreaterThan(0, $nbDiff);
    }  

    public function testG()
    {
        $generator = new FastRandom(10);
        $sortedArray = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
        $a = $generator->generateRandomNumbers();

        // The array is correctly mélangé :D
        $nbDiff = count(array_diff_assoc($sortedArray, $a));

        $this->assertGreaterThan(0, $nbDiff);
    } 
}