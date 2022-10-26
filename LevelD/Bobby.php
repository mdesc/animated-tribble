<?php

namespace Hackathon\LevelD;

class Bobby
{
    public $wallet = array();
    public $total;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
        $this->computeTotal();
    }

    /**
     * @TODO
     *
     * @param $price
     *
     * @return bool|int|string
     */
    public function giveMoney($price)
    {
        /** @TODO */
        if ($price > $this->total) {
            return false;
        }
        
        $leftToPay= $price;

        //paye avec le premier gros billet qu'il trouve
        for ($i = 0; $i < count($this->wallet); $i++) {

            if ($leftToPay > 0){
                if (is_numeric($this->wallet[$i]) >= $leftToPay) {
                    printf("il donne %u",$this->wallet[$i]);
                    printf("left to pay: %u ",$leftToPay);

                    $this->total =$this->total - $this->wallet[$i];
                    $leftToPay -= $this->wallet[$i];
                    unset($this->wallet[$i]);

                }
            }
        }

        return true;
    }

    /**
     * This function updates the amount of your wallet
     */
    private function computeTotal()
    {
        $this->total = 0;

        foreach ($this->wallet as $element) {
            if (is_numeric($element)) {
                $this->total += $element;
            }
        }
    }
}
