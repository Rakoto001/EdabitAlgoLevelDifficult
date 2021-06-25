<?php
class Score{
    
    public function getScore($_numbers)
    {
        $myScore = [];
        $myAdverseScore =[];
        foreach($_numbers as $key => $number)
        {
            if($key % 2 == 0){
                 $myScore[] = $number;
            }else{
                $myAdverseScore[] = $number;
            }
        }

         return ['myScore' => $myScore, 'advertScore' => $myAdverseScore];
    }


    public static function cumulativeScore($_numbers)
    {
        $myTempScore = 0;
        $advertTempScore = 0;
        foreach($_numbers as $key=> $number){
            if($key == 'myScore'){
                $len = count($number);
                for($i = 0; $i<$len; $i++){
                        $myTempScore = $number[$i] + $myTempScore;
                        $myLastScore[] = $myTempScore;
                    }
            $myScore[] = $myLastScore;
            }else{
                $len = count($number);
                for($i = 0; $i<$len; $i++){
                        $advertTempScore = $number[$i] + $advertTempScore;
                        $advertLastScore[] = $advertTempScore;
                    }
            $advertScore[] = $advertLastScore;
            }
        }
        return ['myScore' => $myScore, 'advertScore' =>  $advertScore];
    }

    public static function getResults($_cumulativeScores)
    {
         $myScores = $_cumulativeScores['myScore'][0];
        //  var_dump( $myScore);
         $myAdvertScores = $_cumulativeScores['advertScore'][0];
         $resultLen = count($myScores);
        
         for($i=0; $i<$resultLen; $i++){
             if($myScores[$i] < $myAdvertScores[$i]){
                 $results[] = 'O';
             }else{
                 $results[] = 'Y';
             }
         }
         return $results;
    }

    public static function giveResults($_datas)
    {
       $dispathcedScores = Score::getScore($_datas);
       $cumulativeScores = Score::cumulativeScore($dispathcedScores);
       $finaleResults    = Score::getResults($cumulativeScores);
       print_r($finaleResults);

    }
}

$score = [5, 15, 17, 35, 16, 40, 66, 12, 10, 9];

Score::giveResults($score);