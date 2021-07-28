<?php
class Prime{

    /**
     * show all prime numbers based on a given integer 
     * and count them
     */
    public static function findPrime($_numbers)
    {
        $notPrimeNumbers = [];
        $originalNumbers = range(2, $_numbers);

        for($_numbers; $_numbers >= 0 ; $_numbers --){
            for($index = 2; $index <= $_numbers; $index ++){
                if($_numbers != $index && fmod($_numbers, $index) == 0){
                $notPrimeNumbers[] = $_numbers;
                break;
                }
            }
        }

        $primeNumbers      = array_diff($originalNumbers, $notPrimeNumbers);
        $totalPrimeNumbers = count($primeNumbers);
        var_dump($primeNumbers);

        return ['totalPrime' => $totalPrimeNumbers, 'allPrimeNumbers' => $primeNumbers];
    }
}

$numbers = 30 ;
Prime::findPrime($numbers);
