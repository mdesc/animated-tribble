<?php

namespace Hackathon\LevelO;

class FastRandom
{
    private $numberOfInteger;

    public function __construct($numberOfInteger)
    {
        $this->numberOfInteger = $numberOfInteger;
    }

    /**
     * Cette fonction retourne une liste d'integer unique et aléatoires.
     * Cette fonction doit être 20% plus rapide que laRef.
     *
     * @return array
     */
    public function generateRandomNumbers()
    {
        // @TODO You have to modify this ONE
        // Please don't return the ref :D
        $res = array();

        for ($i = 1; $i < $this->numberOfInteger + 1; $i++) {
            array_push($res, $i);
        }

        shuffle($res);
        return $res;
    }


    /**
     * Cette methode est la réference, à vous de la battre
     *
     * @return mixed
     */
    public function generateRandomNumbersLaRef()
    {
        $res = array();

        while (count($res) < $this->numberOfInteger){ 
            $x = rand (1, $this->numberOfInteger);
            if (!(in_array($x, $res)))
                array_push($res, $x);

        }

        return $res;
    }
};
