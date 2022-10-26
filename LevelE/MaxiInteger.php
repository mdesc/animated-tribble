<?php

namespace Hackathon\LevelE;

class MaxiInteger
{
    private $value;
    private $reverse;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * @FIX : CAN BE UPDATED
     *
     * @param MaxiInteger $other
     * @return $this|MaxiInteger
     */
    public function add(MaxiInteger $other)
    {
        if (is_null($other)) {
            return $this;
        }

        /**
         * You can delete this part of the code
         */
        $maxLength = max(strlen($this->getValue()), strlen($other->getValue()));
        if ($maxLength) {
            $other = $other->fillWithZero($maxLength);
            $this->setValue($this->fillWithZero($maxLength)->getValue());
        }

        return $this->realSum($this, $other);
    }

    /**
     * @TODO
     *
     * @param MaxiInteger $a
     * @param MaxiInteger $b
     * @return MaxiInteger
     */
    private function realSum($a, $b)
    {
        $a = $a->getValue();
        $b = $b->getValue();
        $res = "";
        $retenue = 0;
        $lena = strlen((string)$a);
        $lenb = strlen((string)$b);
        $bigger = strrev($a);
        $smaller = strrev($b);
        if ($lena < $lenb){
            $bigger = strrev($b);
            $smaller= strrev($a);
        }
        for ($i=0; $i < strlen($bigger); $i++) { 
            if($i<strlen($smaller)){
                $tmp = (int) $bigger[$i] + (int) $smaller[$i];
                $retenue = $tmp / 10;
                $res = $res . (string) ($tmp%10 + $retenue);
            }
            $res = $res .(string) ((int)$bigger[$i] + $retenue);
            $retenue = 0;
        }
    }

    private function setValue($value)
    {
        $this->value = $value;
        $this->reverse = $this->createReverseValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    private function getNthOfMaxiInteger($n)
    {
        return $this->value[$n];
    }
    private function createReverseValue($value)
    {
        return strrev($value);
    }

    private function fillWithZero($totalLength)
    {
        return new self(strrev(str_pad($this->reverse, $totalLength, '0')));
    }
}
