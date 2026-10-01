<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        echo "Give a number: ";
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $fac = 1;

        for ($i = 1; $i <= $number; $i++) {
            $fac *= $i;
        }

        echo "Factorial: $fac";
    }
}
