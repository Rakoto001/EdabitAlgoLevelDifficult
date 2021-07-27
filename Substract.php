<?php
class Substract
{
    /**
     * function that subtracts one positive integer from another,
     *  without using any arithmetic operators 
     */
    public static function giveDifference(int $_parametters1, int $_parametters2)
    {
        if ($_parametters1>$_parametters2){
            $result = range($_parametters1, $_parametters2);
            $difference = count($result)-1;
        }elseif ($_parametters1<$_parametters2) {
            $result = range($_parametters2, $_parametters1);
            $difference = count($result)-1;
        }elseif ($_parametters1 == $_parametters2){
            $difference = 0;
        }
        var_dump($difference);
        
        return $difference;
    }
}
$numbr1 = 0; 
$numbr2 = 0; 
Substract::giveDifference($numbr1, $numbr2);