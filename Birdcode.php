<?php
class Birdcode{
    public static function createBirdCode(array $_params)
    {
        foreach($_params as $value){
            $value = explode(' ', $value);
            // var_dump($value);
            Birdcode::checkValueLength($value);
            
        }
    }

    /**
     * check the lenth value and give a response in eachcase
     */
    public static function checkValueLength($_paramsValues)
    {
        $lenthValue = count($_paramsValues);

        if($lenthValue == 1){
            foreach($_paramsValues as $birdName){
                $results[] = strtoupper($birdName[0].$birdName[1].$birdName[2].$birdName[3]);
            }
            var_dump($results);
            return $results;
        }
2
        if($lenthValue == 2){

            foreach($_paramsValues as $birdName){
            // var_dump($birdName[0].$birdName[1]);

                $results[] = strtoupper($birdName[0].$birdName[1]);
            }
            var_dump($results);

            return $results;

        }

        if($lenthValue == 3){
            foreach($_paramsValues as $key => $birdName){
                
                if( $key == 2){
                    echo $key;
                    // var_dump($birdName[0]);
                    $results[] = strtoupper($birdName[0].$birdName[1]);
                }else{
                    $results[] = strtoupper($birdName[0]);

                }
            }
            var_dump($results);
            return $results;
        }

    }
}

$birds1 = ["Bobolink", "American White Pelican"];

Birdcode::createBirdCode($birds1);