<?php
class Shadow{

    public static function shadowSentence(string $_words1, string $_words2)
    {
        $arrayWords1 = explode(' ', $_words1);
        $arrayWords2 = explode(' ', $_words2);
        $lenWords1   = count($arrayWords1);
        $lenWords2   = count($arrayWords1);
        if($lenWords1 == $lenWords2){
            for($i=0; $i<$lenWords1; $i++){
                if(strlen($arrayWords1[$i]) == strlen($arrayWords2[$i])){
                    echo strlen($arrayWords1[$i]);
                }else{

                    return false;
                }
            }
        }

    return true;
    }
}
$words1 = "they ar round";
$words2 = "fold two times";

Shadow::shadowSentence($words1, $words2);