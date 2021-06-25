<?php
class handShake{

public static function shakeHands($_numbers)
{
    $count =0;
    $reste = $_numbers-1;
    for($i=0; $i<$_numbers; $i++){
      $count = $reste--;
      $tot[] = $count;
    }

    $handShakes = array_sum($tot);
   
    return $handShakes;
}

}

$n = 9999;
handShake::shakeHands($n);