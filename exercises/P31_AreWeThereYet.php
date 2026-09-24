<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        $number = null;

        while($number != 4){
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            echo "Give a number:";
        }
    }
}
