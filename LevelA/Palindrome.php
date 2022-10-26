<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     * 
     * @TODO
     * @return string
     */
    public function revert(string $input) : string {
        // get all characters; asuming ascii
        $chars = [];
        for($i = 0; $i < strlen($input); $i++) {
            if (ctype_alpha($input[$i])) {
                $chars[] = $input[$i];
            }
        }
        
        // replace characters
        for($i = 0;$i < strlen($input); $i++) {
            if (ctype_alpha($input[$i])) {
                $input[$i] = array_pop($chars);
            }
        }
        
        return $input;
    }
    public function generatePalindrome()
    {
        /** @TODO */
    
        $res = "";
        for ($i=0; $i < strlen($this->str); $i++) {
            if ($this->str[$i] == '\\'){
                $res = $this->str[$i] . $this->str[$i+1]. $res;
                $i = $i + 1;
            }
            else
                $res = $this->str[$i] . $res;
        }
        return $this->str . $res;
        // return $this->str . $this->revert($this->str);
    }
}
