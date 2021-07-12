<?php
class Findcrum{

    const INDEX_TO_UNSET = 1;
    const BEGIN_INDEX    = 2;
   
    /**
     * fund the element that 
     *  all elements to the left of it and all elements 
     * to the right of it sum to the same value
     */
    public static function findRealCrum(array $_params, $_indexToSlice = null, $_indexToUnset = null)
    {
        $cloneParams = $_params;
        $indexUnset  = self::INDEX_TO_UNSET;
        $index       = self::BEGIN_INDEX;
        $lenth       = count($_params);
        if($_indexToUnset != null){
            $indexUnset = $_indexToUnset;
        }
        //suprime l'index qui est choisi comme milieu de la balance
        unset($_params[$indexUnset]);
        $strParams = implode(' ', $_params);
        if ($_indexToSlice){
            $index = $_indexToSlice;
        }
        //séléctionne l'index et divise en array dans cet index
        $tmp_array_params = explode(' ', $strParams, $index);
        $results =  Findcrum::isRealFullCrum($tmp_array_params, $index, $indexUnset, $cloneParams);

    return $results;

    }

    /**
     * test if have a realFullCrum or not
     */
    public static function isRealFullCrum(array $_arrayParams, $index, $indexUnset, $cloneParams)
    {
        $tmp_params_right = '';
        $tmp_params_left = [];
        foreach( $_arrayParams as $key => $paramsToCompare){
            if($key == $index-1){
                $tmp_params_right = $paramsToCompare;
            }else{
                $tmp_params_left[] = $paramsToCompare;
            }
        }
        $tmp_sum_left  = array_sum($tmp_params_left);
        $tmp_arr_right = explode(' ', $tmp_params_right);
        $tmp_sum_right = array_sum($tmp_arr_right);
        if( $tmp_sum_right != $tmp_sum_left){
            $newIndex = $index+1;
            $newIndexUnset = $indexUnset+1;
            if( $tmp_sum_left == array_sum($cloneParams) ){
                // echo 'The array has a same value : then return -1';

                return -1;
            }

         return Findcrum::findRealCrum($cloneParams, $newIndex, $newIndexUnset);

        }elseif( $tmp_sum_right == $tmp_sum_left ){
            // var_dump('The fullCrum is : ' . $cloneParams[$indexUnset]);
            $fulcrum = $cloneParams[$indexUnset];
            
    return  $fulcrum;
        }
    }
}

$values = [1, 2, 4, 9, 10, -10, -9, 3];
// $values = [7, -1, 0, -1, 1, 1, 2, 3];
// $values = [8, 8, 8, 8];

Findcrum::findRealCrum($values);