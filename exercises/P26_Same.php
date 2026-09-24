<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";
        $firstStr = (String) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:";
        $secondStr = (String) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($firstStr == $secondStr){
            echo "Same";
        }else{
            echo "Different";
        }
    }
}
