<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $number = null;
        $opp = 0;

        while(true){
            echo "Give a number: ";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($number > 0 || $number < 0){
                $opp += $number;
            }else {
                echo "Sum of the numbers: $opp";
                break;
            }
        }
    }
}
