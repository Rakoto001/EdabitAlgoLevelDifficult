<?php
class Long{

    public static function longest($_words1, $_words2)
    {
        $_Words = null;
      
       $revWords1 = str_split(strrev($_words1)) ;
       $revWords2 = str_split(strrev($_words2));
       $length = count($revWords1);

        for($i=0; $i<$length-1; $i ++){
            if($revWords1[$i] == $revWords2[$i]){
                $words = $revWords1[$i] ;
            }else{
            break;
            }
          $_Words .=$words;

        }
        $matchedWords = strrev($_Words);
        return $matchedWords;
        
    }
}

$mots = "multiplication";
$mots2 = "ration";

long::longest($mots, $mots2);