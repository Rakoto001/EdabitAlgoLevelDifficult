<?php
 class Group{

    public static function diviseGroup(string $_params)
    {
      
    }

    public static function arrangeValue(string $_params)
    {
        $results =null;
        $arrayParams = str_split($_params);
        $lenth = count($arrayParams);
        for($index = 0; $index<$lenth; $index++){
                // $mots = 'aaabbbaabbab';
                if($arrayParams[0] == $arrayParams[$index]){
                    $sameValues[] = $arrayParams[$index];
                }else{
                    $newArrayParams = array_slice($arrayParams, $index);
                    $newParams      = implode('', $newArrayParams);
                    Group::arrangeValue($newParams);
            break;
                }
        }
        $results.= implode('', $sameValues);
        var_dump($sameValues);
        echo '<br>';
        return $sameValues;
     
    }
 }

 $mots = 'aaabbbaabbab';
 // prend le premier valeur différent dia alaina ze même @ini si a = a+1 => result aaa(lenth) si index[a]!= index[hasard] => break dia lasa function récursive 

 Group::arrangeValue($mots);