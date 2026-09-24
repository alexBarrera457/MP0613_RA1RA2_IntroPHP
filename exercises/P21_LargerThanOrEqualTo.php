<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";
        $num1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Give the second number:\n";
        $num2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($num1 > $num2){
            echo "Greater number is: $num1\n";
        } else if($num1 < $num2){
            echo "Greater number is: $num2\n";
        } else{
            echo "The numbers are equal!\n";
        } 

        // Get input from the user
        
        // Prompt the user for input
        
        // Get input from the user

        // Check year value
    }
}
