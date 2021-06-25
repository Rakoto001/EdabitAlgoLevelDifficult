<?php

class Farm{
    const PATT_CHICKENS = 2;
    const PATT_COWS     = 4;
    const PATT_PIGS     = 4;

public static function countAnimals($_givenDataFarms)
{
   
    $tot_chickens = $_givenDataFarms[0] * Farm::PATT_CHICKENS;
    $tot_cows     = $_givenDataFarms[1] * Farm::PATT_COWS;
    $tot_pigs     = $_givenDataFarms[2] * Farm::PATT_PIGS;
    $total        = $tot_chickens + $tot_cows + $tot_pigs;
    echo $total;

    return $total;
}

}

$troupe = [1, 2, 3];
Farm::countAnimals($troupe);