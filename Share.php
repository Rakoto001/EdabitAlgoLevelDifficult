<?php
class Share{
    
    public static function sharePower(array $_numbers)
    {

       $min = min($_numbers);
       //) recherche dans un tableau une valeur donnée et renvoie la clé.
       $key = array_search($min, $_numbers);
       
       unset($_numbers[$key]);
       foreach($_numbers as $number){
           //calcul 25 %
         $powerToDelete = ( $number * 25 ) /100;

         //ajout 25% pour le minimum

         $tmpPowerToDel[] =  $powerToDelete;
         $newNumber[] = $number - $powerToDelete;


       }
       $totPowerToDel = array_sum($tmpPowerToDel);
       $newMinValue = $totPowerToDel + $min;
       var_dump($newNumber);
       $finalNumber = array_push($totPowerToDel, $newNumber);
       var_dump($newMinValue);
        
    }
}

$number = [4, 1, 4];
Share::sharePower($number);