<?php
class Alias{
    /**
     * test if letter on the firstname is the same in the two first alias
     */
    public static function isCorrectAs(array $_arrayNames, array $_arrayAlias)
    {
        $len = Alias::isBigger($_arrayNames, $_arrayAlias);
        for($i=0; $i<$len; $i++){
            //extrait le first letter afaka atao substr
            $firstNameLetter = $_arrayNames[$i][0];
            $letters         = explode(' ', $_arrayAlias[$i]);
            $firstLetter     = $letters[0][0];
            $secondLetter    = $letters[1][0];
            if($firstNameLetter != $firstLetter || $firstNameLetter != $secondLetter){
                $result = 'NON';
                echo $result;
                return $result;
            }

        }
            $result = 'OK';
             echo $result;

        return $result;
    }


    /**
     * compare two count()array and return the high of them
     */
    public static function isBigger($_args1, $_args2)
    {
        $lenArray1 = count($_args1);
        $lenArray2 = count($_args2);
        
        if($lenArray1>$lenArray2){
            $bigest  = $lenArray1;
        }else{
            $bigest  = $lenArray2;
        }

        // print_r( $bigest);
        return $bigest;

    }
}
$name = ["Adrian M.", "Harriet S.", "Mandy T."];
$alias = ["Amazing Artichoke", "Hopeful Hedgehog", "Marvelous Mouse"];

Alias::isCorrectAs($name, $alias);