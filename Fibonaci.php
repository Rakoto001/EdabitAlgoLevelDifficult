<?php
class Fibonaci{
    public static function fibo(int $_number)
    {
        $a = 0;
        $b = 1;
        $reste = 0;
        while($reste <$_number){

            $reste = $a + $b;
            $a = $b;
            $b = $reste;

        }
        var_dump($reste);
                                // a=b + b=reste
        //                        reste =  a + b 
        //   1 + 1 = 2,
        //   1 + 2 = 3,
        //   2 + 3 = 5,
        //  3 + 5 = 8;

    }
}

$n = 5;
Fibonaci::fibo($n);