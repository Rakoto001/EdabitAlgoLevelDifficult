<?php
class Studentperfect{

    /**
     * test All or Nothing function
     */
    public  static function possiblyPerfect(array $_arrayParams1, array $_arrayParams2)
    {
        $lenth = count($_arrayParams1);
        $estimateNoteWin = $lenth/2;
        $studentFalseANswer = 0;
        $studentTrueANswer  = 0;
        for( $index = 0; $index<$lenth; $index ++){
            if( $_arrayParams1[$index] != $_arrayParams2[$index]){
                $studentFalseANswer ++;
            }
        }
        $possibilityResults = Studentperfect::checkStudentNotes($studentFalseANswer, $lenth, $estimateNoteWin);
        echo $possibilityResults;

        return $possibilityResults;

    }

    /**
     * check the notes od students
     */
    public static function checkStudentNotes($_studentAnswers, $_arrayLenth, $_estimateNoteWin)
    {
        // si nombre de réponse fausse == maxLenth return true,
        if(  $_studentAnswers == $_arrayLenth ){
            echo '1';
            return true;

        // si nombre de réponse fausse est sup a estimation return false, student fail
        }elseif($_studentAnswers > $_estimateNoteWin){
            echo '0';
            return false;

       //autre return true
        }else{
            echo '1';
            return true;
        }
    }
}

// test th function
$p1 = ["B", "A", "_", "_"];
$p2 = ["B", "A", "C", "C"];

$params1 = ["B", "_", "B"];
$params2 = ["B", "D", "C"];

$cas1 = ["T", "_", "F", "F", "F"];
$cas2 = ["F", "F", "T", "T", "T"];

Studentperfect::possiblyPerfect($p1, $p2);