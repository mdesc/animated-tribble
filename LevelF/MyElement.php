<?php

namespace Hackathon\LevelF;

class MyElement
{
    private $value;
    private $next;

    public function __construct($value, $next)
    {
        $this->value = $value;
        $this->next = $next;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    public function printConsole()
    {
        echo "$this->value, ";

        return $this;
    }
}
