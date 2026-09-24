<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        
        $number =  null;

        while(true){
            echo "Give a number:";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($number < 0){
                echo "Unsuitable number";
            }else if($number > 0){
                $opp = $number ** 2;
                echo $opp;
            } else{
                break;
            }
        
        }
    }
}
