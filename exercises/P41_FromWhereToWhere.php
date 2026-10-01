<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        echo "Where to? ";
        $number1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Where from? ";
        $number2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while($number2 <= $number1){
            echo "$number2\n";
            $number2++;
        }
    }
}
