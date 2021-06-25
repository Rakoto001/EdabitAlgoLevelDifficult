<?php
class Phrase{
    
    public static function makePhrase($_params)
    {
        //*** INFOS  ***/
// ctype_punct() vérifie si la chaîne donnée posède une ponctuation ou non

         $specials = array('/','\\',':',';','!','@','#','$','%','^','*','(',')','_','+','=','|','{','}','[',']','"',"'",'<','>',',','?','~','`','&',' ','.');
         $arrayPhrases = explode(' ', $_params);
         $lenWords     = count($arrayPhrases);
         $lastWords    = $arrayPhrases[$lenWords-1];
         unset($arrayPhrases[$lenWords-1]);
         $rebuildlastWords = str_split($lastWords);
         $flags            = Phrase::getSpecialFlags($rebuildlastWords);
         array_push($arrayPhrases, $flags);
         $finalWords = $arrayPhrases;
         var_dump($finalWords);

         return $finalWords;
         

    }

    /**
     * get the special Flags
     */
    public function getSpecialFlags($_words)
    {
        foreach($_words as $lastWord){
            if($lastWord == '?' || $lastWord == '!' || $lastWord == '.'){
            $tmpFlag = $lastWord;
            }else{
            $tmpWords [] = $lastWord;
            }
        }
        
        $flags = implode(' ',$tmpWords) . strval($tmpFlag);

        return $flags;
    }
}

// $strings = array('ABasdk!@!$#', '!@ # $', '*&$()');
// $strings = "ABasdk!@!$# !@ # $ *&$()";
$strings = "What/// went++ wrong.";


Phrase::makePhrase($strings);