<?php
class Sortbylastchar{

    /**
     * take an array return a string sorted alphabetically by the last character of each word.
     */
    public static function sortCharacter($_parametters)
    {
        // usort : Trie un tableau en utilisant une fonction de comparaison
        // strcmp — Comparaison binaire de chaînes
        $arrayPamars = explode(' ', $_parametters);
        $tmp_reverse = Sortbylastchar::reverseWordsValues($arrayPamars);
        echo '<br>';
        usort($tmp_reverse, 'strcmp');
        $arrangedArray = Sortbylastchar::reverseWordsValues($tmp_reverse);

        return ($arrangedArray);

    }

    /**
     * take an array and reverse all words in array
     */
    public function reverseWordsValues(array $_parametters)
    {
        foreach($_parametters as $key => $values){
            $tmp_reverse[] = strrev($values);
        }

        return $tmp_reverse;
    }
}

// 'test the function'
$values = "stab traction artist approach";
// $values = "herb camera dynamic";
Sortbylastchar::sortCharacter($values);