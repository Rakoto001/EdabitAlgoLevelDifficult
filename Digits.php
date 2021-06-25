<?php
class Digits{
    public static function countAlls(string $_words)
    {
        //pour supprimer seulement les espaces on utilise str_replace(' ','', $myWords);
        //pour supprimer les tabulations les sursaut de lignes etc, on utilise:
        //$str = "This is a simple \npiece\tof text.";
        //$new_str = preg_replace("/\s+/", "", $str);
      // var_dump($_words);


        $words = preg_replace("/\s+/", "", $_words);
        $arrWords = str_split($words);
        $letter = 0;
        $number = 0;
       // var_dump($words);
        foreach($arrWords as $arrWord){
        //filter_var : Filtre une variable avec un filtre spécifique
        //FILTER_VALIDATE_INT : Vérifiez si la variable $ int est un entier:
        if (filter_var($arrWord, FILTER_VALIDATE_INT)){
        $number ++;

        }else{
        $letter ++;

        }

        }
      

        return ['number' => $number, 'letter' => $letter];
    }
        // echo $letter;
        // echo $number;

        public static function checkIsNumber($_value)
        {

           return  filter_var($_value, FILTER_VALIDATE_INT) !== false;

        }

}
$mots ='Hell8877 Worl';
print_r( Digits::countAlls($mots) );