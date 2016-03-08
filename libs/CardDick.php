<?php
namespace poker\libs;
use poker\libs\Card;
use poker\libs\Suit;


class CardDick
{


	private $suits = array();

	public function __construct($suits)
	{
		$this->suits = $suits;
	}

	public function shuffle()
	{
		return shuffle($this->cards);
	}

	public function getCards()
	{
		$cards = array();
		foreach($this->suits as $suit)
		{
			if($suit instanceof Suit)
			{
				foreach($suit->getCards() as $card)
				{
					$cards[] = $card;
				}
			}
		}

		return $cards;
	}
}