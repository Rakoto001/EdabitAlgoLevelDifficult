<?php
class Unique{

    /* for($indexW1 = 0; $indexW1<$len1; $indexW1++){
                $arrWords1[$indexW1];
*/
    public static function giveLetters(string $_words1, string $_words2)
    {
        $arrWords1 = str_split($_words1);
        $arrWords2 = str_split($_words2);
        $len1      = count($arrWords1);
        $len2      = count($arrWords2);

        foreach($arrWords1 as $key => $word1){
            $results = array_search($word1 , $arrWords2);

                if ($results === false){

                }else{

                   $tmp_partagedWords[] = $arrWords2[$results];
                   //suprime les mots correspondants au premier éléments
                   unset($arrWords2[$results]);
                    //suprime les mots correspondant au second éléments
                   unset($arrWords1[$key]);

                }

            }
           $tmp_partagedWords = implode('', $tmp_partagedWords);
           $unikWords1        = implode('',$arrWords2);
           $unikWords2        = implode('',$arrWords1);
           $results           = [$tmp_partagedWords, $unikWords1, $unikWords2];

            return $results;

    }

}

$letters2 = "sharp";
$letters1 = "soap";

Unique::giveLetters($letters1, $letters2);