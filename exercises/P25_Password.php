<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
       echo "Password?";
            
       $pass = (String) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

       if($pass == "Caput Draconis"){
        echo "Welcome!\n";

       }else{
        echo "Off with you!\n";
       }
    }
}
