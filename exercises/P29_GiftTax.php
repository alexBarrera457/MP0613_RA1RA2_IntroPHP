<?php

class P29_GiftTax
{
    public function main(): void
    {
        echo "Value of the gift?";
        $gift = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($gift < 5000){
            echo "No tax!";
        }else if ($gift < 25000) {
            $tax = 100 + ($gift - 5000) * 0.08;
            echo "Tax: $tax";
        } else if ($gift < 55000) {
            $tax = 1700 + ($gift - 25000) * 0.10;
            echo "Tax: $tax";
        } else if ($gift < 200000) {
            $tax = 4700 + ($gift - 55000) * 0.12;
            echo "Tax: $tax";
        } else if ($gift < 1000000) {
            $tax = 22100 + ($gift - 200000) * 0.15;
            echo "Tax: $tax";
        } else {
            $tax = 142100 + ($gift - 1000000) * 0.17;
            echo "Tax: $tax";
        }
       
    }
}
