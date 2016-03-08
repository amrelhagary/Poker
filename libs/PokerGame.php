<?php

namespace poker\libs;

use poker\libs\CardType;
use poker\libs\CardShape;

class PokerGame
{
    public function __construct()
    {
    }

    public function init()
    {
        $suit = array();
        $suit[0] = new Suit(new CardColor(CardColor::$BLACK),new CardShape(CardShape::$SPADES));
        $suit[1] = new Suit(new CardColor(CardColor::$RED),new CardShape(CardShape::$HEARTS));
        $suit[2] = new Suit(new CardColor(CardColor::$BLACK),new CardShape(CardShape::$CLUBS));
        $suit[3] = new Suit(new CardColor(CardColor::$RED),new CardShape(CardShape::$DIAMONDS));

        return new CardDick($suit);

    }
}