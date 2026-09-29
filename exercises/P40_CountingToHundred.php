<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while($number <= 100){
            echo $number . "\n";
            $number++;
        }
    }
}
