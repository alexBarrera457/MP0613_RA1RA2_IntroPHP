<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here 
        $number = null;
        $count = 0;

        while(true){
            echo "Give a number: ";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($number != 0){
                $count ++;
            }else{
                echo "Number of numbers: $count";
                break;
            }
        }
        
    }
}
