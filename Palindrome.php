<?php
class Palindrome{
    public function checkPalindrome(array $_paramsToCHeck)
    {
        foreach($_paramsToCHeck as $value){

           $valueResults =  Palindrome::checkValue($value);
           $intValue = $valueResults['number'];
           $strValue = $valueResults['str']; 
           $intScore = Palindrome::giveValuePalindromeSentence($intValue);
           $strScore = Palindrome::giveValuePalindromeSentence($strValue);
           $mp_tot_score []= $intScore + $strScore;


        }
        var_dump($mp_tot_score);
        $values = $mp_tot_score;

        return $values;


    }

    /**
     * test the value if string or integer; return array
     */
    public static function checkValue(string $_values)
    {
        $tmp_number_results = false;
        $tmp_string_results = false;
        $words = str_split($_values);
        foreach($words as $wordToCheck){
            if (filter_var($wordToCheck, FILTER_VALIDATE_INT)) {
                $tmp_number_results[] =  $wordToCheck;
            }else{
                $tmp_string_results[] =  $wordToCheck;
            }
        }

        $results = ['number' => $tmp_number_results, 'str' => $tmp_string_results];

        return $results;

    }

    /**
     * give 0 or 1 in sentence Palindrome
     */
    public static function giveValuePalindromeSentence($_sentence)
    {

        if($_sentence != false){
        $strSentence = trim(implode('', $_sentence));
        $reversedSentence = strrev($strSentence);
        if( $strSentence == $reversedSentence){
            $score = 1;
        }else{
            $score = 0;
        }

        return $score;
    }


    }
}


$parameters = ["7a", "5f", "6c"];

// test la function
Palindrome::checkPalindrome($parameters);