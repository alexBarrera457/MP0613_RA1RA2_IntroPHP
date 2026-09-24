<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you?";
        $old = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($old < 0 || $old > 120){
            echo "Impossible!";
        }else{
            echo "Ok";
        }
    }
}
