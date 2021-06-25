<?php
class Remove{
    public static function removeLetters(array $_params, string $_words)
    {
       $arrWords = str_split($_words);
       foreach($arrWords as $word){
           $results = array_search($word, $_params);
           unset($_params[$results]);
       }
       var_dump( $_params);
       return $_params;

      
    }
}

$params = ["d", "b", "t", "e", "a", "i"];
$string = "edabit";

Remove::removeLetters($params, $string);