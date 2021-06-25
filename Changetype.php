<?php
class Changetype{

    public static function changeTheType(array $_values)
    {
        foreach($_values as $type){
            if(filter_var($type, FILTER_VALIDATE_INT)){
                if(Changetype::checkPair($type) == true){
                   $newValue = $type + 1;
                }
            }
        }
        echo $newValue;
        return $newValue;

    }

    public static function checkPair($_numbers)
    {
        if($_numbers % 2 == 0){
            return true;
       }
    }
}
$vals = ["a", 12, true];

Changetype::changeTheType($vals);
