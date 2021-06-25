<?php
class Bugger{

    public static function makeBugger(int $_number)
    {
         $save = [];
        
        $len = strlen(strval($_number));

            while($len!=1){
                $numbers = str_split( strval($_number) );
               
                $result = array_product($numbers);
               
                $len --;
                Bugger::makeBugger($result);
                // $save[] = $result;
            // return $save[] = $result;

              $save[] = $result;
         var_dump($save);
        return $save;

         

            }
        // return $save;
           
        // }
    }

    /**
     * return the product of a array
     */
    public static function see( $_numbers)
        {
          var_dump($_numbers);

        }

}

$n = 739;
$number = Bugger::makeBugger($n);
  // Bugger::see($number);