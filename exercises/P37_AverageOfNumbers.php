<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $number = null;
        $avg = 0;
        $count = 0;
        $opp = 0;

        while(true){
            echo "Give a number: ";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($number != 0){
                $count ++;
                $opp += $number;
                $avg = $opp / $count;
                
            }else {
                
                echo "Average of the numbers: $avg";
                break;
            }
        }
    }
}
