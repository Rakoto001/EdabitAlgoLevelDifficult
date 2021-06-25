<?php
class Expand{

    public static function makeExpand(int $_numbers)
    {
          $results =[];

        //strval convetr int to string
       if($_numbers>0){
          $values =  str_split( strval($_numbers) );
          $len = count($values);
             
        foreach($values as $value)
        {
          $puissance = pow(10, $len-1);
          $results [] = $value  * $puissance;
          $len --;
        }

       }else{
         echo 'number isnt accepted';
         return false;
       }
      
      return $results;
    }
}

$n= 105;
print_r(Expand::makeExpand($n));