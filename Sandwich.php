<?php
class Sandwich{
    public static function isIcecreamSandwich(string $_phrases)
    {
       $firstWords =  $_phrases[0];
       $arrayPhrases = str_split($_phrases);
       $reversePhrases = strrev($_phrases);
       $phraseLen = count($arrayPhrases);
       $count = $phraseLen;
       for($index = 0; $index<$phraseLen; $index ++ ){
            for($j = 1; $j<$phraseLen; $j ++ ){
                if( $arrayPhrases[$index] != $arrayPhrases[$j]  ){
                          if( $_phrases[0] == $reversePhrases[0] && $_phrases[1] == $reversePhrases[1] || $_phrases[0] == $reversePhrases[0] ){
                                echo 'OK';

                                return true;

                            }else{

                                return false;

                            }

                    return false;

                } else {

                    echo '4ERROR';

                    return false;
                }
      
            }

       }
    }
}

$phrases = "CDC";

Sandwich::isIcecreamSandwich($phrases);