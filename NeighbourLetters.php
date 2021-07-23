<?php
class NeighbourLetters
{
    /**
     * takes a string and checks if every single character is preceded 
     * and followed by a character adjacent to it in the english alphabet
     * return bool
     */
    public static function checkNeighbourLetters(string $_paramsLetters)
    {
        $arrayParamsWords = str_split($_paramsLetters);
        $wordsLenth = count($arrayParamsWords);
        foreach($arrayParamsWords as $key => $words){
            if ($key == 0) {
                $tmp_key = $key + 1;
                $arrayParamsWords[$tmp_key];
                $result =  self::checkRange($arrayParamsWords[$key], $arrayParamsWords[$tmp_key]);

                if ($result == 0) {

                    return false;
                }
                
            }elseif ($key == $wordsLenth-1) {
                $tmp_left_key = $key-1;
                $result =  self::checkRange($arrayParamsWords[$key], $arrayParamsWords[$tmp_left_key]);

                if ($result == 0) {
                    return false;
                }

            }elseif ($key != 0) {
                $tmp_left_key  = $key-1;
                $tmp_right_key = $key+1;
                $result =self::checkRange($arrayParamsWords[$key], $arrayParamsWords[$tmp_left_key]);
                $result =  self::checkRange($arrayParamsWords[$key], $arrayParamsWords[$tmp_right_key]);

                if ($result == 0) {
                    return false;
                }

            }
        }
        echo 'OK';

        return true;
    }

    /**
     * check range between 2 given words return true or false
     */
    public static function checkRange($_words1, $_words2)
    {
        //range marche de a à z ou l'unverse(z à a)
        $wordsRange = range($_words1, $_words2);
        $lenthRange = count($wordsRange);
        if ($lenthRange == 2) {

            return 1;
        }else{

            return 0;
        }
    }
}
$words = "zbc";
NeighbourLetters::checkNeighbourLetters($words);