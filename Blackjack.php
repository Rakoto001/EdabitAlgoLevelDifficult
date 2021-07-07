<?php
class Blackjack{
    const CARD_ERROR = 'Error: error card Values, RETRY PLEASE';

    /**
     * give result for BlackJacks Game----- <21 loose and >21 win
     */
    public static function overTwentyOne(array $_params)
    {
        $tmp_gamerScore = Blackjack::checkCardValues($_params);
        $gamerResult    = Blackjack::giveGamerScore($tmp_gamerScore);
        var_dump($gamerResult);
        
        return $gamerResult;

    }

    /**
     * check the value of given array
     */
    public static function checkCardValues(array $_values)
    {
        foreach($_values as $card){

            if ( filter_var($card, FILTER_VALIDATE_INT) && $card<2){
               echo  self::CARD_ERROR;
                return die();
            // echo $card;
            }elseif(  filter_var($card, FILTER_VALIDATE_INT)){
            $numberCard[] = $card;

               
            }
            else{
            $numberCard[] = Blackjack::giveEquivalentCardNumber($card);
            }
        }
        var_dump($numberCard);
        die();
        
        return array_sum($numberCard);
    }

    /**
     * take card string value and return his exact int value
     */
    public function giveEquivalentCardNumber(string $_stringCard)
    {
        if( $_stringCard == 'J' || $_stringCard == 'K'){

            return 10;
        }elseif($_stringCard == 'Q'){

            return 1;
        }elseif($_stringCard == 'A'){

            return 1;
        }
    }

    /**
     * get the tmp_score and give if gamer win or loose
     */
    public static function giveGamerScore($_score)
    {
        if( $_score >= 21 ){
            echo 'winner';
            return true;
        }else{
            echo 'looser';

            return false;
        }
    }
}

// test the function

$cards = ["J", "Q", 1];
Blackjack::overTwentyOne($cards);