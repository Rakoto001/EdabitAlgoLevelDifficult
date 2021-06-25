<?php
// Elements of matrix a
class ReverseMatrix{
    public function reverseAll($_originalArrays)
    {
        foreach($_originalArrays as $originals){
            $tmp_x[] = strval($originals[0]);
            $tmp_y[] = strval($originals[1]);
            $tmp_z[] = strval($originals[2]);
        }
        $x = array_reverse($tmp_x);
        $y = array_reverse($tmp_y);
        $z = array_reverse($tmp_z);
        $dataArrays = [$x,$y, $z];
        $newArays = array_replace($_originalArrays, $dataArrays);
        $rows     = count($newArays);
        $cols     = count($newArays[0]);
        echo '<h3> After reverse matrix : </h3>';
        echo ('<br>');
        for($i = 0; $i < $rows; $i++)
        {
        for($j = 0; $j < $cols; $j++)
        {
        $results[] = ($newArays[$i][$j] . " ");
        }
        $results[] = (" <br>");
        }
    print_r( $results);
    return $results;

    }


}



$a= array( array(1, 2, 3), array(4, 5, 6), array(7, 8, 9) );


ReverseMatrix::reverseAll($a);