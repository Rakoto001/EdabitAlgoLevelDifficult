<?php
class Box{
    public static function makeBox(int $_number)
    {
        for($largeur = 1; $largeur< $_number ; $largeur++){
            echo '#';
              
            for($hauteur=0; $hauteur<$largeur; $hauteur++){
                echo '#';
    
              }

            
        }
       

    }
}
$n = 5;
Box::makeBox($n);