<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $number = null;
        $avg = 0;
        $count = 0;
        $opp = 0;

        while(true){
            
           $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($number == 0){
                
                if($count == 0){
                    echo "Cannot calculate the average";
                }else{
                    $avg = $opp / $count;
                    echo $avg;
                }

                break;

            }elseif($number > 0){

                $count++;
                $opp += $number;

            }
        }
    }
}