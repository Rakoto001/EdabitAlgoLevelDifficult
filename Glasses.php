<?php
class Glasses{
    public static function findG($_datas)
    {
    //   var_dump(  array_search('O-O', $_datas) );
       foreach($_datas as $key => $data){
          // preg_match : Effectue une recherche de correspondance 
          //avec une expression rationnelle standard
        if (preg_match('/[O][-]{1,}[O]/', $data)) {
            $result = array_search($data, $_datas);
            var_dump($result);
            return $result;
          }
       }
    }
}
$input = ["phone", "O-O", "coins", "keys"];
Glasses::findG($input);