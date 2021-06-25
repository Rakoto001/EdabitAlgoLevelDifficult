<?php
class Symbolscore{
    public function checkScore($_arrayValues)
    {
        $tmp_results = [];
        foreach($_arrayValues as $value){
           $tmp_results[] = Symbolscore::giveNumberSumValue($value);
        }
        $results = array_sum($tmp_results);
        echo $results;
    return $results;
    }

    public static function giveNumberSumValue($_arrayParams)
    {
        $numbers = [];
       
        foreach($_arrayParams as $value){
            if($value == '#'){
                $numbers[] = 5;
            }elseif($value == 'O'){
                $numbers[] = 3;
            }elseif($value == 'X'){
                $numbers[] = 1;
            }elseif($value == '!'){
                $numbers[] = -1;
            }elseif($value == '!!'){
                $numbers[] = -3;
            }elseif($value == '!!!'){
                $numbers[] = -5;
            }
        }
       $sommeValue = array_sum($numbers);
  
       return $sommeValue;
      
    }
}
$symbols = [
    ["#", "O", "#", "!!", "X", "!!", "#", "O", "O", "!!", "#", "X", "#", "O"],
    ["!!!", "!!!", "!!", "!!", "!", "!", "X", "!", "!!!", "O", "!", "!!!", "X", "#"],
    ["#", "X", "#", "!!!", "!", "!!", "#", "#", "!!", "X", "!!", "!!!", "X", "O"],
    ["!!", "X", "!!", "!!", "!!!", "#", "O", "O", "!!!", "#", "O", "O", "#", "!!"],
    ["O", "X", "#", "!", "!", "X", "!!!", "O", "!!!", "!!", "O", "!", "O", "X"],
    ["!!", "!!!", "X", "!!!", "!!", "!!", "!!!", "X", "O", "!", "#", "!!", "!!", "!!!"],
    ["!!", "!!", "#", "O", "!", "!!", "!", "!!!", "#", "O", "#", "!", "#", "!!"],
    ["X", "X", "O", "X", "!!!", "#", "!!!", "!!!", "X", "X", "X", "!", "#", "!!"],
    ["O", "!!!", "!", "O", "#", "!", "!", "#", "X", "X", "#", "O", "!!", "!"],
    ["X", "!", "!!", "#", "#", "X", "!!", "O", "!!", "X", "X", "!!", "#", "X"],
    ["!", "!!", "!!", "O", "!!", "!!", "#", "#", "!", "!!!", "O", "!", "#", "#"],
    ["!", "!!!", "!!", "X", "!!", "!!", "#", "!!!", "O", "!!", "!!!", "!", "!", "!"],
    ["!!!", "!!!", "!!", "O", "!", "!", "!!!", "!!!", "!!", "!!", "X", "!", "#", "#"],
    ["O", "O", "#", "O", "#", "!", "!!!", "X", "X", "O", "!", "!!!", "X", "O"]
  ];
Symbolscore::checkScore($symbols);