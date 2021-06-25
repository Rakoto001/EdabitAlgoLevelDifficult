<?php
class Missingletters{
    public static function giveMissingLetter(array $_letters)
    {
        $lenLetters  = count($_letters);
        $firstLetter = $_letters[0];
        $lastLetter  = $_letters[$lenLetters-1];
        foreach(range($firstLetter, $lastLetter) as $value){
            $originalAlpha[] = $value;
        }
    // array_diff manao comparaison deux ou plusieurs tab , 
    // retourne les valeurs du tableau array1 qui ne sont pas présentes 
    // dans les autres tableaux
         $results = array_diff($originalAlpha, $_letters);
         var_dump($results);
         return $results;
      

    }
}
$letters = ["O", "Q", "R", "S"];
Missingletters::giveMissingLetter($letters);