<?php
class Prime{
    public function isPrime($_number)
    {

        for( $n = 2; $n<$_number; $n++){
          
            if($_number % $n == 0){
              return false;
            }else{
               return true;
            }
        }

    }

    public function detectPrime($_numberGiven)
    {
        for($numberTotest = 2; $numberTotest<=$_numberGiven; $numberTotest++){
            //Prime::isPrime($numberTotest);
            if(Prime::isPrime($numberTotest) ){
                echo($numberTotest);
            }
        }
    }


}

$number = 10;
Prime::detectPrime($number);