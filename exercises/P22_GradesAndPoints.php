<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points";
        $grade = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($grade < 0){
            echo "impossible!";

        } else if($grade <= 49){
            echo "failed";

        }else if($grade <= 59 ){
            echo "1";

        }else if($grade <= 69){
            echo "2";

        }else if($grade <= 79){
            echo "3";

        }else if($grade <= 89){
            echo "4";

        }else if($grade <= 100){
            echo "5";
        }else if($grade > 100){
            echo "incredible!";
        }

    }
}
