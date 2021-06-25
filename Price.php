<?php

class Price{

    public function getPrice($_paramPrices = null)
    {
        // $test = "salad xsfgdsf ($4.99)";
        foreach($_paramPrices as $key => $_price){
           $priceExploded = explode('(', $_price) ;
           $length = count( $priceExploded);
        //    print_r($price);
            $correctPrice = explode (')', $priceExploded[$length-1]) ;
            $price = $correctPrice[0];
            
            echo $price .'<br>';

        }

        return $price;
        // print_r(explode('(', $_paramPrices));
    }
}
$things = ["ice cream ($5.99)", "banana ($0.20)", "sandwich ($8.50)", "soup ($1.99)"];
Price::getPrice($things);