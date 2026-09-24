<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
       $end = "";
       
       while($end != "no"){
        echo "Shall we carry on?";
        $end = (String) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
       }
    }
}
