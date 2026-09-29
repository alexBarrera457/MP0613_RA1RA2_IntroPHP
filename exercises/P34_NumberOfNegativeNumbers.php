<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $number = null;
        $count = 0;

        while(true){
            echo "Give a number: ";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($number < 0){
                $count ++;
            }else if($number == 0){
                echo "Number of negative numbers: $count";
                break;
            }
        }
    }
}
