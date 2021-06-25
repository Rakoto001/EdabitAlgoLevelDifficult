<?php

class Multiplication{
    public function getProd(array $_numbers)
    {
        $results = [];
        foreach($_numbers as $key => $number){
            $tmpNumbers = $_numbers;
            // var_dump($tmpNumbers);
            unset($tmpNumbers[$key]);
           $results[] = array_product($tmpNumbers);
                    //    var_dump($tmpNumbers) ;
                    //    echo '<br>';


        }

        print_r($results);
    }
}

$n = [1, 7, 3, 4];
Multiplication::getProd($n);