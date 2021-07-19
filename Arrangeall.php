<?php
class Arrangeall{

    public static function arrangePair(array $_paramsNumbers)
    {
        $tmp_array = [];
        $arrayLen = count($_paramsNumbers);

        if( $arrayLen != 0 ){
            
        $firstNumber = $_paramsNumbers[0];
        $lastNumber  = $_paramsNumbers[$arrayLen-1];
        unset($_paramsNumbers[0]);
        unset($_paramsNumbers[$arrayLen-1]);
        $dualNumber = [$firstNumber, $lastNumber];
        $tmp_array = array_merge($tmp_array, $_paramsNumbers);
        Arrangeall::arrangePair($tmp_array);
        $results[] =  $dualNumber;
        
        }elseif($arrayLen == 0) {

            $results = [];

        }
        var_dump ($results);

        return $results;

    }
     
    

}
//
// $number = [1, 2, 3, 4, 7, 5, 1, 6, 7, 88888];
$number = [1, 2, 3, 4, 5, 6, 7];
Arrangeall::arrangePair($number);