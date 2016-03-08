<?php
namespace poker\libs;

use poker\libs\CardColor;
use poker\libs\CardShape;
use poker\libs\CardType;

class Suit
{
	private $color;
    private $shape;
    private $cards;

	public function __construct(CardColor $color,CardShape $shape)
    {
        $this->color = $color;
        $this->shape = $shape;
        $this->cards = $this->buildCards();
	}

    public function buildCards()
    {
        $cards = array();
        $types = CardType::$types;

        for($i = 0 ; $i < sizeof($types) ; $i++){
            $cards[$i] = new Card(new CardType($types[$i]),$this->shape,$this->color);
        }
        return $cards;
    }

    public function getCards()
    {
        return $this->cards;
    }

}