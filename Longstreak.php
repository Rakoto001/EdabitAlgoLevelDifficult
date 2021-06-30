<?php
class Longstreak{

  /**
   * get the longest day between given date
   */
    public static function getLongestStreak(array $_givenDate){
 
        $dateLenth = count($_givenDate);
        echo $dateLenth -1;
        foreach($_givenDate as $key =>  $date){
            $tmp_key = $key + 1;
            if($key != ($dateLenth-1)){
        //strtotime : Transforme un texte anglais en timestamp 
        //division par 86400 = 1jour
              $dateEnd = strtotime($_givenDate[$tmp_key])/86400;
              $datBegin = strtotime($_givenDate[$key])/86400;
              $tmp_diff_date []= $dateEnd - $datBegin;
            }else{
              break;
          }
              
        }
        $longestDate = max($tmp_diff_date);
        var_dump($longestDate);
        return $longestDate;

    }
}

$date = ["2019-09-18", "2019-09-19", "2019-09-27",  "2019-09-30"];
// test la function
Longstreak::getLongestStreak($date);